
<!DOCTYPE html>
<html lang="en">

<head>
    <title>EXAM TERMINAL CLASSTEACHER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
   <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php">
                            <!img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <span>Profile</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="editpro.php">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="profile.php">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="logout.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            
                            <div class="pcoded-navigation-label">Dashboard</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">DASHBOARD</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">USERS</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded">
                                    <a href="students.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Students</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">QUESTION BANK</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Questions</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/addquestions.php?sem=<?php echo 1; ?>">Semester 1</a>
                                </li>
                                <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/addquestions.php?sem=<?php echo 2; ?>">Semester 2</a>
                                </li>
                                <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/addquestions.php?sem=<?php echo 3; ?>">Semester 3</a>
                                </li>
                                <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/addquestions.php?sem=<?php echo 4; ?>">Semester 4</a>
                                </li>
                                    </ul>
                                </li>
                            </ul>

                    <div class="pcoded-navigation-label">QUESTIONPAPER</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Create QP</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/geek.php?sem=<?php echo 1; ?>">Semester 1</a>
                                </li>
                                <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/geek.php?sem=<?php echo 2; ?>">Semester 2</a>
                                </li>
                                <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/geek.php?sem=<?php echo 3; ?>">Semester 3</a>
                                </li>
                                <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/createpaper.php?sem=<?php echo 4; ?>">Semester 4</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                   

                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded">
                                    <a href="questionpaper.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">View Question Paper</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                    <div class="pcoded-navigation-label">ANSWERSHEET</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">AnswerSheet</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/addanswersheet.php?sem=<?php echo 1; ?>">Semester 1</a>
                                </li>
                                <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/addanswersheet.php?sem=<?php echo 2; ?>">Semester 2</a>
                                </li>
                                <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/addanswersheet.php?sem=<?php echo 3; ?>">Semester 3</a>
                                </li>
                                <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/addanswersheet.php?sem=<?php echo 4; ?>">Semester 4</a>
                                </li>
                            </ul>
                        </li>
                    </ul>


                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">TimeTables</div>
                            <ul class="pcoded-item pcoded-left-item">
                               
                   
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">VIEW TIMETABLE</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/viewtimetable.php?sem=<?php echo 1; ?>">Semester 1</a>
                                </li>
                                <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/viewtimetable.php?sem=<?php echo 2; ?>">Semester 2</a>
                                </li>
                                <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/viewtimetable.php?sem=<?php echo 3; ?>">Semester 3</a>
                                </li>
                                <li class=" ">
                                    <a href="http://localhost/examterminal/classteacher/viewtimetable.php?sem=<?php echo 4; ?>">Semester 4</a>
                                </li>
                            </ul>
                        </li>
                    </ul>



                                </li>
                            </ul>
                            
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Welcome to Exam TERMINAL</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->