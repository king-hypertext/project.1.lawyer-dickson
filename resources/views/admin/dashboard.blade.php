@extends('admin.layout')
@section('content')
    @php
        use App\Models\Messages;
        use App\Models\Events;
        use App\Models\ModelJoin;
        use App\Models\News;
    @endphp
    <h1>dashboard</h1>
    <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-white">
                    <div class="d-flex justify-content-center align-items-center justify-items-center">
                        <h3 class="d-block fs-5 text-success currency_font">
                            {{-- <span class="text-success fw-semi-bold">+</span> --}}
                            {{ count(ModelJoin::all()) }}
                        </h3>
                    </div>
                    <h6 class="text-center text-muted font-weight-normal">Total Volunteers</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-white">
                    <div class="d-flex justify-content-center align-items-center justify-items-center">
                        <h3 class="d-block fs-5 text-danger currency_font">
                            {{-- <span class="fw-semi-bold">-</span> --}}
                            {{ count(Events::all()) }}
                        </h3>
                    </div>
                    <h6 class="text-center text-muted font-weight-normal">Total Events</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-white">
                    <div class="d-flex justify-content-center align-items-center justify-items-center">
                        <h3 class="d-block fs-5 text-primary currency_font">
                            {{-- <span class="text-primary fw-semi-bold">+</span> --}}
                            {{ count(Messages::all()) }}
                        </h3>
                    </div>
                    <h6 class="text-center text-muted font-weight-normal">Messages</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-white">
                    <div class="d-flex justify-content-center align-items-center justify-items-center">
                        <h3 class="d-block fs-5 text-primary currency_font">
                            {{-- <span class="text-primary fw-semi-bold">+</span> --}}
                            {{ count(News::all()) }}
                        </h3>
                    </div>
                    <h6 class="text-center text-muted font-weight-normal">Posted News</h6>
                </div>
            </div>
        </div>
    </div>
    <style>
        .form-control {
            --bs-dark: #212529;
            --bs-secondary: #6c757d;
            --bs-border-width: 1px;
            --bs-border-style: solid;
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: var(--bs-dark);
            background-color: inherit;
            background-clip: padding-box;
            border: var(--bs-border-width) solid var(--bs-secondary);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: var(--bs-border-radius);
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            color: inherit;
            background-color: var(--bs-body-bg);
            border-color: #86b7fe;
            outline: 0;
            box-shadow: none;
            /* box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25); */
        }
    </style>

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
    @if (session('post'))
        <div class="alert alert-success alert-dismissible fade show" style="width: 80% !important;" role="alert">
            Post Successful
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <form enctype="multipart/form-data" action="/post-news" method="post">
            @csrf
            <div class="">
                <h4 class="text-center my-3">Create/Post A News</h4>
                All fields marked (<span class="text-danger">*</span>) are required.
                <div class="form-floating my-3">
                    <input required type="text" name="title" class="form-control rounded-0 input-field" id="Title"
                        placeholder="Title" />
                    <label for="Title">Title <span class="text-danger">*</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input required type="text" name="headline" class="form-control rounded-0 input-field" id="headline"
                        placeholder="headline" />
                    <label for="Title">Headline <span class="text-danger">*</span></label>
                </div>
                <div class="mb-3">
                    <textarea required class="form-control rounded-0 input-field" cols="50" rows="50" style="min-height: 340px"
                        name="details" placeholder="Write news details here" id="details">
                    </textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Upload news image <span class="text-danger">*</span></label>
                    <input required type="file" name="image" accept=".jpg,.png,.jpeg,.webp" class="form-control"
                        id="image">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image_01">Upload additional image (optional)</label>
                    <input type="file" name="image_01" accept=".jpg,.png,.jpeg,.webp" class="form-control"
                        id="image_01">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image_02">Upload additional image (optional)</label>
                    <input type="file" name="image_02" accept=".jpg,.png,.jpeg,.webp" class="form-control"
                        id="image_02">
                </div>
                <div class="form-group my-4 d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-primary btn-lg rounded-0">Post News</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        ClassicEditor.create(document.getElementById('details')).catch(error => {
            console.error(error)
        })
    </script>
@endsection
