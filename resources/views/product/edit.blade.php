<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Product</title>
</head>
<body>
<div class="container mt-5 p-5 d-flex flex-column align-items-center">
    <h2 class="text-center mb-4">Update Product</h2>
    <form class="col-7" action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input name="name" type="text" class="form-control" id="productName" placeholder="Enter product name" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="expirationDate" class="form-label">Expiration Date</label>
            <input name="expiration_date" type="date" class="form-control" id="expirationDate" value="{{ $product->expiration_date}}" required>
        </div>
        <div class="mb-3">
            <label for="details" class="form-label">Details</label>
            <textarea name="details" class="form-control" id="details" rows="3" placeholder="Enter product details" required>{{ $product->details }}</textarea>
        </div>
        <div class="mb-3">
            <label for="productCompany" class="form-label">Product Company</label>
            <select class="form-select" id="productCompany" name="company_id" required>
                <option selected disabled value="">Select company</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ $product->company_id === $company->id ? 'selected' : '' }}>
                        {{ $company->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
