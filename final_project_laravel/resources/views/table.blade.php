@extends('adminfront.master')

@section('pagehead')
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Table</h1>
           </div> 
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>Salary</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        
                    </tr>
                </tfoot>
                <tbody>

                    <tr>
<td>Tiger Nixon</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
<td>
<!-- Action buttons for each row -->
<button class="btn btn-primary btn-sm" >Edit</button>
</td>
<td>
<!-- Action buttons for each row -->
<button class="btn btn-danger btn-sm" >Delete</button>
</td>
</tr>

                    
                </tbody>
                <div class="text-right mb-3">
                    <button class="btn btn-success">Create New User</button>
                </div>
            </table>
        </div>
    </div>
</div>
    
@endsection