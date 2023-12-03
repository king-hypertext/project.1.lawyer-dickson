@extends('admin.layout')
@section('content')
    <h1>messages</h1>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Message</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $index => $message)
                        <tr>
                            <th class="text-muted" scope="row">{{ $index + 1 }}</th>
                            <td class="">{{ $message->fullname }}</td>
                            <td class="">{{ $message->message }}</td>
                            <td class="">{{ $message->email }}</td>
                            <td class="">{{ $message->phone_number }}</td>
                            {{-- <td class="">
                                <form action='{{ url('/admin/news/' . $new->id . '/delete') }}' method="post">
                                    @csrf
                                    <button class="btn btn-outline-danger" onclick="confirmDelete(event)">Delete</button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {{ $messages->links('layout.pagination') }}
            </div>
        </div>
    </div>
@endsection
