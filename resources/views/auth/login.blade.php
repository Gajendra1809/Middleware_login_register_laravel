@extends("layouts.default")

@section('title','Login')

@section("content")

<div style="width:600px;margin:auto">
<div class="mt-5">
<h2>Please Login...</h2>
</div>

<div>
@if(session()->has('success'))
    <h3 class="text-success ">{{session('success')}}</h3>
@endif
@if(session()->has('error'))
    <h3 class="text-danger ">{{session('error')}}</h3>
@endif
</div>

<form class="container mt-5" action="{{route('login.post')}}" method="POST">
    @csrf
    <!-- Email input -->
    <div class="form-outline mb-4 ">
        <input name="email" type="email" id="form2Example1" class="form-control" />
        @if($errors->has('email'))
            <span class="text-danger">{{$errors->first('email')}}</span>
        @endif
        <label class="form-label" for="form2Example1">Email address</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input name="password" type="password" id="form2Example2" class="form-control" />
        @if($errors->has('password'))
            <span class="text-danger">{{$errors->first('password')}}</span>
        @endif
        <label class="form-label" for="form2Example2">Password</label>
    </div>


    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

    <!-- Register buttons -->
    <div class="text-center">
        <p>Not a member? <a href="{{route('register')}}">Register</a></p>

    </div>
</form>
</div>
@endsection
