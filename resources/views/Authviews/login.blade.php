@extends('index')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<main class="py-4"><div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8"><div class="card"><div class="card-header">Login</div> 
    <div class="card-body">
    <form method="POST" action="{{URL::to('/logs')}}">
    <input name="_token" value="" type="hidden">
    @csrf
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label> 
       <div class="col-md-6">
           <input id="email" name="email" value="" required="required" autocomplete="email" autofocus="autofocus" class="form-control " type="email"></div>
    </div> 
    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label> 
            <div class="col-md-6">
        <input id="password" name="password" required="required" autocomplete="current-password" class="form-control " type="password">
             </div>
        </div> 
<div class="form-group row">
    <div class="col-md-6 offset-md-4"><div class="form-check"><input name="remember" id="remember" class="form-check-input" type="checkbox"> 
       <label for="remember" class="form-check-label">Remember Me</label></div>
   </div>


</div> <div class="form-group row mb-0"><div class="col-md-8 offset-md-4"><button type="submit" class="btn btn-primary">Login
</button> <a href="/reset" class="btn btn-link">Forgot Your Password?</a></div></div></form>
</div>
</div>
</div>
</div>
</div>
</main>
@endsection