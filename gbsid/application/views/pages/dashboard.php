<?php
    if(empty($this->session->userdata('token')))
    {
      redirect('user/login');      
    } 
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GBSID-Dashboard</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()."assets/";?>dashboard/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()."assets/";?>dashboard/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()."assets/";?>dashboard/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url()."assets/";?>dashboard/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()."assets/";?>dashboard/build/css/custom.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-paw"></i> <span>GBSID-ph</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url()."assets/";?>dashboard/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('name');?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('home');?>">Home</a></li>
                      <li><a href="<?php echo site_url('user/login/logout');?>">Logout</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url('user/login/logout');?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url()."assets/";?>dashboard/production/images/img.jpg" alt=""><?php echo $this->session->userdata('name');?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo site_url('user/login/logout');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="<?php echo base_url()."assets/";?>dashboard/production/images/picture.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?php echo $this->session->userdata('name');?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-briefcase user-profile-icon"></i> User Type: <?php echo $this->session->userdata('usertype');?>
                        </li>
                      </ul>

                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />
                        <br/>
                        <?php 
                            $gbsum = 0;
                            for($i=0; $i < sizeof($x); $i++){
                            $gbsum += $x[$i]['rating'];
                            $index = $gbsum / sizeof($x);
                            
                            }?>
                      <!-- start skills -->
                      <h5>CONTRACT ID: <?php echo strtoupper($this->session->userdata('sc_id'));?></h5>
                      <h5>GBID: <?php echo strtoupper($this->session->userdata('id'));?></h5>
                      <h5>Global Business/Seller Index (GBSI):</h5> <h3><?php echo $index;?></h3>

                      <br>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Rating: 5 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $rs['r5'];?>"></div>
                          </div>
                        </li>
                        <li>
                          <p>Rating: 4 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $rs['r4'];?>"></div>
                          </div>
                        </li>
                        <li>
                          <p>Rating: 3 <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $rs['r3'];?>"></div>
                          </div>
                        </li>
                        <li>
                          <p>Rating: 2 <i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $rs['r2'];?>"></div>
                          </div>
                        </li>
                        <li>
                          <p>Rating: 1 <i class="fa fa-star"></i></p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $rs['r1'];?>"></div>
                          </div>
                        </li>
                        <p>Lifetime Feedback: <?php echo $rs['totalfeedback'];?> </p>
                      </ul>
                      <!-- end of skills -->

                    </div>

                    <br>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>User Past Reviews</h2>
                        </div>
                        <br>
                        <div class="col-md-6">
                        </div>
                      </div>
                      <!-- start of user-activity-datatable -->
                      <div class="x_content">
                        <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Store Name</th>
                                <th>Rating</th>
                                <th>Comment</th>
                                <th>Author</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $gbsum = 0;
                                for($i=0; $i < sizeof($x); $i++){

                            ?>
                                <tr>
                                <td><?php echo $x[$i]['t_date'];?></td>
                                <td><?php echo $x[$i]['t_time'];?></td>
                                <td><?php echo $x[$i]['store_name'];?></td>
                                <td><?php echo $x[$i]['rating'];?></td>
                                <td><?php echo $x[$i]['comment_content'];?></td>
                                <td><?php echo $x[$i]['comment_author'];?></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                      
                      <!-- end of user-activity-datatable -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <!-- aDD YOUR footer content here-->
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()."assets/";?>dashboard/build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>dashboard/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script>
        
        
    </script>
  </body>
</html>