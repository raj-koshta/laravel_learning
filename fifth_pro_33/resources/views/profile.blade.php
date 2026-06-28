<div>
    <h1>Profile</h1>
    @if(session('user'))
    <h2>Welcome {{ session('user') }}</h2>
    <h4><a href="logout">Logout</a></h4>
    @else
    <h2>No Session Found <a href="/login">Login</a></h2>
    @endif
</div>
