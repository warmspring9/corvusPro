<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Corvus html template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
    
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">

    <!-- Favicon and touch icons  -->
    <link href="icon/android-icon-48x48.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/favicon-32x32.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon-16x16.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>                                 
<body class="header-sticky">

    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading...</h2>
        </div>
    </section> 
    
    <!-- Boxed -->
    <div class="boxed">     

        <!-- Header -->            
        <header id="header" class="header clearfix"> 
            <div class="header-wrap clearfix">
                <div id="logo" class="logo">
                    <a href="index.html" rel="home">
                        <img src="icon/android-icon-48x48.png" alt="image">
                    </a>
                </div><!-- /.logo -->
                <div class="nav-wrap">
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->
                    <nav id="mainnav" class="mainnav">
                        
                        <ul class="menu">
                            <li class="home">
                                <a href="index.html">Home</a>
                            </li>
                            <li><a href="./#about">Pages</a>
                                <ul class="submenu"> 
                                    <li class="sub-parent"><a href="#">About Us</a>
                                        <ul class="submenu"> 
                                            <li><a href="about_me.html">About Me</a></li>
                                        </ul><!-- /.submenu -->
                                    </li>
                                    <li class="sub-parent"><a href="">Contac Us</a>
                                        <ul class="submenu"> 
                                            <li><a href="contact_us_2.html">Contact</a></li>                                            
                                        </ul><!-- /.submenu -->               
                                    </li>                                   
                                </ul><!-- /.submenu -->
                            </li>
                            <li><a href="meet_the_team.html"> Groups</a>                           
                            </li>                            
                            <li><a href="#">Work</a>
                                <ul class="submenu">
                                    <li><a href="work.html">Work - Grid 3 Columns</a></li>
                                    <li><a href="work_fullwidth.php">Work - Grid 4 Columns</a></li>
                                    <li><a href="work_masory.html">Work Masory</a></li>
                                    <li><a href="work_detail.html">Work Detail</a></li>
                                </ul><!-- /.submenu -->
                            </li>                            
                            <li><a href="blog.html">Blog </a>
                                <ul class="submenu right-sub-menu"> 
                                    <li><a href="blog_masory.html">Blog Masonry</a>
                                    </li>
                                    <li><a href="blog_single.html">Blog Single</a></li>
                                </ul><!-- /.submenu -->
                            </li>
                            <li><a href="logout.php">Logout </a>
                            </li>
                        </ul><!-- /.menu -->
                    </nav><!-- /.mainnav -->  
                </div><!-- /.nav-wrap -->
                <div class="show-search">
                    <a href="#"><i class="fa fa-search"></i></a>   
                    <p class="cart">1</p>             
                </div><!-- /.show-search --> 
            </div><!-- /.header-inner --> 
        </header><!-- /.header -->
?>