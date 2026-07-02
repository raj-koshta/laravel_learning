@extends('template')

@section('title','Login 2 Page')

@section('main')
<section class="login-section">
    <div class="login-box">
        <h2>Login</h2>
        <p>Welcome back! Please login to your account.</p>

        <form action="" method="POST">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Enter your password">
            </div>

            <div class="form-group remember">
                <input type="checkbox" id="remember">
                <label for="remember">Remember Me</label>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</section>
@endsection