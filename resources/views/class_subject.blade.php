<x-nav/>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
    <style>
        body {
            background-color: rgb(167, 162, 162);
        }

        .pagination>li {
            display: inline;
            padding: 0px !important;
            margin: 0px !important;
            border: none !important;
        }

        .modal-backdrop {
            z-index: -1 !important;
        }

        /*
        Fix to show in full screen demo
        */
        iframe {
            height: 700px !important;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px !important;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .btn-primary {
            color: #fff !important;
            background: #428bca !important;
            border-color: #357ebd !important;
            box-shadow: none !important;
        }

        .btn-danger {
            color: #fff !important;
            background: #d9534f !important;
            border-color: #d9534f !important;
            box-shadow: none !important;
        }

        .btn-outline-primary {
            color: #428bca;
            background-color: transparent;
            border-color: #428bca;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #428bca;
            border-color: #428bca;
        }

        .btn-outline-danger {
            color: #d9534f;
            background-color: transparent;
            border-color: #d9534f;
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #d9534f;
            border-color: #d9534f;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
        }

        .card-header .btn {
            margin: 0;
        }

        /* Adjust column sizes */
        #datatable th:first-child,
        #datatable td:first-child {
            width: 5%; /* Adjust as needed for the # column */
        }

        /* Distribute remaining width among other columns */
        #datatable th:not(:first-child),
        #datatable td:not(:first-child) {
            width: calc((100% - 5%) / 4); /* 5% for # column, divide remaining by number of other columns */
        }

        /* Center content of action column */
        #datatable td.text-center {
            text-align: center;
        }

        .btn-outline-primary {
            width: 70px;
        }

        .btn-outline-danger {
            width: 70px;
        }

        /* Increase select box size */
        .form-select-lg {
            width: 570px; /* Adjust width as needed */
            height: 40px; /* Adjust height as needed */
            font-size: 120%; /* Adjust font size as needed */
        }

        .dynamic-form:hover {
            border-color: #007bff; /* Change border color on hover */
        }

        #cancel-btn {
            border-color: #6c757d; /* Default button border color */
        }

        #cancel-btn:hover {
            border-color: #6c757d; /* Keep default button border color on hover */
        }

        .modal-dialog {
            max-width: 800px; /* Set the maximum width of the modal dialog */
        }

        .modal-content {
            width: 100%; /* Ensure modal content occupies full width */
            border-radius: 10px; /* Apply border radius */
        }

        /* Additional styles for form fields */
        .form-control {
            border-radius: 4px; /* Apply border radius to form controls */
        }
    </style>
</head>

<body>
    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row" id="manage-content">
                <!-- Table Panel -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <b>List of Subject</b>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                New Entry
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="exampleModalLabel">New Faculty</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                Class
                                                 <select class="form-control" name="cla">
                                                <option selected class="op">Please Select here...</option>
                                                <option value="Course 5-1 A">Course 5-1 A</option>
                                                <option value="Course 5-2 B">Course 5-2 B</option>
                                                <option value="Course 5-3 C">Course 5-3 C</option>
                                                <option value="Course 5-4 D">Course 5-4 D</option>
                                            </select> 

                                                Faculty
                                                <select class="form-select form-select-lg mb-3" name="fac" aria-label=".form-select-lg example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="Satyam">Satyam</option>
                                                    <option value="Rohit">Rohit</option>
                                                    <option value="Shivam">Shivam</option>
                                                </select>

                                                Subject
                                                <select class="form-select form-select-lg mb-3" name="sub" aria-label=".form-select-lg example">
                                                    <option selected>Open this select menu</option>
                                                    <option>Subject 1</option>
                                                    <option>Subject 2</option>
                                                    <option>Subject 3</option>
                                                </select>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="submit" value="submit" class="btn btn-danger">Save</button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Faculty</th>
                                        <th style="text-align: center">Action</th>

                                    </tr>
                                </thead>


                                <tbody>

                                    @foreach ($data as $row)


                                    <tr>
                                        <td class="">
                                            {{$row['id']}}
                                        </td>
                                        <td class="">
                                            {{$row['class']}}
                                        </td>
                                        <td class="">
                                            {{$row['subject']}}
                                        </td>
                                        <td class="">
                                            {{$row['faculty']}}
                                        </td>

                                        <td class="text-center">

                                            <a href="/edit_class_subject?editid={{$row['id']}}" class="btn btn-sm btn-outline-primary edit_course" type="button">Edit</a>

                                            <a href="delete_class_subject?delid={{$row['id']}}" class="btn btn-sm btn-outline-danger" type="button">Delete</a>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>


                <!-- jQuery -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <!-- Bootstrap JS -->
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                <!-- DataTables -->
                <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script>


                <!-- Bootstrap JS Bundle -->
                <script>
                    $(document).ready(function () {
                        // Initialize DataTable
                        $('#datatable').dataTable();

                        // Initialize tooltips
                        $("[data-toggle=tooltip]").tooltip();

                        // Handle edit button click
                        $('.btn-edit').click(function () {
                            $('#edit').modal('show');
                        });

                        // Handle delete button click
                        $('.btn-delete').click(function () {
                            $('#delete').modal('show');
                        });
                    });

                </script>



</body>

</html>
