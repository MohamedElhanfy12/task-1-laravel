<!DOCTYPE html>
<html>
<head>
    <title>All Categories</title>

    <style>
        body {
            font-family: Arial;
        }

        h1 {
            text-align: center;
            color: brown;
        }

        table {
            width: 90%;
            margin: 30px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f5f5f5;
        }

        a, button {
            padding: 8px 12px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .create {
            background-color: green;
            color: white;
            margin: 20px;
            display: inline-block;
        }

        .view {
            background-color: orange;
            color: white;
        }

        .edit {
            background-color: #00a9d6;
            color: white;
        }

        .delete {
            background-color: red;
            color: white;
        }
    </style>
</head>

<body>

<h1>All Categories</h1>

<a href="{{ route('categories.create') }}" class="create">
    Create New Category
</a>

<table>
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>Description</th>
        <th>action</th>
    </tr>

    @foreach($categories as $category)

    <tr>
        <td>{{ $category->id }}</td>

        <td>{{ $category->name }}</td>

        <td>{{ $category->description }}</td>

        <td>
            <a href="{{ route('categories.show', $category->id) }}" class="view">
                View
            </a>

            <a href="{{ route('categories.edit', $category->id) }}" class="edit">
                Edit
            </a>

            <form action="{{ route('categories.destroy', $category->id) }}"
                  method="POST"
                  style="display:inline">

                @csrf
                @method('DELETE')

                <button type="submit" class="delete">
                    Delete
                </button>

            </form>
        </td>
    </tr>

    @endforeach

</table>

</body>
</html>