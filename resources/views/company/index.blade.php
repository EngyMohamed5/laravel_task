<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Company Table</title>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-5 text-center">Company List</h2>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Country</th>
            <th>City</th>
            <th>Company Size</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $key => $company)
            <tr>
                <td> {{$key+1}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->country}}</td>
                <td>{{$company->city}}</td>
                <td>{{$company->company_size}}</td>
                <td class="d-flex">
                    <a href="{{ route('companies.edit', ['company' => $company->id] ) }}"  class="btn btn-warning btn-sm me-3">Update</a>
                    <form action="{{route('companies.destroy',['company' => $company->id] )}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm me-3">Delete</button>
                    </form>
                    <a href="{{ route('companies.show', ['company' => $company->id] ) }}"  class="btn btn-success btn-sm">Show</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    <div class="text-center mt-4">
        <a href="{{ route('companies.create') }}" class="btn btn-primary">Add New Company</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
