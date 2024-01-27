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
                            <th>User</th>
                            <th>Photo_befor</th>
                            <th>points_after</th>
                            <th>points</th>
                            <th>Add points</th>




                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>

                            <td class="image-cell">
                                @if (isset($latestImages[$user->id]))
                                    <img style="max-width: 100px; max-height: 100px;"
                                        src="{{ asset('storage/images/imageafter/' . $latestImages[$user->id]->photo_after) }}"
                                        alt="Last Photo">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="image-cell">
                                @if (isset($latestImages[$user->id]))
                                    <img style="max-width: 100px; max-height: 100px;"
                                        src="{{ asset('storage/images/imagebefor/' . $latestImages[$user->id]->photo_before) }}"
                                        alt="Last Photo Before">
                                @else
                                    N/A
                                @endif
                            </td>

                            <td>{{ $user->all_point }}</td>
                                <td>
                                    <div class="text-right">
                                        <form action="{{ route('add-points') }}" method="post" style="display: inline-block;">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            <input type="hidden" name="points" value="10">
                                            <button type="submit" class="btn btn-success">Add 10</button>
                                        </form>
                    
                                        <form action="{{ route('add-points') }}" method="post" style="display: inline-block;">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            <input type="hidden" name="points" value="5">
                                            <button type="submit" class="btn btn-warning">Add 5</button>
                                        </form>
                                    </div>
                            </tr>
                        @endforeach


                    </tbody>


                </table>
            </div>
        </div>
    </div>
@endsection
