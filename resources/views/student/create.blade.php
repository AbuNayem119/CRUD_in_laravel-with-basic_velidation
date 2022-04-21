<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>

    <div class="mt-2 w-50 mx-auto card">
        <div class="card-body">
            <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2>Add Student</h2>

                @if (Session::has('success'))
                    <p>{{ Session::get('success') }}</p>
                @endif

                @if ($errors -> any())
                    <p style="color:rgb(255, 0, 0);" >{{ $errors-> first() }}</p>
                @endif

                <hr>
                <div class="form-group">
                    <label for="">Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Cell</label>
                    <input name="cell" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input name="address" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input name="image" type="file" class="form-control">
                </div>
                <input type="submit" class="mt-2 btn btn-success">
            </form>
        </div>
        <div class="card-footer">
            <a style="display: block;" class="btn btn-info" href="{{ route('student.index') }}">All Student</a>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>