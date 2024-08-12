<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Company Details</title>
</head>
<body>

<header class="bg-primary text-white text-center py-3">
    <h1>Company Details</h1>
</header>

<div class="container mt-5 d-flex justify-content-center">

        <div>
            <p class=" mb-3"><strong>Name:</strong> {{$company->name}}</p>
            <p class=" mb-3"><strong>Country:</strong> {{$company->country}}</p>
            <p class=" mb-3"><strong>City:</strong> {{$company->city}}</p>
            <p class=" mb-3"><strong>Company Size:</strong> {{ $company->company_size}}</p>
            <div class="d-flex m-2 mt-5">
                <a href="{{ route('companies.edit', ['company' => $company->id] ) }}"  class="btn btn-warning btn-sm me-3">Update</a>
                <form action="{{route('companies.destroy',['company' => $company->id] )}}" method="post">
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
