@extends('Layout.master')
@section('title','login')
@section('content')
<div class="row">
  
    <div class="col-md-6 offset-md-3">
     
      <div class="card my-5">

        <form class="card-body cardbody-color p-lg-5" action="{{route('loginuser')}}" method="POST">
          @csrf
          <div class="text-center">
            <h1 class="text-center text-dark ">Login </h1>
          </div>
          @if (count($errors) > 0)
          <div class="alert alert-danger">
           <ul>
           @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
           </ul>
          </div>
         @endif
          <div class="mb-3">
            <input type="text" class="form-control" id="Username" name="username"
              placeholder="User Name">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="password" placeholder="password" name="password">
          </div>
          <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
          <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
            Registered? <a href="{{route('registered.user')}}" class="text-dark fw-bold"> Create an
              Account</a>
          </div>
        </form>
      </div>

    </div>
  </div>
  <style>
      .btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}
  </style>
@endsection