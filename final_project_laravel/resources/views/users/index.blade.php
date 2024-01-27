@extends('adminfront.master')

@section('pagehead')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Management</h1>
    </div>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('users.create') }}" class="btn btn-success mb-3">Add User</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <!-- Table content goes here -->
            </table>
        </div>
    </div>
@endsection