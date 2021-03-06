<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>School Attendance | Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Date picker -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>plugins/datepicker/datepicker3.css">
    <!-- Timepicker -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">

    <link rel="stylesheet" href="<?= config_item('assets') ?>plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>dist/css/skins/_all-skins.min.css">
    <link rel="icon" type="image/png" href="<?= base_url().getConfig()['favicon'] ?>" sizes="16x16">
    <link rel="icon" type="image/png" href="<?= base_url().getConfig()['favicon'] ?>" sizes="32x32">
    <!-- jQuery 2.2.3 -->
    <script src="<?= config_item('assets') ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Include Required Prerequisites -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" href="http://weareoutman.github.io/clockpicker/dist/bootstrap-clockpicker.min.css">

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <!-- DATA TABLES -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
    <!-- END DATA TABLES -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
    </script>  
</head>

<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?= base_url('app_dashboard') ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <img src="<?= base_url().getConfig()['file'] ?>" alt="" height="50" width="50" />
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url().$this->session->userdata('sys_administrator_image') ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url().$this->session->userdata('sys_administrator_image') ?>" class="img-circle" alt="User Image">
                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?= base_url('app_myaccount/editProfile') ?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= base_url('app_login').'/logout' ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url().$this->session->userdata('sys_administrator_image') ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($this->uri->segment(1)==" app_dashboard "){echo "active ";}?>"><a href="<?= base_url('app_dashboard/siswa') ?>"><i class="fa fa-circle-o"></i> Siswa</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_dashboard "){echo "active ";}?>"><a href="<?= base_url('app_dashboard/guru') ?>"><i class="fa fa-circle-o"></i> Guru</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_dashboard "){echo "active ";}?>"><a href="<?= base_url('app_dashboard/karyawan') ?>"><i class="fa fa-circle-o"></i> Karyawan</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i> <span>Master</span>
                            <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/guru') ?>"><i class="fa fa-circle-o"></i> Guru</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/jurusan') ?>"><i class="fa fa-circle-o"></i> Jurusan</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/kelas') ?>"><i class="fa fa-circle-o"></i> Kelas</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/siswa') ?>"><i class="fa fa-circle-o"></i> Siswa</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/karyawan') ?>"><i class="fa fa-circle-o"></i> Karyawan</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/hari_libur') ?>"><i class="fa fa-circle-o"></i> Hari Libur</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/kategori_izin') ?>"><i class="fa fa-circle-o"></i> Kategori Izin</a></li>
                            <!--li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/pengumuman') ?>"><i class="fa fa-circle-o"></i> Pengumuman</a></li-->
                        </ul>
                    </li>
                    <li class="header">SMS</li>
                    <li class="treeview">
                        <a href="<?= base_url('app_sms/inbox') ?>">
                            <i class="fa fa-gears"></i> <span>Inbox</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?= base_url('app_sms/outbox') ?>">
                            <i class="fa fa-gears"></i> <span>Outbox</span>
                        </a>
                    </li>
                    <!--li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i> <span>Terjadwal</span>
                        </a>
                    </li -->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i> <span>Phonebook</span>
                            <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($this->uri->segment(1)=="app_sms"){echo "active ";}?>"><a href="<?= base_url('app_sms/phonebook') ?>"><i class="fa fa-circle-o"></i> Phonebook</a></li>                        
                            <li class="<?php if($this->uri->segment(1)=="app_sms"){echo "active ";}?>"><a href="<?= base_url('app_sms/phonebook_group') ?>"><i class="fa fa-circle-o"></i> Group</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?= base_url('app_sms/sms_ortu') ?>">
                            <i class="fa fa-gears"></i> <span>Kirim SMS</span>
                        </a>
                    </li>
                    <!--li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i> <span>Kirim SMS</span>
                            <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($this->uri->segment(1)=="app_sms"){echo "active ";}?>"><a href="<?= base_url('app_sms/sms_ortu') ?>"><i class="fa fa-circle-o"></i> Ke Ortu Siswa</a></li>
                            li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/jurusan') ?>"><i class="fa fa-circle-o"></i> by Phonebook</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/siswa') ?>"><i class="fa fa-circle-o"></i> Group</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/karyawan') ?>"><i class="fa fa-circle-o"></i> Excel</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/hari_libur') ?>"><i class="fa fa-circle-o"></i> Kostum</a></li 
                        </ul>
                    </li -->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i> <span>Setting</span>
                            <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_sms/setting') ?>"><i class="fa fa-circle-o"></i> Umum</a></li>
                            <!--li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/jurusan') ?>"><i class="fa fa-circle-o"></i> SMS Auto</a></li-->
                        </ul>
                    </li>
                    <li class="header">PRESENSI</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i> <span>Presensi Siswa</span>
                            <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview-menu">
                                <a href="#"></a>
                                    <?php 
                                        if( count($datadbkelas) > 0 ){
                                            foreach($datadbkelas as $row){  
                                                echo '<li class="<?php if($this->uri->segment(1)==" app_siswa "){echo "active ";}?>">';
                                                echo '<a href="'.base_url('app_siswa/').'/kelas/'.$row['id_kelas'].'"><i class="fa fa-circle-o"></i> KELAS '.$row['Nama_Kelas'].' <span class="pull-right-container"></span></a>';
                                                echo '</li>';
                                        }}
                                    ?>
                        </ul>
                    </li>    
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i> <span>Presensi Guru</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i> <span>Presensi Karyawan</span>
                        </a>
                    </li>
                    <li class="header">LAPORAN</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i> <span>Laporan Siswa</span>
                            <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> <span>Presensi Siswa</span>
                                    <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                                    <ul class="treeview-menu">
                                        <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/guru') ?>"><i class="fa fa-circle-o"></i> Tanggal - Bulan</a>
                                        </li>
                                        <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/jurusan') ?>"><i class="fa fa-circle-o"></i> Bulan</a>
                                        </li>
                                        <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/kelas') ?>"><i class="fa fa-circle-o"></i> Semester</a>
                                        </li>
                                        <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/siswa') ?>"><i class="fa fa-circle-o"></i> Tahun Ajaran</a>
                                        </li>
                                    </ul>
                            </li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_laporan') ?>"><i class="fa fa-circle-o"></i> Presensi Kelas</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/kelas') ?>"><i class="fa fa-circle-o"></i> Terlambat Kelas</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/siswa') ?>"><i class="fa fa-circle-o"></i> Presensi hari ini</a></li>
                            <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/karyawan') ?>"><i class="fa fa-circle-o"></i> Tidak absen pulang</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i> <span>Laporan Guru</span>
                            <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                            <ul class="treeview-menu">
                                <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/guru') ?>"><i class="fa fa-circle-o"></i> Presensi Guru</a>
                                </li>
                                <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/jurusan') ?>"><i class="fa fa-circle-o"></i> Presensi Hari ini</a>
                                </li>
                                <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/kelas') ?>"><i class="fa fa-circle-o"></i> Guru terlambat</a>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i> <span>Laporan Karyawan</span>
                            <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                            <ul class="treeview-menu">
                                <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/guru') ?>"><i class="fa fa-circle-o"></i> Presensi Karyawan</a>
                                </li>
                                <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/jurusan') ?>"><i class="fa fa-circle-o"></i> Presensi Hari ini</a>
                                </li>
                                <li class="<?php if($this->uri->segment(1)==" app_master "){echo "active ";}?>"><a href="<?= base_url('app_master/kelas') ?>"><i class="fa fa-circle-o"></i> Karyawan terlambat</a>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li class="header">SETUP</li>
                    <li class="treeview <?php if($this->uri->segment(2)=="fp"){echo "active ";}?>">
                        <a href="<?= base_url('app_websetup/fp') ?>">
                            <i class="fa fa-gears"></i> <span>Pengaturan Fingerprint</span>
                        </a>
                    </li>
                    <li class="treeview <?php if($this->uri->segment(2)=="in_out"){echo "active ";}?>">
                        <a href="<?= base_url('app_websetup/in_out') ?>">
                            <i class="fa fa-gears"></i> <span>Pengaturan In / Out</span>
                        </a>
                    </li>  
                    <li class="treeview <?php if($this->uri->segment(2)=="check_for_update"){echo "active ";}?>">
                        <a href="<?= base_url('app_websetup/check_for_update') ?>">
                            <i class="fa fa-gears"></i> <span>Check for update</span>
                        </a>
                    </li>                                                                  
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <?= $contents; ?>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2017 <a href="#">Jempol Asik</a>.</strong> All rights reserved.
            </footer>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->
                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->
                    </div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Other sets of options are available
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <h3 class="control-sidebar-heading">Chat Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right">
                                </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->


    <!-- Bootstrap 3.3.6 -->
    <script src="<?= config_item('assets') ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= config_item('assets') ?>plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= config_item('assets') ?>dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= config_item('assets') ?>plugins/sparkline/jquery.sparkline.min.js"></script>

    <script src="<?= config_item('assets') ?>plugins/select2/select2.full.min.js"></script>

    <!-- DataTables -->
    <script src="<?= config_item('assets') ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= config_item('assets') ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- jvectormap -->
    <script src="<?= config_item('assets') ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= config_item('assets') ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Date Picker -->
    <script src="<?= config_item('assets') ?>plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Time Picker -->
    <script src="<?= config_item('assets') ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="http://weareoutman.github.io/clockpicker/dist/bootstrap-clockpicker.min.js"></script>    
    <!-- SlimScroll 1.3.0 -->
    <script src="<?= config_item('assets') ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?= config_item('assets') ?>plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= config_item('assets') ?>dist/js/app.min.js"></script>
    <!--script src="<?= config_item('assets') ?>dist/js/pages/dashboard2.js"></script-->
    <!-- AdminLTE for demo purposes -->
    <script src="<?= config_item('assets') ?>dist/js/demo.js"></script>

    <!-- EXPORT -->
<script type="text/javascript" src="<?= config_item('assets') ?>jqExport/tableExport.js"></script>
<script type="text/javascript" src="<?= config_item('assets') ?>jqExport/jquery.base64.js"></script>
<!-- END EXPORT -->
    <script>
    $('.clockpicker').clockpicker({
        donetext: "Done",
        default: "now",
        autoclose: true
    });

        //Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',        
      autoclose: true
    });
    $('#awal').datepicker({
      format: 'yyyy-mm-dd',        
      autoclose: true
    });
    $('#akhir').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    });
    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });   
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );
    </script>
    <!-- tinymce -->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

</body>

</html>
