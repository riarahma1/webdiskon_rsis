<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Panel</title>
 <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
 <style>
 body {
  padding-top: 70px;
 }
 </style>
</head>

<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
   <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>">Admin Panel</a>
   <ul class="navbar-nav ms-auto">
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('kategori'); ?>">Kategori</a></li>
    <li class="nav-item"><a class="nav-link text-danger" href="<?php echo base_url('auth/logout'); ?>">Logout</a></li>
   </ul>
  </div>
 </nav>