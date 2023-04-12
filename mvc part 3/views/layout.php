<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Mourad</title>



<link rel="stylesheet" href="<?php echo CSS;?>bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSS;?>dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo PLUGINS;?>fontawesome.min.css">
<link rel="stylesheet" href="<?php echo PLUGINS;?>all.min.css">
<link rel="stylesheet" href="<?php echo CSS;?>style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div>
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<div class="header">

<div class="header-left active" style="background: #2E3840;">
<a href="index.html" class="logo">

</a>
<a href="index.html" class="logo-small">

</a>
<a id="toggle_btn" href="javascript:void(0);">
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="nav user-menu">

<li class="nav-item">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
</div>
</li>



<li class="nav-item dropdown has-arrow main-drop">
<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
<span class="user-img"><i class="fa fa-user" aria-hidden="true"></i>

<span class="status online"></span></span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilename">
<div class="profileset">
<span class="user-img"><i class="fa fa-user" aria-hidden="true"></i>
<span class="status online"></span></span>
<div class="profilesets">
<h6>John Doe</h6>
<h5>Admin</h5>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My Profile</a>
<a class="dropdown-item" href="generalsettings.html"><i class="me-2" data-feather="settings"></i>Settings</a>
<hr class="m-0">
<a class="dropdown-item logout pb-0" href="signin.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
</div>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="generalsettings.html">Settings</a>
<a class="dropdown-item" href="signin.html">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll" style="background: #2E3840;">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="active">
<a href="home"><i data-feather="home"></i><span>Home</span> </a>
</li>
<li class="submenu active">
<a href="javascript:void(0);"><i data-feather="shopping-bag"></i><span>programme</span></a>
<ul class="text-white" style="background: #2E3840;">
<li><a href="productlist.html" class="text-white" >list programme</a></li>
<li><a href="addproduct.html" class="text-white" >ajouter programme</a></li>
<li><a href="categorylist.html" class="text-white" >Category</a></li>
</ul>
</li>
<li class="submenu active">
<a href="javascript:void(0);"><i data-feather="shuffle"></i><span>services</span></a>
<ul style="background: #2E3840;">
<li><a href="saleslist.html"class="text-white">service en cours</a></li>
<li><a href="pos.html" class="text-white">Nouveau service</a></li>

</ul>
</li>
<li class="submenu active">
<a href="javascript:void(0);"><i data-feather="check-square"></i><span>factures</span></a>
<ul style="background: #2E3840;">
<li><a href="purchaselist.html" class="text-white">liste factures</a></li>
<li><a href="addpurchase.html" class="text-white">Archives</a></li>
</ul>
</li>
<li class="submenu active">
<a href="javascript:void(0);"><i data-feather="align-left"></i><span>ajouter cours</span></a>
<ul style="background: #2E3840;">
<li><a href="nouveaucours" class="text-white">Cours reservation</a></li>
</ul>
</li>

<li class="submenu active">
<a href="javascript:void(0);"><i data-feather="dollar-sign"></i><span>payement</span></a>
<ul style="background: #2E3840;">
<li><a href="transferlist.html" class="text-white">payement</a></li>

</ul>
</li>
<li class="submenu active">
<a href="javascript:void(0);"><i data-feather="corner-down-left"></i><span>materiel</span></a>
<ul style="background: #2E3840;">
<li><a href="materiel" class="text-white">liste materiel</a></li>
<li><a href="createsalesreturn.html" class="text-white">ajouter materiel</a></li>

</ul>
</li>
<li class="submenu active">
<a href="javascript:void(0);"><i data-feather="users"></i><span>clients/coach</span></a>
<ul style="background: #2E3840;">
<li><a href="user" class="text-white">liste clients</a></li>
<li><a href="newclient" class="text-white">ajouter client</a></li>
<li><a href="coach" class="text-white">liste coach</a></li>
<li><a href="addcoach" class="text-white">ajouter coach</a></li>
</ul>
</li> 

<li class="submenu active">
<a href="javascript:void(0);"><i data-feather="map-pin"></i><span>localité</span></a>
<ul style="background: #2E3840;">
<li><a href="local" class="text-white">nouveau pays </a></li>
<li><a href="statelist.html" class="text-white">pays disponibles</a></li>
</ul>
</li>

</div>
</div>
</div>

<!--header -->


<?php echo $content ?>

<!-- footer --> 


<script src="<?php echo JS;?>jquery-3.6.0.min.js"></script>
<script src="<?php echo JS;?>feather.min.js"></script>
<script src="<?php echo JS;?>jquery.slimscroll.min.js"></script>
<script src="<?php echo JS;?>jquery.dataTables.min.js"></script>
<script src="<?php echo JS;?>dataTables.bootstrap4.min.js"></script>
<script src="<?php echo JS;?>bootstrap.bundle.min.js"></script>
<script src="<?php echo JS;?>script.js"></script>
<script src="<?php echo JS;?>JsLocalSearch.js"></script>


</body>
</html>