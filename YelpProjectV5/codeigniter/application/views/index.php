
<!DOCTYPE html>
<html>
<head>
	<title>LocalSpot - Proiect TW</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta name="author" content="Alexandru Rapanu, Danut Anton, Cosmin Ilioaia">
	<meta name="description" content="LocalSpot este un proiect la TW realizat de Alexandru Rapanu, Danut Anton, Cosmin Ilioaia"/>
	<meta name="copyright" content="Copyright 2014">
	
    <!-- bootstrap -->
 	<link href="<?php echo(CSS.'bootstrap.css')?>" rel="stylesheet" />
    <link href="<?php echo(CSS.'bootstrap-responsive.css')?>" rel="stylesheet" />
    <link href="<?php echo(CSS.'bootstrap-overrides.css')?>" type="text/css" rel="stylesheet" />

    <!-- libraries/fonts -->
    <link href="<?php echo(LIB.'jquery-ui-1.10.2.custom.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo(LIB.'font-awesome.css')?>" type="text/css" rel="stylesheet" />

    <!-- elements/layout/icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo(CSS.'layout.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo(CSS.'elements.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo(CSS.'icons.css')?>" />

    <!-- index styles -->
    <link rel="stylesheet" href="<?php echo(CSS.'index.css')?>" type="text/css" media="screen" />    

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!-- lato font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

	
</head>

<body>

    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="brand" href="index.html"><img src="<?php echo(IMG.'logo.png')?>" /></a>

            <ul class="nav pull-right">                
                <li class="hidden-phone">
                    <input class="search" type="text" />
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">Utilizator Guest<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="signin.html">Sign In</a></li>
                        <li><a href="signup.html">Sign Up</a></li>
                    </ul>
                </li>
                
                <li class="settings hidden-phone">
                    <a href="signin.html" role="button">SIGN IN</a>
                </li>
            </ul>            
        </div>
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li class="active">
                
                <a href="index.html">
                    <i class="icon-home"></i>
                    <span>Home</span>
                </a>
            </li>            
            <li>
                <a href="#">
                    <i class="icon-signal"></i>
                    <span>Restaurants</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-signal"></i>
                    <span>Bars</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-signal"></i>
                    <span>Bakeries</span>
                </a>
            </li>
			<li>
                <a href="signin.html">
                    <i class="icon-signal"></i>
                    <span>SIGN IN</span>
                </a>
            </li>
			<li>
                <a href="signup.html">
                    <i class="icon-signal"></i>
                    <span>SIGN UP</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-cog"></i>
                    <span>About/Developers</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">

        <div class="container-fluid">

            <!-- firms statistics -->
            <div id="main-stats">
                <div class="row-fluid stats-row">
                    <div class="span3 stat">
                        <div class="data">
                            <span class="number">2457</span>Baruri
                        </div>
                    </div>
                    <div class="span3 stat">
                        <div class="data">
                            <span class="number">3240</span>Cofetarii
                        </div>
                    </div>
                    <div class="span3 stat last">
                        <div class="data">
                            <span class="number">322</span>Restaurante
                        </div>
                    </div>
                </div>
            </div>
            <!-- end firms statistics -->

            <div id="pad-wrapper">
				<!-- bars table -->
                <div class="table-wrapper orders-table section">
                    <div class="row-fluid head">
                        <div class="span12">
                            <h4>BARS</h4>
                        </div>
                    </div>

                    <div class="row-fluid filter-block">
                        <div class="pull-right">
                            <div class="btn-group pull-right">
                                <button class="glow left large">Ascending</button>
								<button class="glow right large">Descending</button>
                            </div>
                            <input type="text" class="search order-search" placeholder="Search for an order.." />
                        </div>
                    </div>

                    <div class="row-fluid">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="span2">
                                        Order ID
                                    </th>
                                    <th class="span3">
                                        Bussines
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Name
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Address
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Program
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Delivery
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row -->
                                <tr class="first">
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                        Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                       Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                        Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                        Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end bars table -->
				</br>
				</br>
				<!-- bars table -->
                <div class="table-wrapper orders-table section">
                    <div class="row-fluid head">
                        <div class="span12">
                            <h4>BAKERIES</h4>
                        </div>
                    </div>

                    <div class="row-fluid filter-block">
                        <div class="pull-right">
                            <div class="btn-group pull-right">
                                <button class="glow left large">Ascending</button>
                                <!--<button class="glow middle large">Pending</button>-->
                                <button class="glow right large">Descending</button>
                            </div>
                            <input type="text" class="search order-search" placeholder="Search for an order.." />
                        </div>
                    </div>

                    <div class="row-fluid">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="span2">
                                        Order ID
                                    </th>
                                    <th class="span3">
                                        Bussines
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Name
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Address
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Program
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Delivery
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row -->
                                <tr class="first">
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                        Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                       Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                        Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                        Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end bars table -->
				</br>
				</br>
				<!-- bars table -->
                <div class="table-wrapper orders-table section">
                    <div class="row-fluid head">
                        <div class="span12">
                            <h4>RESTAURANTS</h4>
                        </div>
                    </div>

                    <div class="row-fluid filter-block">
                        <div class="pull-right">
                            <div class="btn-group pull-right">
                                <button class="glow left large">Ascending</button>
                                <button class="glow right large">Descending</button>
                            </div>
                            <input type="text" class="search order-search" placeholder="Search for an order.." />
                        </div>
                    </div>

                    <div class="row-fluid">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="span2">
                                        Order ID
                                    </th>
                                    <th class="span3">
                                        Bussines
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Name
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Address
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Program
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        Delivery
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row -->
                                <tr class="first">
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                        Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                       Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                        Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="#">#459</a>
                                    </td>
                                    <td>
                                        Bar
                                    </td>
                                    <td>
                                        <a href="#">Corso</a>
                                    </td>
                                    <td>
                                        Strada Lapusneanu
                                    </td>
                                    <td>
                                        Non stop
                                    </td>
                                    <td>
                                        No
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end bars table -->
            </div>
        </div>
    </div>


	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo(JS.'bootstrap.min.js')?>"></script>
    <script src="<?php echo(JS.'theme.js')?>"></script>

</body>
</html>