<?php
session_start(); // Start the session

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
        }
        .col-6 {
            flex: 0 0 50%;
            max-width: 50%;
            box-sizing: border-box;
            padding: 15px;
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
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Home</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./home.html">Home</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">AgriLink Section</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Actions</span></a>
                        <ul aria-expanded="false">
                            <li><a href="products.php">Products</a></li>
                            <li><a href="farmers.php">Farmers</a></li>
                            <li><a href="suppliers.php">Suppliers</a></li>
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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Reports</a></li>
                        </ol>
                    </div>
                </div>

              
                 
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
                                <h4 class="card-title">Business Intelligence Dashboard</h4>
                            </div>
                            <div class="card-body">
                            <div class="container">
                                <div class="col-6">
                                    <canvas id="usersPieChart"></canvas>
                                </div>
                                <div class="col-6">
                                    <canvas id="companiesPieChart"></canvas>
                                </div>
                            </div>
                            <div class="container">
                                <div class="col-12">
                                    <canvas id="productBarChart"></canvas>
                                </div>
                            </div>
                            <script>
                                    // Data for pie charts
                                    const usersData = {
                                        labels: ['Users'],
                                        datasets: [{
                                            data: [2, 1], // 2 users, and the rest to make the pie chart look complete
                                            backgroundColor: ['#FF6384', '#CCCCCC'],
                                        }]
                                    };

                                    const companiesData = {
                                        labels: ['Mike Meats', 'Zambeef', 'LuBona Meats'],
                                        datasets: [{
                                            data: [1, 1, 1], // Each company is represented equally
                                            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                                        }]
                                    };

                                    // Data for bar chart
                                    const productData = {
                                        labels: ['Mike Meats', 'Zambeef', 'LuBona Meats'],
                                        datasets: [{
                                            label: 'Product Distribution',
                                            data: [1, 1, 1], // Each company has 1 product
                                            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                                        }]
                                    };

                                    // Config for users pie chart
                                    const usersPieConfig = {
                                        type: 'pie',
                                        data: usersData,
                                        options: {
                                            responsive: true,
                                            plugins: {
                                                legend: {
                                                    display: true,
                                                    position: 'top',
                                                },
                                            },
                                        },
                                    };

                                    // Config for companies pie chart
                                    const companiesPieConfig = {
                                        type: 'pie',
                                        data: companiesData,
                                        options: {
                                            responsive: true,
                                            plugins: {
                                                legend: {
                                                    display: true,
                                                    position: 'top',
                                                },
                                            },
                                        },
                                    };

                                    // Config for bar chart
                                    const productBarConfig = {
                                        type: 'bar',
                                        data: productData,
                                        options: {
                                            responsive: true,
                                            plugins: {
                                                legend: {
                                                    display: true,
                                                    position: 'top',
                                                },
                                            },
                                            scales: {
                                                x: {
                                                    title: {
                                                        display: true,
                                                        text: 'Companies',
                                                    },
                                                },
                                                y: {
                                                    title: {
                                                        display: true,
                                                        text: 'Product Distribution',
                                                    },
                                                },
                                            },
                                        },
                                    };

                                    // Render the charts
                                    window.onload = function() {
                                        const usersPieCtx = document.getElementById('usersPieChart').getContext('2d');
                                        const companiesPieCtx = document.getElementById('companiesPieChart').getContext('2d');
                                        const productBarCtx = document.getElementById('productBarChart').getContext('2d');

                                        new Chart(usersPieCtx, usersPieConfig);
                                        new Chart(companiesPieCtx, companiesPieConfig);
                                        new Chart(productBarCtx, productBarConfig);
                                    };
                                </script>
                                
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
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
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