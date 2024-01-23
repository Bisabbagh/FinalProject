@extends('adminfront.master')

@section('pagehead')
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">edit</h1>
           </div> 
@endsection
@section('content')
    <div class="container">
        <!--<h1>Edit User</h1>-->
        <form method="post" action="#">
            @csrf
            @method('PATCH')
            <label>Name:</label>
            <input type="text" name="name" value="j" class="form-control" required>
            <!-- Add other form fields as needed -->
            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
    @endsection