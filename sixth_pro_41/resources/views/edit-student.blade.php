<div>
    <h1>Update Student Data</h1>
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" id="name" value="{{ $student->name }}" placeholder="Name">
        <br>
        <br>
        <input type="email" name="email" id="email" value="{{ $student->email }}" placeholder="Email">
        <br>
        <br>
        <input type="number" name="batch" id="batch" placeholder="batch" value="{{ $student->batch }}">
        <br>
        <br>
        <input type="submit" value="Update">
        <a href="/list-student">Cancel</a>
    </form>
</div>