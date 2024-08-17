
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section class="h-100 bg-dark">
        <div class="container col-9 py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="card card-registration my-4">
                    <div class="row justify-content-between g-0">
                
                            <table class="table table-hover .table-striped  col-3">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">phone</th>
                                        <th scope="col">Image</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($students as $student)
                                    <tr>
                                        <td>{{  $student->name }}</td>
                                        <td>{{  $student->phone }}</td>
                                        <td class="w-25" ><img src="{{ asset('public_folder/'. $student->image ) }}" alt="" class="w-100"></td>                                        
                                    </tr>
                                   @endforeach
                                    
                                    


                                </tbody>
                            </table>

        
                    
                    </div>
                </div>
            </div>
    </section>


</body>

</html>