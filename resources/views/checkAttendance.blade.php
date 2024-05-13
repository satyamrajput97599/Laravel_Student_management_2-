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

        /* Increase select box size */
        .form-select-lg {
            width: 570px; /* Adjust width as needed */
            height: 45px; /* Adjust height as needed */
            font-size: 120%; /* Adjust font size as needed */
        }
        .form-control{
            height: 45px;
        }

        #button5{
            text-align: center;
            width: 50%;
            background-color: rgb(23, 71, 245)
        }

        .card-header {
            display: flex;
            align-items: center;
            height: 50px;
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
                        <div class="card-header"  style="background-color:#cacaca;">
                            <b>Check Attendance</b>
                        </div>
                        <form action="">

                        <div class="card-body">

                            <div class="row mt-4">
                                <div class="col-md-2" style="margin-right: -3%;">
                                    <center><h4>Class Pr Subjects</h4></center>
                                </div>
                                <div class="col-md-3" style="margin-left%">
                                    <select class="form-control" name="s">
                                        @foreach ($data1 as $item)
                                        <option value="{{$item['subject']}}">{{$item['subject']}}</option>
                                        @endforeach

                                    </select>
                                                              
                                </div>
                                {{-- <div class="col-md-3" style="margin-left: 14%">
                                    <input type="date" class="form-control">
                                </div> --}}
                            </div><hr>

                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <!-- Table headers go here -->
                                    <tr>
                                        <th style="width: 10%;">#</th>
                                        <th style="width: 35%;">Student</th>
                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data2 as $row)
                                        
                                    
                                    <!-- Table data goes here -->
                                    <tr>
                                        <td>{{$row['id']}}</td>
                                        <td>{{$row['name']}}</td>
                                        <td>{{$row['subject']}}</td>
                                        <td><center>
                                            <input type="radio" name="{{$row['pid']}}" value="present">
                                            <label>Present</label>
                                            &nbsp;&nbsp;

                                            <input type="radio" name="{{$row['pid']}}" value="absent">
                                            <label>Absent</label>
                                            &nbsp;&nbsp;

                                            <input type="radio" name="{{$row['pid']}}" value="late">
                                            <label for="late">Late</label>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                            <center><input type="submit" id="button5" class="btn btn-primary" name="submit" value="Submit Attendance"/><br></center>

                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
