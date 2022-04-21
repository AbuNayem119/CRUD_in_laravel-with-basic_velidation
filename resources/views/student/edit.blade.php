<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>{{ $all_data -> name }}</title>
</head>
<body>

<form action="{{ route('student.update', $all_data -> id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mt-3 w-50 mx-auto card">
        <div class="card-body">
            <img style="width: 120px; height:120px; border-radius:50%" src="{{ url('') }}/media/student/{{ $all_data -> image }}" alt="">
            <table class="mt-3 table table-bordered">
                <tr>
                    <th>Name :</th>
                    <td><input name="name" value="{{ $all_data -> name }}" type="text"></td>
                </tr>
                <tr>
                    <th>Email :</th>
                    <td><input name="email" value="{{ $all_data -> email }}" type="text"></td>
                </tr>
                <tr>
                    <th>Cell :</th>
                    <td><input name="cell" value="{{ $all_data -> cell }}" type="text"></td>
                </tr>
                <tr>
                    <th>Address :</th>
                    <td><input name="address" value="{{ $all_data -> address }}" type="text"></td>
                </tr>
                <tr>
                    <th>Image :</th>
                    <td><input type="file"></td>
                </tr>
            </table>
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
        <div class="card-footer">
            <a style="display: block;" class="btn btn-info" href="{{ route('student.index') }}">Back</a>
        </div>
    </div>
</form>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>