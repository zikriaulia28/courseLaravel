@extends('Layout/isGuest')

@section('content')
    {{-- <div>
        <h3>Login Page</h3>
        <i>{{ session()->get('error') }}</i>
        <form method="POST" action={{route('login_action')}}>
            @csrf
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <button type="submit">LOGIN</button>
        </form>
    </div> --}}
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">Register</h1>
                <div class="card-text">
                    <form method="POST" action={{route('register_action')}}>
                        @csrf
                      <div class="form group mb-3">
                        <label  class="form-label">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="username">
                      </div>
                      <div class="form group mb-3">
                        <label class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="password">
                      </div>
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>

@endsection