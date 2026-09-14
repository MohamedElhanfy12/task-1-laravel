<h1>All Users</h1>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user['id'] }}</td>
        <td>{{ $user['name'] }}</td>
        <td>{{ $user['age'] }}</td>
        <td><a href="/users/{{ $user['id'] }}">View</a></td>
    </tr>
    @endforeach
</table>

@if(!empty($selectedUser))
    <hr>
    <h2>User Details</h2>
    <p><strong>ID:</strong> {{ $selectedUser['id'] }}</p>
    <p><strong>Name:</strong> {{ $selectedUser['name'] }}</p>
    <p><strong>Age:</strong> {{ $selectedUser['age'] }}</p>
    <a href="/users">Close Details</a>
@endif