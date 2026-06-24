<div>
    {{ print_r($users) }}
</div>

<h1>Users List</h1>

<table style="border: 1px solid #333">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Email Varified</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email_verified_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
