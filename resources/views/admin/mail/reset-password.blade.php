{{-- @component('mail::message') --}}
<div style="display: flex;justify-content: center;">
            <div style="text-align: left">
                <h3># Password Reset Code</h3> <br>
                Use the below code to reset your password <br>
                <b>{{ $code }}</b> <br>
                Thanks, <br>
                Email from: {{ config('app.name') }}
            </div>
</div>
{{-- @endcomponent --}}
