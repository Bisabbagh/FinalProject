@extends('adminfront.master')

@section('pagehead')
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">create points</h1>
           </div> 
@endsection
@section('content')
<div class="container">
    <!--<h1>Create point</h1>-->
    <form method="post" action="{{ route('storepoints') }}">
        @csrf
        @method('post')
        <label>User_id:</label>
        <input type="text" name="user_id" class="form-control" required>
        <label>User points:</label>
        <input type="text" name="point" class="form-control" required>
        
        <!-- Add other form fields as needed -->
        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
</div>

    
@endsection