@extends('adminfront.master')

@section('pagehead')
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">view</h1>
           </div> 
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">points table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>User_id</th>
                        <th>Points</th>
                        
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        
                    </tr>
                </tfoot>
                <tbody>   
     @foreach ($points as $point)

    <tr>
        <td>{{$point ->id}}</td>
        <td>{{$point ->user_id}}</td>
        <td>{{$point->point}}</td>
        
        <td>
        <!-- Action buttons for each row -->
        <a href="{{ route('editpoint',['point'=> $point])}}" class="btn btn-primary btn-sm">Edit</a></td>
        <td>
        <!-- Action buttons for each row -->
        <button class="btn btn-danger btn-sm" >Delete</button>
        </td>
        </tr>
        
                            
                        

@endforeach
</tbody>              
                <div class="text-right mb-3">
                    <a href="{{ route('createpoint') }}" class="btn btn-success mb-3">Create New User</a>
                </div>
            </table>
        </div>
    </div>
</div>
    
@endsection

