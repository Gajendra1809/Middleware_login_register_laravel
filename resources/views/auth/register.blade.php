@extends("layouts.default")

@section('title','Register')

@section("content")

<form class="container mt-5" action="{{route('register.post')}}" method="POST">
    @csrf

    <div class="form-outline mb-4 ">
        <input name="name" type="text" id="form2Example3" class="form-control" />
        @if($errors->has('name'))
            <span class="text-danger">{{$errors->first('name')}}</span>
        @endif
        <label class="form-label" for="form2Example3">Name</label>
    </div>

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
    <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>

    
</form>
@endsection
