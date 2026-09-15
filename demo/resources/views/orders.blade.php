<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <a href="{{ url('/orders/create') }}" class="btn btn-success mb-4">Create New Order</a>

    <h1 class="text-center text-danger mb-4">All Orders</h1>

    <table class="table table-bordered text-center align-middle">
        <thead class="table-light">
            <tr>
                <th>Id</th>
                <th>User ID</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user_id ?? 'N/A' }}</td>
                    <td>{{ $order->total_price ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ url('/orders/' . $order->id) }}" class="btn btn-warning btn-sm text-white">View</a>
                        <a href="{{ url('/orders/' . $order->id . '/edit') }}" class="btn btn-info btn-sm text-white">Edit</a>
                        <form action="{{ url('/orders/' . $order->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-muted">No orders found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>