@extends('layouts.index')
@section('content')

<div class="row">
    <div class="col-lg-12 py-4">
        <div class="box">
           
            <div class="box-body">
                <form class="form-horizontal" action="{{ action('RoleController@store') }}" method="POST">
                    @csrf

                
                    <div class="box-body card-4">

                    <div class="row">
                        <div class="col-sm-6 offset-3">
                            <div class="form-group">
                                <label for="name" class="control-label"></label>

                                <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="roleName" value="{{ $role->name }}"  placeholder="Role Name">
                                </div>
                            </div>
                            
                            <div class="form-group" style="padding-left: 40px">
                            	<div class="row">
                            		@foreach($permissions as $permission)
	                            		@foreach($rolePermissions as $rolePer)
		                            		@if(count($permissions) %3 == 0)
			                            		@if($rolePer == $permission->id)

				                            		<div class="col-4 ">
				                            			<div class="checkbox">
										                	<input class="" type="checkbox" name="permissions[]" value="{{ $permission->id }}" class="p-2" checked> {{ $permission->name }}
										                </div>
				                            		</div>
			                            		
			                            		@endif
		                            		@else
			                            		@if($rolePer == $permission->id)
				                            		<div class="col-4 ">
				                            			<div class="checkbox">
										                	<input class="" type="checkbox" name="permissions[]" value="{{ $permission->id }}" class="p-2" checked> {{ $permission->name }}
										                </div>
				                            		</div>
			                            		@else
				                            		<div class="col-4 ">
				                            			<div class="checkbox">
										                	<input class="" type="checkbox" name="permissions[]" value="{{ $permission->id }}" class="p-2"> {{ $permission->name }}
										                </div>
				                            		</div>
			                            		@endif
		                            		@endif
				                		@endforeach
				                	@endforeach
                            		
                            	</div>
                            	
                            	
				            </div>
                        </div>

                    </div>
                        
                        
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-3 offset-4 py-2">
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