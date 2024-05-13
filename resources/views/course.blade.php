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

    <!------ Include the above in your HEAD tag ---------->

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
            width: 70px;
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
            width: 70px;
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
            width: 5%;
            /* Adjust as needed for the # column */
        }

        /* Distribute remaining width among other columns */
        #datatable th:not(:first-child),
        #datatable td:not(:first-child) {
            width: calc((100% - 5%) / 4);
            /* 5% for # column, divide remaining by number of other columns */
        }

        /* Center content of action column */
        #datatable td.text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row" id="manage-content">
                <!-- FORM Panel -->
                <div class="col-md-12 col-lg-4">
                    <form action="" method="get">

                        <div class="" style="background-color:#dee4e9">
                            <div class="card-header mt-2" style="height: 40px;">
                                Course Form
                            </div>
                            <div class="card-body">
                                <div id="msg"></div>
                                <div class="form-group">
                                    <label class="control-label">Course</label>
                                    <input type="text" class="form-control" name="c">
                                    <!-- Use name="c" -->
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <textarea name="d" id="" cols="30" rows="4" class="form-control"></textarea>
                                    <!-- Use name="dis" -->
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" name="submit" class="btn btn-sm btn-primary col-sm-3 offset-md-3"></input>
                                        <input class="btn btn-sm btn-default col-sm-3" type="reset"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <!-- End FORM Panel -->


                <!-- Table Panel -->
                <div class="col-md-12 col-lg-8">
                    <div class="card">
                        <div class="card-header mt-2" style="height: 40px;">
                            <b>Course List</b>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Course</th>
                                        <th style="text-align: center">Action</th>

                                    </tr>
                                </thead>


                                <tbody>

                                    @foreach($data as $row)

                                    <tr>
                                        <td>{{$row['id']}}</td>
                                        <td>{{$row['course']}}</td>

                                        <td class="text-center">

                                            <a href="/editcourse?editid={{$row['id']}}" class="btn btn-sm btn-outline-primary edit_course" type="button">Edit</a>

                                            <a href="/deletecourse?delid={{$row['id']}}" type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Yes</a>
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
                    $(document).ready(function() {
                        // Initialize DataTable
                        $('#datatable').dataTable();

                        // Initialize tooltips
                        $("[data-toggle=tooltip]").tooltip();

                        // Handle edit button click
                        $('.btn-edit').click(function() {
                            $('#edit').modal('show');
                        });

                        // Handle delete button click
                        $('.btn-delete').click(function() {
                            $('#delete').modal('show');
                        });
                    });
                </script>
</body>

</html>
