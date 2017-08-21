<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>

    <link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/css/index.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/css/admin.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/image-picker-master/image-picker/image-picker.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/image-picker-master/image-picker/image-picker.js');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src=" <?php echo base_url('/public/bootstrap/js/bootstrap.js')?>"> </script>
</head>
<body class="p-0 m-0">


<div class="col-*-12  border border-light border-top-0 bg-light p-0">
    <div class="container ">

        <div class="row   text-right p-2">
            <div class="col"></div>
            <div class="col">
                <!-- Example single danger button -->
                <div class="btn-group">
                    <button type="button" class="btn  dropdown-toggle bg-light drop" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                        სახელი
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fa fa-comments" aria-hidden="true"></i> შეტყობინებები </a>
                        <a class="dropdown-item" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> გასვლა </a>
                    </div>
                </div>


            </div>
        </div>

        </div>



</div>


<div  class="container-fluid m-0 pl-0 pr-4" >
    <div class="row">
        <div class="col-3 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="nav-side-menu">
                <div class="brand"> <img class="img-fluid p-3" src="<?php echo base_url('public/images/logo.png');?>" width="200px" alt="logo"></div>
                <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                <div class="menu-list">
                    <ul id="menu-content" class="menu-content collapse out">
                        <li>
                            <a href="<?php echo base_url().'admin' ?>">
                                <i class="fa fa-dashboard fa-lg"></i> ძირითადი გვერდი
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/catalog' ?>">
                                <i class="fa fa-plus fa-lg"></i> კატალოგი
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin' ?>">
                                <i class="fa fa-users fa-lg"></i> მომხმარებლები
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin' ?>">
                                <i class="fa fa-user fa-lg"></i> პროფილი
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin' ?>">
                                <i class="fa fa-sign-out fa-lg"></i> გასვლა
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>

