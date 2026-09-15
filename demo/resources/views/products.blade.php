<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <a href="{{ url('/products/create') }}" class="btn btn-success mb-4">Create New Product</a>

    <h1 class="text-center text-danger mb-4">All Products</h1>

    <table class="table table-bordered text-center align-middle">
        <thead class="table-light">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ url('/products/' . $product->id) }}" class="btn btn-warning btn-sm text-white">View</a>
                        <a href="{{ url('/products/' . $product->id . '/edit') }}" class="btn btn-info btn-sm text-white">Edit</a>
                        <form action="{{ url('/products/' . $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-muted">No products found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>