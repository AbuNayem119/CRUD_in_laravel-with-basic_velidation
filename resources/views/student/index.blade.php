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

    <div class="mt-2 w-75 mx-auto card">
        <div class="card-body">
            <h3>All Students</h3>

            @if (Session::has('success'))
                <p>{{ Session::get('success') }}</p>
            @endif

            <hr>
            <table class="table table-striped table-hover table-bordered">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Cell</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($all_data as $data)

                    <tr>
                        <th>01</th>
                        <th>{{ $data -> name }}</th>
                        <th>{{ $data -> email }}</th>
                        <th>{{ $data -> cell }}</th>
                        <th>{{ $data -> address }}</th>
                        <th><img style="width: 50px; height:50px" src="{{ url('') }}/media/student/{{ $data -> image }}" alt=""></th>
                        <th>
                            <a class="btn btn-sm btn-primary" href="{{ route('student.show', $data -> id) }}">Show</a>
                            <a class="btn btn-sm btn-secondary" href="{{ route('student.edit', $data -> id) }}">Edit</a>
                            <a class="btn btn-sm btn-danger" href="{{ route('student.destroy', $data -> id) }}">Delete</a>
                        </th>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a style="display: block;" class="btn btn-info" href="{{ route('student.create') }}">Add Student</a>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>