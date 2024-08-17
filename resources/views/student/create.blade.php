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
    <h2 class="text-center mb-4 ">add student</h2>
    <form class="col-7" action="{{ route('students.store') }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label class="form-label">student Name</label>
            <input name="name" type="text" class="form-control" placeholder="Enter student name" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input name="phone" type="text" class="form-control" placeholder="Enter student phone" required>
        </div>

       

        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input name="image" type="file" class="form-control" id="image" placeholder="Enter Image" required>
        </div>

        <button type="submit" class="btn btn-primary">Add student</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
