@extends('layouts.admin.master')

@section('title', 'Category')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" action="{{ url('admin/category/store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="categoryModalLabel">Add new category</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="">Title</label>
                        <input class="form-control" type="text" name="title" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Description</label>
                        <input class="form-control" type="text" name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input class="form-control" type="file" name="image" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="categoryEditModal" tabindex="-1" aria-labelledby="categoryEditModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="editCategoryForm" class="modal-content" action="{{ url('admin/category/update') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="categoryEditModalLabel">Edit category</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="">Title</label>
                        <input class="form-control" type="text" name="title" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Description</label>
                        <input class="form-control" type="text" name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input class="form-control" type="file" name="image" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>



    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-2 text-gray-800">Categories</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoryModal">
            <i class="fas fa-edit"></i> Add New
        </button>

    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Categories Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td><img src="{{ asset('uploads/category/' . $category->image . '') }}" alt=""
                                        height="32"></td>
                                <td>
                                    <button class="btn btn-info btn-edit" type="button" data-category="{{$category->id}}" data-toggle="modal" data-target="#categoryEditModal"><i
                                        class="fas fa-edit"></i></button>
                                    <a href="{{ url('admin/category/' . $category->id . '/delete') }}" class="btn btn-danger"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>

    
    <script>
        let editBtns = document.querySelectorAll('.btn-edit');
        editBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                let categoryEditModal = document.getElementById('categoryEditModal');
                let categoryId = btn.getAttribute('data-category');
                fetchCategoryData(categoryId);
                console.log(btn.getAttribute('data-category'));
            })
        });

        const fetchCategoryData = (categoryId) => {
            const url = "api/category/"+categoryId;
            fetch(url, {
                method: 'GET', // or 'POST', 'PUT', 'DELETE', etc.
                headers: {
                    'Content-Type': 'application/json'
                    // other headers as needed
                },
                body: JSON.stringify(data) // data to be sent in the request body (for POST or PUT requests)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json(); // parse the JSON response
            })
            .then(data => {
                // process the data
                console.log(data)
            })
            .catch(error => {
                // handle the error
                console.error('There was a problem with your fetch operation:', error);
            });
        }
    </script>
@endsection
