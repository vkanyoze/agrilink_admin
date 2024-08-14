<?php
session_start(); // Start the session

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Agrilink - Payments </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="./vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <style role="stylesheet">
        .quixnav{
            background-color: rgb(3, 95, 57);
        }
        .brand-logo{
            background-color: rgb(3, 95, 57)

        }

    </style>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <h2><font color="white">AGRILINK</font></h2>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
            <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li><a  href="home.php" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Home</span></a>
                        <ul aria-expanded="false">
                            <li><a href="home.php">Home</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">AgriLink Section</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Actions</span></a>
                        <ul aria-expanded="false">
                            <li><a href="farmers.php">Farmers</a></li>
                            <li><a href="products.php">Products</a></li>
                            <li><a href="companies.php">Companies</a></li>
                            <li><a href="inputs.php">Inputs</a></li>
                            <li><a href="payments.php">Payments</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-label">Settings</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-world-2"></i><span class="nav-text">Manage</span></a>
                        <ul aria-expanded="false">
                            <li><a href="reports.php">Reports</a></li>
                            <li><a href="logout.php">Logout</a></li>

                        </ul>
                    </li>

                    
                 

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Payments</a></li>
                        </ol>
                    </div>
                </div>

               
                 <!-- Large modal -->
                 <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title">Modal title</h5>
                                 <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">Modal body text goes here.</div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary">Save changes</button>
                             </div>
                         </div>
                     </div>
                 </div>
              
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Payments</h4>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                            <table class="table student-data-table m-t-20">
                                        <thead>
                                        <tr>
                                            <th style="width: 120px;">Farm ID</th>
                                            <th style="width: 200px;">Farm Name</th>
                                            <th style="width: 300px;">Address</th>
                                            <th style="width: 400px;">Description</th>
                                            <th style="width: 150px;">Logo</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <?php

                                        function fetchCompanies($access_token) {
                                            // Make GET request to the endpoint to fetch companies using access token for authentication
                                            $endpoint = 'http://64.227.36.36:8186/agrilinkapi/payment/show_transactions';
                                            $options = array(
                                                'http' => array(
                                                    'method' => 'GET',
                                                    'header' => "Authorization: Bearer $access_token" // Include access token in the request header
                                                )
                                            );
                                            $context = stream_context_create($options);
                                            $result = file_get_contents($endpoint, false, $context);

                                            

                                            // Parse the response and extract required information
                                            if ($result !== false) {
                                                $decoded_result = json_decode($result, true);
                                                if(isset($decoded_result['farms'])) {
                                                    return $decoded_result['farms']; // Return array of companies
                                                } else {
                                                    echo "<script>console.error('Error: Companies not found in response');</script>";
                                                }
                                            } else {
                                                echo "<script>console.error('Error: Unable to fetch data');</script>";
                                            }
                                        }

                                        // Check if access token is available in session
                                        if (!isset($_SESSION['access_token'])) {
                                            echo "<script>console.error('Error: Access token not available');</script>";
                                        } else {
                                            // Retrieve access token from session
                                            $access_token = $_SESSION['access_token'];

                                            // Fetch companies using access token
                                            $farms = fetchCompanies($access_token);

                                            //var_dump($farms);

                                            // Append companies to the table
                                            foreach ($farms[0] as $farm) {
                                                echo "<tr>";
                                                echo "<td>" . $farm['farm_id'] . "</td>";
                                                echo "<td>" . $farm['farm_name'] . "</td>";
                                                echo "<td>" . $farm['farm_address'] . "</td>";
                                                echo "<td>" . $farm['description'] . "</td>";
                                                echo "<td><img src='" . $farm['farm_logo'] . "' alt='Farm Logo' width='85%'></td>";
                                                echo "</tr>";
                                            }
                                        }
                                        ?>

                                                
                                                  
                                        </tbody>
                                    </table>
                  </div>

                            </div>
                        </div>
                    </div>
                   
                </div>
               
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Agrilink&amp; Developed by <a href="#" target="_blank">VDK</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

    <script src="./vendor/chartist/js/chartist.min.js"></script>

    <script src="./vendor/moment/moment.min.js"></script>
    <script src="./vendor/pg-calendar/js/pignose.calendar.min.js"></script>
      <!-- Datatable -->
      <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
      <script src="./js/plugins-init/datatables.init.js"></script>


    <script src="./js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

</body>

</html>