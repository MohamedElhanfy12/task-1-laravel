<!DOCTYPE html>
<html>
<head>
    <title>All Categories</title>
</head>
<body>

<h1>All Categories</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
    </tr>

    @foreach($categories as $category)
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>