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
        <form method="post" action="{{ route('updatepoints' , ['point' => $point]) }}">
            @csrf
            @method('put')
            <label>Name:</label>
            <input type="text" name="user_id" value="{{$point->user_id}}" class="form-control" required>
            <!-- Add other form fields as needed -->
            <label>point:</label>
            <input type="text" name="point" value="{{$point->point}}" class="form-control" required>
            <!-- Add other form fields as needed -->
            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
    @endsection