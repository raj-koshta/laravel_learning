<div>
    <h3>Welcome page</h3>
    
    <a href="/home">Home</a>
    <h3>{{ URL::previous() }}</h3>
</div>

<hr style="color: #000">

<div>
    go to Named Route
    {{-- <a href="home/profile/user"> Named Route</a> --}}
    <a href="{{ route('nr') }}"> Named Route</a>
</div>