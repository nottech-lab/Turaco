@extends('layouts.index')
@section('content')
 <div class="row">
    <div class="col-md-3 card">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <div class="row">
                    <div class="col-4 offset-3">
                <img class="profile-user-img img-responsive img-circle" src="/dist/img/turaco-160-160.png" alt="User profile picture">

                    </div>
                </div>

                <h3 class="profile-username text-center">{{$user->name}}</h3>

                <p class="text-muted text-center">{{$role}}</p>

                <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>Email:</b> <a class="pull-right">{{$user->email}}</a>
                </li>
                <li class="list-group-item">
                    <b>Created at:</b> <a class="pull-right">{{$user->created_at}}</a>
                </li>
                <li class="list-group-item">
                    <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
                </ul>

                
            </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

    <div class="col-md-9 card">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active m-3"><a href="#activity" data-toggle="tab">Details</a></li>
                <li class="m-3"><a href="#timeline" data-toggle="tab">Permissions</a></li>
                <li class="m-3"><a href="#settings" data-toggle="tab">Edit</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                        <div class="user-block py-3">
                        <img class="img-circle img-bordered-sm" src="/dist/img/turaco-160-160.png" alt="user image">
                            <span class="username">
                                <a href="#">{{ $user->name }}.</a>
                               
                            </span>
                        <span class="description">Created at - {{ $user->created_at}}</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                        </p>
                       
                        

                       
                    </div>
                    <!-- /.post -->


                <!-- /.post -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    issa
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                    
                </div>
                <!-- /.tab-pane -->
            </div>
        <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
    </div>
@endsection