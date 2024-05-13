<x-nav/>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
    <style>
        .fa-solid.fa-building-columns {
            font-size: 70px;
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .fa-solid.fa-building-columns {
                font-size: 50px;
                margin-left: 0;
            }

            .college-name {
                margin-left: 0;
                text-align: center;
                font-weight: 900;
            }
        }

        .user-form {
            border-radius: 25px;
            border: 2px solid #73AD21;
            padding: 20px;
            width: 120%;
            margin: 50px auto; /* Center the form */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="background-color: greenyellow; font-weight: bold;">ATTENDANCE MANAGEMENT
                    SYSTEM LOGIN</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-3 text-center">
                <span><i class="fa-solid fa-building-columns"></i></span>
            </div>
            <div class="col-md-9">
                <h1 class="college-name" style="margin-top: 60px; font-weight: 900;">Smart College of Engineering &
                    Technology</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="user-form">
                    <h1 class="text-center">Welcome to Login Page</h1>
                    <form action="">
                        <label for="email">Enter Email</label>
                        <input type="email" name="e" class="form-control mb-3" required>
                        <label for="password">Enter Password</label>
                        <input type="password" name="p" class="form-control mb-3" required>
                        <div class="text-center">
                            <input type="submit" name="submit" value="Login" class="btn btn-warning">
                        </div>
                        <a href="register"><h4>New Register?</h4></a>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
