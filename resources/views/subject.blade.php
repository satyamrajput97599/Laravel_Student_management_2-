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
                            <div class="card-header mt-1" style="height: 40px;">
                                Subject Form
                            </div>
                            <div class="card-body">
                                <div id="msg"></div>
                                <div class="form-group">
                                    <label class="control-label">Subject</label>
                                    <input type="text" class="form-control" name="s"> <!-- Use name="c" -->
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <textarea name="d" id="" cols="30" rows="4" class="form-control"></textarea> <!-- Use name="dis" -->
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
                            <b>Subject List</b>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="5%">#</th>
                                        <th class="text-center">Subject</th>
                                        <th class="text-center" width="25%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                    <tr>
                                        <td>{{$row['id']}}</td>
                                        <td>{{$row['subject']}}</td>
                                        <td class="text-center">

                                            <a href="/delete?delid={{$row['id']}}" type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>Yes</a>

                                            <button class="btn btn-sm btn-outline-danger" data-title="Delete" type="button" data-toggle="modal" data-target="#delete">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
{{-- 
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <input class="form-control " type="text" placeholder="Tiger Nixon">
                                </div>
                                <div class="form-group">
                                    <input class="form-control " type="text" placeholder="System Architect">
                                </div>
                                <div class="form-group">
                                    <input class="form-control " type="text" placeholder="Edinburgh">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div> --}}

                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
                            </div>
                            <div class="modal-footer">

                                <a href="/delete?delid={{$row['id']}}" type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>Yes</a>

                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <!-- jQuery -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <!-- Bootstrap JS -->
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                <!-- DataTables -->
                <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script>

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
