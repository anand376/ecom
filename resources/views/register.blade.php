@extends('master')
@section('content')
<div class="container custom-login">
  <form action="register" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">User name</label>
      <div class="col-sm-3">
        <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Username">
      </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-3">
          <input type="email" name="email" class="form-control" id="inputEmail3">
        </div>
      </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-3">
        <input type="password" name="password" class="form-control" id="inputPassword3">
      </div>
    </div>
    
    <div class="row mb-3">
      <div class="col-sm-10 offset-sm-2">
        
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>
<h1>login page</h1>
<button class="btn btn-primary">click on me</button>
@endsection
