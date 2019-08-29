@extends('layouts.index')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header py-4">
                
                <a class="btn btn-default box-title" href="{{ route('users.create') }}">New User</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <table class="table table-bordered table-hover text-center">

                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Controls</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach ($users as $user)
                        <tr class='clickToShow' data-href="{{ route('users.show', [ 'id' =>  $user->id ]) }}">
                            <td>{{ $user->name}}</td>
                            <td>{{ $roles->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                           
                                <a href="{{ route('users.edit', ['id' => $user->id ]) }}" class="float-left"><i class="fas fa-pencil-alt"></i></a>
                                <form class="float-right" action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-link fas fa-trash-alt text-danger"></button>
                                </form>
                            
                            
                                
                            </td>
                        </tr>
                    @endforeach
                       
                        
                       
                    </tbody>


                </table>
            </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </div>
    <!-- /.col -->
</div>

@endsection
