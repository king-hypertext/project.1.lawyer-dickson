<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SaveRequest;
use App\Models\Events;
use App\Models\Messages;
use App\Models\ModelJoin;
use App\Models\News;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    //
    public function handleLogin(LoginRequest $request)
    {
        $request->validated();
        // $credentials = $request->validated();
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }
        return back()->with('failed', 'Invalid login credentials');
    }

    public function handleSave(SaveRequest $request)
    {
        // dd($request);
        $request->validated();
        $secret_code = 2024;
        if ($request->code == $secret_code) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            if ($user) {
                auth()->attempt($request->only('username', 'password'));
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }
        return back()->with('failed', 'Invalid Secret code');
    }

    public function handleLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

   
    public function handleResetPassword(Request $request)
    {
        // dd($request);
        $request->validate([
            'reset_code' => 'required|numeric|exists:password_reset_tokens,token',
            // 'password' => 'required|confirmed',
            'password' => 'required'
        ]);

        $update_user = DB::table('users')->where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        if ($update_user) {
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();
            return redirect()->route('login')->with('changed', 'changed');
        }
        // return back()->with('error');
    }

    public function handleResetPasswordLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);
        $reset_code = rand(100000, 999999);
        /* $insert_token = */
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $reset_code,
            'created_at' => Carbon::now()
        ]);
        // if ($insert_token) {
        //     $sendMail = Mail::send('admin.mail.reset-password', ['code' => $reset_code], function ($message) use ($request){
        //         $message->to(/* $request->email */ 'oseikin7@gmail.com');
        //         $message->subject('Reset Password');
        //     });
        //     if (!$sendMail) {
        //         DB::table('password_reset_tokens')->where('email', $request->email)->delete();
        //         return back()->with('error','error');
        //     }
        // }
        return redirect()->route('reset.password')->with('email', $request->email);
    }

    function handleVolunteers()
    {
        $volunteers = ModelJoin::latest()->paginate(10);
        // dd($volunteers);
        return view('admin.volunteers', ['volunteers' => $volunteers, 'title' => 'VOLUNTEERS | ADMIN']);
    }
    function handleMessages()
    {
        $messages = Messages::latest()->paginate(10);
        // dd($messages);
        return view('admin.messages', ['messages' => $messages, 'title' => 'MESSAGES | ADMIN']);
    }
    function handleEvents()
    {
        $events = 0/* = Events::all() */;
        // dd($messages);
        return view('admin.events', ['events' => $events, 'title' => 'EVENTS | ADMIN']);
    }
    function handleSettings()
    {
        // $messages = Messages::all();
        // dd($messages);
        return view('admin.settings', ['title' => 'SETTINGS | ADMIN']);
    }

    public function dashboard()
    {
        return view('admin.dashboard', ['title' => 'DASHBOARD | ADMIN']);
    }

    public function handlePostNews(Request $request): RedirectResponse
    {
        $url =  join('-', explode(' ', trim($request->title)));
        $request->validate([
            'title' => 'required|string',
            'headline' => 'required|string',
            'details' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg,webp',
            'image_01' => 'file|mimes:png,jpg,jpeg,webp',
            'image_02' => 'file|mimes:png,jpg,jpeg,webp'
        ]);
        $img_1 = $request->file('image');
        $img_2 = $request->file('image_01');
        $img_3 = $request->file('image_02');

        $newsImage01 = strtolower($url . '-image-1' . '.' . $img_1->extension());
        $newsImage02 = '';
        $newsImage03 = '';
        $img_1->move(public_path('assets/images/news'), $newsImage01);

        if ($img_2) {
            $newsImage02 =  strtolower($url . '-image-2' . '.' . $img_2->extension());
            $img_2->move(public_path('assets/images/news'), $newsImage02);
        }
        if ($img_3) {
            $newsImage03 = strtolower($url . '-image-3' . '.' . $img_3->extension());
            $img_3->move(public_path('assets/images/news'), $newsImage03);
        }
        $user = DB::table('users')->select('name')->first();
        $name = "$user->name";
        $post = News::create([
            'title' => strtoupper($request->title),
            'headline' => strtolower($request->headline),
            'details' => strtolower($request->details),
            'url' => strtolower($url),
            'image' => $newsImage01,
            'image_1' => $newsImage02,
            'image_2' => $newsImage03,
            'user' => $name,
            'date' => Carbon::now()
        ]);
        if ($post)
            return back()->with('success');
    }

    public function handleNewsPage($new)
    {
        $news = News::where('url', '=', "$new")->first();
        if (empty($news)) {
            abort(404, 'Page Not Found');
        }
        return view('pages.news.index', ['news' => $news, 'name' => $news->title]);
    }

    public function handleNews()
    {
        $data = News::latest()->paginate(10);
        return view('admin.news', ['title' => 'VIEW NEWS | ADMIN', 'news' => $data]);
    }

    public function searchNews(Request $request)
    {
        $search = $request->q;
        if (empty($search)) {
            return redirect()->route('news');
        }
        $results = News::where('title', 'LIKE', "%$search%")->orWhere('headline', 'LIKE', "%$search%")->latest()->paginate(10);
        return view('pages.search', ['data' => $results, 'title' => 'SEARCH NEWS', 'search' => $request->q]);
    }
    public function deleteNews(Request $request)
    {
        if (!$request->isMethod('POST')) {
            abort(404, 'Not authorized!');
        }
        try {
            News::find($request->id)->delete();
            return redirect()->route('admin.news')->with('delete', 'News has been deleted');
        } catch (\Throwable $error) {
            throw $error;
        }
    }
    public function handleSiteSettings(Request $request){
        
    }
}
