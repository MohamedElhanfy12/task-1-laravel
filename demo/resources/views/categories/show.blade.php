<!DOCTYPE html>
<html>
<head>
    <title>Category Details</title>

    <style>
        body {
            font-family: Arial;
        }

        h1 {
            text-align: center;
            color: brown;
        }

        table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
        }

        a, button {
            padding: 8px 15px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .back {
            background-color: #00a9d6;
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

<table>

<tr>
    <th>Id</th>
    <th>name</th>
    <th>Description</th>
    <th>action</th>
</tr>

<tr>

    <td>{{ $category->id }}</td>

    <td>{{ $category->name }}</td>

    <td>{{ $category->description }}</td>

    <td>

        <a href="{{ route('categories.index') }}" class="back">
            Back
        </a>

        <a href="{{ route('categories.edit', $category->id) }}" class="edit">
            Edit
        </a>

        <form action="{{ route('categories.destroy', $category->id) }}"
              method="POST"
              style="display:inline">

            @csrf
            @method('DELETE')

            <button class="delete">
                Delete
            </button>

        </form>

    </td>

</tr>

</table>

<h2>All Category Products</h2>

<table>

<tr>
    <th>Id</th>
    <th>Product name</th>
    <th>Product Description</th>
</tr>

@foreach($category->products as $product)

<tr>

    <td>{{ $product->id }}</td>

    <td>{{ $product->name }}</td>

    <td>{{ $product->description }}</td>

</tr>

@endforeach

</table>

</body>
</html>