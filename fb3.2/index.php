<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Aplikasi CRUD</title>
</head>
<body style="color: white; background-color: #1d2630;">

    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong>CRUD Application</strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form action="" id="student-form" class="row justify-content-center mb-4" autocomplete="off">
                <div class="col-8 col-md-8 mb-3">
                    <label for="firstName">First Name</label>
                    <input class="form-control" id="firstName" type="text" placeholder="Input your first name">
                </div>
                <div class="col-8 col-md-8 mb-3">
                    <label for="lastName">Last Name</label>
                    <input class="form-control" id="lastName" type="text" placeholder="Input your last name">
                </div>
                <div class="col-8 col-md-8 mb-3">
                    <label for="rollNo">Number</label>
                    <input class="form-control" id="rollNo" type="text" placeholder="Input your Roll Number">
                </div>
                <div class="col-8 col-md-8">
                    <input class="btn btn-success add-btn" type="submit" value="Submit">
                </div>
                <div class="col-12 col-md-10 mt-5">
                    <table class="table table-stripped table-dark">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="student-list">
                        <tr>
                            <td>Dear</td>
                            <td>Programmer</td>
                            <td>25</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>