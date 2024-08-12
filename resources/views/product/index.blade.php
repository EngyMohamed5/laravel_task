<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Product Table</title>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-5 text-center">Product List</h2>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Expiration Date</th>
            <th>Details</th>
            <th>Company</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key => $product)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->expiration_date}}</td>
                <td>{{ $product->details }}</td>
                <td>{{ $product->company->name }}</td>
                <td class="d-flex">
                    <a href="{{ route('products.edit', ['product' => $product->id] ) }}" class="btn btn-warning btn-sm me-3">Update</a>
                    <form action="{{ route('products.destroy', ['product' => $product->id] ) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm me-3">Delete</button>
                    </form>
                    <a href="{{ route('products.show', ['product' => $product->id] ) }}" class="btn btn-success btn-sm">Show</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
