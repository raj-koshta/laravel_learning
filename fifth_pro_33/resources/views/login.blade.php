<div>
    <h1>User Login</h1>
    <form action="/login" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</div>