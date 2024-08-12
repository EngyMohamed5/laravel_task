<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create Company</title>
</head>
<body>
<div class="container mt-5 p-5 d-flex flex-column align-items-center">
    <h2 class="text-center mb-4 ">Create Company</h2>
    <form class="col-7" action="{{route('companies.store')}}" method="post" >
        @csrf
        <div class="mb-3">
            <label for="companyName" class="form-label">Company Name</label>
            <input name="name" type="text" class="form-control" id="companyName" placeholder="Enter company name" required>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input name="country" type="text" class="form-control" id="country" placeholder="Enter Country" required>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input name="city" type="text" class="form-control" id="city" placeholder="Enter city" required>
        </div>
        <div class="mb-3">
            <label for="companySize" class="form-label">Company Size</label>
            <select class="form-select" id="companySize" name="company_size" required>
                <option selected disabled value="">Select company size</option>
                <option value="1-10">1-10 employees</option>
                <option value="11-50">11-50 employees</option>
                <option value="51-200">51-200 employees</option>
                <option value="201-500">201-500 employees</option>
                <option value="500+">500+ employees</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Company</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
