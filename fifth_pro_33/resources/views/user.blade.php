{{-- <div>
    <h1>User Form</h1>
    <form action="/user" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</div> --}}

{{-- ------------------ Put Method ------------ --}}
{{-- <div>
    <h1>User Form</h1>
    <form action="/user" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</div> --}}

{{-- ------------------ Patch Method ------------ --}}
{{-- <div>
    <h1>User Form</h1>
    <form action="/user" method="post">
        @csrf
        <input type="hidden" name="_method" value="patch">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</div> --}}
{{-- ------------------ Delete Method ------------ --}}
<div>
    <h1>User Form</h1>
    <form action="/user" method="post">
        @csrf
        <input type="hidden" name="_method" value="delete">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</div>
