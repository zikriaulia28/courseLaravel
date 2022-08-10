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
                <h1 class="card-title text-center">LOGIN</h1>
                <i>{{ session()->get('success') }}</i>
                <div class="card-text">
                    <form method="POST" action={{route('login_action')}}>
                        @csrf
                      <div class="form group mb-3">
                        <label for="exampleDropdownFormEmail1" class="form-label">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="username">
                      </div>
                      <div class="form group mb-3">
                        <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                        <a href="#" style="float: right; font-size: 12px;">Forgot password?</a>
                        <input class="form-control" type="password" name="password" placeholder="password">
                      </div>
                      <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </form>
                    <div class="signup">
                        Don't have an account? <a href="register">Register</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection