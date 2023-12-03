@extends('admin.layout')
@section('content')
    <h1>Posted News</h1>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Title</th>
                        <th scope="col">date</th>
                        <th scope="col">Created by</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $index => $new)
                        <tr>
                            <th class="text-muted" scope="row">{{ $index + 1 }}</th>
                            <td class="">{{ $new->title }}</td>
                            <td class="">{{ $new->date }}</td>
                            <td class="">{{ $new->user }}</td>
                            <td class="">
                                <form action='{{ url('/admin/news/' . $new->id . '/delete') }}' method="post">
                                    @csrf
                                    <button class="btn btn-outline-danger" onclick="confirmDelete(event)">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {{ $news->links('layout.pagination') }}
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        window.confirmDelete = function(e) {
            e.preventDefault();
            var form = e.target.form;
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        }
    </script>
@endsection
