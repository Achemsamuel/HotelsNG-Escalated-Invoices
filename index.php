<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HotelsNG</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"
        type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

    <script>
        $(document).ready(function () {
            $('#datatable').dataTable();

            $("[data-toggle=tooltip]").tooltip();

        });
    </script>
    <style>
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
    </style>


</head>

<body>
    <!-- Navigation-->
    <div id="page-top" style="background-color: #173857; height: 50px;">
        <span class="navbar-brand" style="padding: 15px; color: #fff">
            <nav>
                <a style="color: #fff" href="tables.php">escalation.places</a>
            </nav>
        </span>
    </div>
    <div class="container">
        <div class="container-fluid">
            <h3 style="color: #173857;">Gryffindor Hotels
                <small style="color: #173857; font-size: 11px;">Escalated Invoice - Bookings</small>
                <p style="background-color: #173857; height: 1.5px; margin-top: 7px;"></p>
            </h3>
        </div>


        <div style="font-size: 12px; margin-top: 10px;">

            <div class="container-fluid">

                <div class="container-fluid" style="padding-bottom: 20px;">
                    <span style="color: #173857; font-size: 13px; padding: 10px;">Date of Current Invoice:
                        <em id="currentInvoiceDate">12,000000</em>
                    </span>
                    <span style="color: #173857; font-size: 13px; padding: 10px; margin-left: 10%;;">Date of Last Paid Invoice:
                        <span id="lastPaidDate">12,000000</span>
                    </span>
                    <span style="color: #173857; font-size: 13px; padding: 10px; margin-left: 10%;;">Number of times contacted:
                        <span id="lastPaidDate">12,000000</span>
                    </span>
                </div>

                <div class="col-md-12">
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="width: 2%">S/N</th>
                                <th>Name</th>
                                <th style="width: 10%">Date</th>
                                <th style="width: 10%">Booking Status</th>
                                <th style="width: 15%">Price</th>
                                <th style="width: 15%">Room Type</th>
                                <th style="width: 15%">Last Paid</th>
                                <th style="width: 10%">Times Contacted</th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td></td>
                                <td>Gabriel Ugwu</td>
                                <td>27/08/2018</td>
                                <td>Checked In</td>
                                <td>N230,000</td>
                                <td>Executive</td>
                                <td>N30,000</td>
                                <td>12</td>

                            </tr>

                            <tr>
                                <td></td>
                                <td>Tiger Nixon</td>
                                <td>System</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Nixon</td>
                                <td>System </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Cercei Lannister</td>
                                <td>System</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Jon Snow</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Rob</td>
                                <td>System</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Daenarys</td>
                                <td>System </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Arya</td>
                                <td>System </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Borathean</td>
                                <td>System </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Omega</td>
                                <td>System</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Stark</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Lannister</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Pegasus</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Pit-Bull</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Huskey</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Dalmatian</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Keanu</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Hushy</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Trojan</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Darlin</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Kemi</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Rogue</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Mark</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Frank</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Tobey</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Sammy</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="padding-bottom: 10px; margin-top: 5rem">
            <div class="btn-group-horizontal" style="text-align: center">
                <button style="font-size: 10px; margin-right: 5%;" class="btn btn-success btn-xs" type="button">Download </button>
                <button style="font-size: 10px; margin-right: 5%;" class="btn btn-success btn-xs" type="button">Download All</button>
                <button style="font-size: 10px; margin-right: 5%;" class="btn btn-success" type="button">Mark As Paid </button>
                <button style="font-size: 10px;" class="btn btn-success" type="button">Write Off </button>
            </div>
        </div>

    </div>
    </div>
    <div class="" style="background-color: #E5E5E5;">
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer" style="width: 100%; height: 55px; padding-top: -10px;">
            <div class="container">
                <div class="text-center">
                    <small>2018 finance@hotels.ng - All rights Reserved</small>
                </div>
            </div>
        </footer>
        <div>

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </div>








    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>

</body>

</html>
