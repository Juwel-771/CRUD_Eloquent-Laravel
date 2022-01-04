<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Form</title>
</head>
<body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name: </label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$student->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City: </label>
                        <input type="text" name="city" id="city" class="form-control" value="{{$student->city}}">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks: </label>
                        <input type="number" name="marks" id="marks" class="form-control" value="{{$student->marks}}">
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>