<div>
    <form action="add-student" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="Name">
        <br>
        <br>
        <input type="email" name="email" id="email" placeholder="Email">
        <br>
        <br>
        <input type="number" name="batch" id="batch" placeholder="batch">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>
