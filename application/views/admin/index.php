<?php 
$this->load->model('m_admin');
$username = $this->session->userdata('username');
$profile = $this->m_admin->profile($username);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Admin Page</title>
        <link href="<?php echo base_url() ?>assets/img/favicon.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <link href="<?php echo base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url() ?>assets/css/style_index.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url() ?>assets/css/lines.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href='<?php echo base_url() ?>assets/css/google-font.css' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url() ?>assets/css/custom_index.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/lib/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom_index.js"></script>
        <style>
            .default-style {
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="javacript:;"><?php echo $header;?></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="javacript:;" class="dropdown-toggle avatar" data-toggle="dropdown" style="color: white;"><?php echo $profile->long_name;?>&nbsp;&nbsp;<img src="<?php echo base_url() . 'assets/img/' . $profile->profile_pict ?>"></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-header text-center">
                                <strong>Settings</strong>
                            </li>
                            <li class="m_2"><a href="<?php echo base_url()?>index.php/admin/profile"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
                            <li class="m_2"><a href="<?php echo base_url()?>index.php/auth/logout"><i class="fa fa-lock"></i>&nbsp;Logout</a></li>	
                        </ul>
                    </li>
                </ul>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="<?php echo base_url()?>index.php/admin/index"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="javacript:;"><i class="fa fa-newspaper-o nav_icon"></i>Artikel<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/stat_article">Statis</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/dyn_article">Dinamis</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javacript:;"><i class="fa fa-home nav_icon"></i>Property<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/stat_article">Rumah Bersubdisi (FLPP)</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/stat_article">Rumah Komersial</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/dyn_article">Desain Arsitektur</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/dyn_article">Property Learning Technology</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javacript:;"><i class="fa fa-money nav_icon"></i>Smart In Pays<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/sip_pesawat">Pesawat</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/sip_hotel">Hotel</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/sip_kereta">Kereta</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/sip_pulsa">Pulsa</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/sip_ppob">PPOB</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javacript:;"><i class="fa fa-shopping-cart nav_icon"></i>Mini V-Mart<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/stat_article">List Produk</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>index.php/admin/stat_article">Order</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="page-wrapper">
                <div class="default-style">
                    <?= $contents ?>
                </div>
            </div>
        </div>
    </body>
</html>
