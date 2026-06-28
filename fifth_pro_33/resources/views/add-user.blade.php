<div>
    <h1>Add New User</h1>
    @if(session('success'))
    <p style="color: #000; background: green; padding: 10px 15px;">
        {{ session('success') }}
    </p>
    @endif
    @if(session('name'))
    <p style="color: #000; background: yellow; padding: 10px 15px;">
        {{ session('name') }}
        {{ session()->keep('name') }}
    </p>
    @endif
    {{-- {{ session()->reflash() }} --}}
    
    <form action="add-user" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Enter Name">
        <br>
        <input type="email" name="email" id="email" placeholder="Enter Email">
        <br>
        <input type="number" name="phone" id="phone" placeholder="Enter Number">
        <br>
        <input type="submit" value="Add User">
    </form>
</div>
