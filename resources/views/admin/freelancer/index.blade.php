@extends('layouts.admin.master')
@section('title', 'Freelancer')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Freelancer Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Company Name</th>
                        <th>Mobile</th>
                        <th>Id Proof</th>
                        <th>Experience</th>
                        <th>Profile Photo</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($freelancers as $freelancer)
                        <tr>
                            <td>{{$freelancer->id}}</td>
                            <td>{{$freelancer->name}}</td>
                            <td>{{$freelancer->company}}</td>
                            <td>{{$freelancer->mobile}}</td>
                            <td><img src="{{asset('uploads/documents/'.$freelancer->id_proof)}}" alt="" height="32"></td>
                            <td>{{$freelancer->expirience}}</td>
                            <td><img src="{{asset('uploads/freelancer/'.$freelancer->image)}}" alt="" height="32"></td>
                            <td>

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
@endsection