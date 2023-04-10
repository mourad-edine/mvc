<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Mourad</title>

<link rel="stylesheet" href="css/bootstrap.min.css">


<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
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
<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard</span> </a>
</li>
<li class="submenu active">
<a href="javascript:void(0);"><i class="fa fa-product-hunt" aria-hidden="true"></i><span> Product</span> <span class="menu-arrow"></span></a>
<ul class="text-white" style="background: #2E3840;">
<li><a href="productlist.html" class="text-white" >Product List</a></li>
<li><a href="addproduct.html" class="text-white" >Add Product</a></li>
<li><a href="categorylist.html" class="text-white" >Category List</a></li>
<li><a href="addcategory.html" class="text-white" >Add Category</a></li>
</ul>
</li>
<li class="submenu active">
<a href="javascript:void(0);"><i class="fa fa-area-chart" aria-hidden="true"></i><span> Sales</span> <span class="menu-arrow"></span></a>
<ul style="background: #2E3840;">
<li><a href="saleslist.html"class="text-white">Sales List</a></li>
<li><a href="pos.html" class="text-white">POS</a></li>
<li><a href="pos.html" class="text-white">New Sales</a></li>
<li><a href="salesreturnlists.html" class="text-white">Sales Return List</a></li>
<li><a href="createsalesreturns.html" class="text-white">New Sales Return</a></li>
</ul>
</li>
<li class="submenu active">
<a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span> Purchase</span> <span class="menu-arrow"></span></a>
<ul style="background: #2E3840;">
<li><a href="purchaselist.html" class="text-white">Purchase List</a></li>
<li><a href="addpurchase.html" class="text-white">Add Purchase</a></li>
<li><a href="importpurchase.html" class="text-white">Import Purchase</a></li>
</ul>
</li>
<li class="submenu active">
<a href="javascript:void(0);"><i class="fa fa-plus" aria-hidden="true"></i><span> Expense</span> <span class="menu-arrow"></span></a>
<ul style="background: #2E3840;">
<li><a href="expenselist.html" class="text-white">Expense List</a></li>
</ul>
</li>

<li class="submenu active">
<a href="javascript:void(0);"><i class="fa fa-exchange" aria-hidden="true"></i><span> Transfer</span> <span class="menu-arrow"></span></a>
<ul style="background: #2E3840;">
<li><a href="transferlist.html" class="text-white">Transfer List</a></li>

</ul>
</li>
<li class="submenu active">
<a href="javascript:void(0);"><i class="fa fa-paper-plane" aria-hidden="true"></i><span> Return</span> <span class="menu-arrow"></span></a>
<ul style="background: #2E3840;">
<li><a href="salesreturnlist.html" class="text-white">Sales Return List</a></li>
<li><a href="createsalesreturn.html" class="text-white">Add Sales Return </a></li>

</ul>
</li>
<li class="submenu active">
<a href="javascript:void(0);"><i class="fa fa-users" aria-hidden="true"></i><span> People</span> <span class="menu-arrow"></span></a>
<ul style="background: #2E3840;">
<li><a href="userlist.html" class="text-white">User List</a></li>
<li><a href="adduser.html" class="text-white">Add User</a></li>
<li><a href="storelist.html" class="text-white">Store List</a></li>
<li><a href="addstore.html" class="text-white">Add Store</a></li>
</ul>
</li> 

<li class="submenu active">
<a href="javascript:void(0);"><i class="fa fa-map-marker" aria-hidden="true"></i><span> Places</span> <span class="menu-arrow"></span></a>
<ul style="background: #2E3840;">
<li><a href="newstate.html" class="text-white">New State </a></li>
<li><a href="statelist.html" class="text-white">State list</a></li>
</ul>
</li>

</div>
</div>
</div>