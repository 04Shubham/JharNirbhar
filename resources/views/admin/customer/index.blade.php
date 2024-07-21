@extends('layouts.admin.master')
@section('title', 'Customer')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Cutomer Appointment Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Service</th>
                        <th>Problem</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->id }}</td>
                            <td>{{ $appointment->name }}</td>
                            <td>{{ $appointment->address }}</td>
                            <td>{{ $appointment->mobile }}</td>
                            <td>{{ $appointment->service->title }}</td>
                            <td>{{ $appointment->problem }}</td>
                            <td>
                                {{-- <button class="btn btn-info btn-edit" type="button" dataappointment="{{$appointment->id}}" data-toggle="modal" data-target="appointmentEditModal"><i
                                    class="fas fa-edit"></i></button>
                                <a href="{{ url('admin/appointment/' . $appointment->id . '/delete') }}" class="btn btn-danger"><i
                                        class="fas fa-trash"></i></a> --}}
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