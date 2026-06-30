<div>
    <h1>Student List</h1>
    <table border="2">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
            <td>Created</td>
            <td>Operation</td>
        </tr>
        @foreach ($students as $stu)
        <tr>
            <td>{{ $stu->name }}</td>
            <td>{{ $stu->email }}</td>
            <td>{{ $stu->batch }}</td>
            <td>{{ $stu->created_at }}</td>
            <td><a href="delete-student/{{ $stu->id }}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>