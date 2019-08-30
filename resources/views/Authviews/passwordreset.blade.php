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
<main class="py-4"><div class="container"><div class="row justify-content-center">
 <div class="col-md-8"><div class="card"><div class="card-header">Reset Password</div>
 <div class="card-body">
<form method="POST" action="/resetaction">
<input name="_token" value="qcbe7bKMP6uJY6A7LuYdInN9pNOOwqT1UnJtXraD" type="hidden">
            @csrf 
<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label> 

<div class="col-md-6">
<input id="email" name="email" value="" required="required" autocomplete="email" autofocus="autofocus" class="form-control " type="email">
</div>
</div> 
<div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
<button type="submit" class="btn btn-primary">Send Reset Link
</button></div></div></form></div></div></div></div></div></main>
@endsection