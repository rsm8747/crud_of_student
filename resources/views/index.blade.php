<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Student List</h2>
        <div>
            <a class="btn btn-primary btn-lg" href="{{ route('student.create') }}">Add Student</a>
        </a></div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($std as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->stdName }}</td>
                        <td>{{ $student->stdAge }}</td>
                        <td>{{ $student->stdPhone }}</td>
                        <td>{{ $student->stdAddress }}</td>
                        <td>
                            <a class="btn btn-small btn-success" href="{{ route('student.show', $student->id) }}">Show
                            </a>
                            <a a class="btn btn-small btn-info" href="{{ route('student.edit', $student->id) }}">Edit
                            </a>
                            <form action="{{ route('student.destroy', $student->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-small btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $std->links() }}
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
