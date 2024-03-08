<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Student Information</h2>
                <form action="{{route('student.update', $student->id )}}" method="POST">
                    @csrf

                    @method("PATCH")
                    <div class="mb-3">
                        <label for="stdName" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="stdName" value={{$student->stdName}} name="stdName" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="stdAge" class="form-label">Age:</label>
                        <input type="number" class="form-control" id="stdAge" value={{$student->stdAge}} name="stdAge" placeholder="Enter your age">
                    </div>
                    <div class="mb-3">
                        <label for="stdPhone" class="form-label">Phone:</label>
                        <input type="text" class="form-control" id="stdPhone" value={{$student->stdPhone}} name="stdPhone" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="stdAddress" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="stdAddress" value={{$student->stdAddress}} name="stdAddress" placeholder="Enter your address">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
