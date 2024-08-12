<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Product Details</title>
</head>
<body>

<header class="bg-primary text-white text-center py-3">
    <h1>Product Details</h1>
</header>

<div class="container mt-5 d-flex justify-content-center">
    <div>
        <p class="mb-3"><strong>Name:</strong> {{$product->name}}</p>
        <p class="mb-3"><strong>Expiration Date:</strong> {{$product->expiration_date}}</p>
        <p class="mb-3"><strong>Details:</strong> {{$product->details}}</p>
        <p class="mb-3"><strong>Company:</strong> {{$product->company->name}}</p>
        <div class="d-flex m-2 mt-5">
            <a href="{{ route('products.edit', ['product' => $product->id] ) }}" class="btn btn-warning btn-sm me-3">Update</a>
            <form action="{{route('products.destroy',['product' => $product->id] )}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm me-3">Delete</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
