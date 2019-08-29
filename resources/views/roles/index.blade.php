@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header py-4">
                
                <a class="btn btn-default box-title" href="{{ route('roles.create') }}">New Role</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <table class="table table-bordered table-hover text-center">

                    <thead>
                        <tr>
                            <th>Role Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach ($roles as $role)
                        <tr class='clickToShow' data-href="{{ route('roles.show', [ 'id' =>  $role->id ]) }}">
                            <td>{{ $role->name }}</td>
                            
                            <td><a href="{{ route('roles.edit', ['id' => $role->id ]) }}"><i class="fas fa-pencil-alt"></i></a></td>
                            <td>
                                <form action="{{ route('roles.destroy', ['id' => $role->id]) }}" method="POST">
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