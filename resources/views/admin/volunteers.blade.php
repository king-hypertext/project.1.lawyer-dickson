@extends('admin.layout')
@section('content')
    <h1>volunteers</h1>
    <div class="d-flex justify-content-end">
        <button class="btn btn-lg btn-outline-primary mb-1" data-bs-toggle="modal" data-bs-target="#add-volunteer">Add
            Volunteer
        </button>
    </div>
    @if (session('response'))
        <div class="alert alert-success alert-dismissible fade show" style="width: 80% !important;" role="alert">
            Volunteer Added Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Location</th>
                        <th scope="col">Interest</th>
                        <th scope="col">Comments</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($volunteers as $index => $volunteer)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $volunteer->fullname }}</td>
                            <td>{{ $volunteer->phone_number }}</td>
                            <td>{{ $volunteer->email }}</td>
                            <td>{{ $volunteer->location }}</td>
                            <td>{{ $volunteer->interest }}</td>
                            <td>{{ $volunteer->comments }}</td>
                            <td>
                                some actions
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $volunteers->links('layout.pagination') }}
        </div>
    </div>
    <div class="modal fade" id="add-volunteer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="add-volunteer-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-white">
                <div class="modal-body">
                    <div class="d-flex justify-content-between">
                        <h1 class="modal-title fs-5" id="add-volunteer-label">Add Volunteer</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('member.join') }}" method="POST" role="form">
                        @csrf
                        <div class="form-floating mb-3">
                            <input required="" type="email" name="email" class="form-control rounded-0 input-field"
                                id="email" placeholder="email@example.com" value="">
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input required="" type="text" name="fullname" class="form-control rounded-0 input-field"
                                id="fullname" placeholder="Fullname" value="">
                            <label for="fullname">Fullname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input required="" type="number" name="phone_number"
                                class="form-control rounded-0 input-field" id="phoneNumber" placeholder="Phone Number"
                                value="">
                            <label for="phoneNumber">Phone Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input required="" type="text" name="location" class="form-control rounded-0 input-field"
                                id="location" placeholder="Location" value="">
                            <label for="location">Location</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input required="" type="text" name="interest" class="form-control rounded-0 input-field"
                                id="interest" placeholder="Interest" value="">
                            <label for="interest">Interest</label>
                        </div>
                        <div class="form-floating">
                            <textarea required class="form-control rounded-0 input-field" name="comments"
                                placeholder="Write a message or a comment here" id="comments" style="height: 130px" value=""></textarea>
                            <label for="comments">Comments/Message</label>
                        </div>
                        <div class="form-group my-4">
                            <button type="submit" class="btn btn-outline-info btn-lg w-100 rounded-0">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <style>
        .form-control.input-field {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: var(--bs-black);
            background-color: var(--bs-body-bg);
            background-clip: padding-box;
            border: 1px solid #9ea8b1 !important;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: var(--bs-border-radius);
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control.input-field:focus {
            border-color: #86b7fe !important;
            box-shadow: none !important;
        }
    </style>
@endsection
@if (session('delete'))
    <script>
        const showSuccessAlert = Swal.mixin({
            position: 'top-end',
            toast: true,
            timer: 5500,
            showConfirmButton: false,
            timerProgressBar: false,
        });
        showSuccessAlert.fire({
            icon: 'success',
            text: 'News deleted successfully',
            padding: '10px',
            width: 'auto'
        });
    </script>
@endif
