@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
           
            <div class="box-body">
                <form class="form-horizontal" action="{{ url('users/edit',  $user->id ) }}" method="POST">
                    @csrf

                
                    <div class="box-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name"  value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Roles</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="roles">
                                        <option selected>.....</option>
                                        
                                        @foreach ($roles as $role)
                                        <option>{{ $role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                        
                        
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-4 offset-4 py-2">
                                    <button type="submit" class="btn btn-info btn-block pull-right">Save </button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </div>
    <!-- /.col -->
</div>
@endsection