<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Basic Form </title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/admin/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/admin/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/admin/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/admin/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/css/lib/helper.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">
</head>

<body>


        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <ul>
                        <?=menu($token)?>
                    </ul>    
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/1.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/admin/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Upgrade Now</span>
                                        <p class="trial-day">30 Days Trail</p>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Inbox</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Form-Basic</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Basic Elements</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form method="post" action="index.php">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Full Name</label>
                                                        <input type="text" name="full_name"  required="required" class="form-control" value="<?=$r['full_name'] ?>">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select class="form-control" name="gender" required="required">
                                                            <option><?=$r["gender"]?></option>
                                                            <option>Male</option>
															<option>Female</option>														
                                                        </select>
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label>Region</label>
                                                        <select class="form-control" name="region" required="required">
                                                            <option value="<?=$r["region_id"]?>"><?=$r["region_title"]?></option>
                                                            <?=cmbo_region($regions)?>
                                                        </select>
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group">
                                                        <label>Phone number 1</label>
                                                        <input class="form-control" name="mobile1" type="text" required="required" value="<?= $r["mobile1"]?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Phone number 2 </label>
                                                        <input class="form-control" type="text" name="mobile2"  value="<?= $r["mobile2"]?>">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label> Level of education  </label>
                                                        <input class="form-control" type="text" name="level_education" required="required" value="<?=$r["level_education"]?>">
                                                    </div>
                                                   
                                                    
                                                    <div class="form-group">
                                                        <label> What do you want the ndc to do for you, being job or appointment. Name the it, be specific with your answer </label>
                                                        <textarea class="form-control" rows="3" name="job_appointment" placeholder="Text input"><?= $r["job_appointment"]?></textarea>
                                                    </div>
                                                    
                                                   
                                                    <div class="form-group">
                                                        <label> Do you support BMB? </label>
                                                        <select class="form-control" name="support_bmb" required="required" >
                                                            <option><?=$r["support_bmb"]?></option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>                                                       
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Current occupation </label>
                                                        <input class="form-control" type="text" name="occupation" value="<?=$r["occupation"]?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">

                                                    <div class="form-group">
                                                        <label>Bmb membership number </label>
                                                        <input  class="form-control" name="bmb_number"  value="<?= $r["bmb_number"]?>" type="text" placeholder="BMB number">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <input class="form-control" type="date" name="dob" required="required" value="<?=$r["dob"]?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Branch  </label>
                                                        <input class="form-control" type="text" name="branch" required="required" value="<?=$r["branch"]?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Constituency </label>
                                                        <input class="form-control" type="text" name="constituency" required="required" value="<?=$r["constituency"]?>">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label> Indicate your old voter id </label>
                                                        <input class="form-control" type="text" name="old_voter_id" value="<?=$r["old_voter_id"]?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Indicate your new voter id no. </label>
                                                        <input class="form-control" type="text" name="new_voter_id" value="<?=$r["new_voter_id"]?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Do you have ndc membership card? </label>
                                                        <select class="form-control" name="memberrship_card">
                                                            <option><?=$r["memberrship_card"]?></option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>                                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Indicate your number </label>
                                                        <input class="form-control" type="text" name="card_number" value="<?=$r["card_number"]?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label> In your own understand, what strategies should the ndc implement to win 2024 election? </label>
                                                        <textarea class="form-control" rows="3" name="strategies" placeholder="Text input"><?=$r["strategies"]?></textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="_submit" value="<?=$btn?>">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="assets/admin/js/lib/jquery.min.js"></script>
    <script src="assets/admin/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/admin/js/lib/menubar/sidebar.js"></script>
    <script src="assets/admin/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="assets/admin/js/lib/bootstrap.min.js"></script><script src="assets/admin/js/scripts.js"></script>
    <!-- scripit init-->

</body>

</html>