<style>
    .w-5.h-5 {
        width: 20px;
    }
</style>
<div>
    <hr>
    <h2>Search student</h2>
    <form action="search-student" method="get">
        <input type="text" name="search" placeholder="Search Via Name" value="{{ @$search }}">
        <input type="submit" value="Search">
    </form>
    <hr>
    <form action="delete-multiple-students" method="post">
        @csrf
        
        <h1>Student List</h1>
        <hr>
        <input type="submit" value="Delete Selected">
        <table border="2">
            <tr>
                <td>Action</td>
                <td>Name</td>
                <td>Email</td>
                <td>Batch</td>
                <td>Created</td>
                <td colspan="2">Operation</td>
            </tr>
            @foreach ($students as $stu)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $stu->id }}"></td>
                    <td>{{ $stu->name }}</td>
                    <td>{{ $stu->email }}</td>
                    <td>{{ $stu->batch }}</td>
                    <td>{{ $stu->created_at }}</td>
                    <td><a href="delete-student/{{ $stu->id }}">Delete</a></td>
                    <td><a href="edit-student/{{ $stu->id }}">Edit</a></td>
                </tr>
            @endforeach
        </table>
    </form>
    {{ @$students->links() }}
</div>