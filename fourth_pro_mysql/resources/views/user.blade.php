{{-- <div>
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
</table> --}}

{{-- ---------------- API Reponse 30 ---------------- --}}
{{-- <h1>Users Data</h1>
{{ print_r($data) }}

<ul>
    <li>
        Name: <b>{{ $data->name }}</b>
    </li>
    <li>
        Email: <b>{{ $data->email }}</b>
    </li>
    <li>
        Street: <b>{{ $data->address->street }}</b>
    </li>
    <li>
        City: <b>{{ $data->address->city }}</b>
    </li>
</ul> --}}

{{-- --------------------------Database Query Builders ---------------- --}}
{{-- <h1>Users List</h1>

<table border="1">
    <thead>
        <tr>
            <th>SN.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <?php $sn = 1 ?>
        @foreach ($users as $user)
        <tr>
            <td>{{ $sn++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->password }}</td>
        </tr>
        @endforeach
    </tbody>
</table> --}}

{{-- --------------------------Eloquent Model : Query Builders ---------------- --}}
<h1>Users List</h1>

<table border="1">
    <thead>
        <tr>
            <th>SN.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <?php $sn = 1 ?>
        @foreach ($users as $user)
        <tr>
            <td>{{ $sn++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->password }}</td>
        </tr>
        @endforeach
    </tbody>
</table>