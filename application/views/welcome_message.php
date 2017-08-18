<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

    <link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/css/index.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src=" <?php echo base_url('/public/bootstrap/js/bootstrap.js')?>"> </script>
</head>
<body class="bg-light">
<div class="col-*-12 bg-white border border-light border-top-0">
    <div class="container ">

        <div class="row">
            <div class="col-12  p-2" >
                <div class="row">
                <div class="col-md-8 col-sm-6">
                    <ul class=" list-inline list-unstyled text-capitalize text-muted">
                        <li class="row">
                        <li class="list-inline-item col-md-3 pl-0"><strong>ბალანსი: <span class="text-success">0.00</span></strong></li>
                        <li class="list-inline-item col-md-4 pl-0"><strong>გაყინული თანხა: <span class="text-warning">0.00</span></strong></li>
                        <li class="list-inline-item col-md-3 pl-0"><strong>დავალიანება: <span class="text-danger">0.00</span></strong></li>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 ">
                    <ul class=" list-inline list-unstyled text-uppercase text-dark text-right">
                        <li class="list-inline-item col-md-5 p-0"><i class="fa fa-video-camera text-success " aria-hidden="true"></i>
                            <a  href="#" class="links"><strong> რა არის ebg?</strong></a></li>
                        <li class="list-inline-item col-md-5 p-0"><i class="fa fa-phone-square text-success" aria-hidden="true"></i><strong> (322)2 11 12 12</strong></li>

                    </ul>
                </div>
                </div>
            </div>
        </div>



    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-2 pb-2">
            <a href="#"><img class="img-fluid" src="<?php echo base_url('public/images/logo.png');?>" alt="logo"></a>
        </div>
        <div class="col-md-7 text-center pl-0">
            <form class=" form-inline">  <input class="form-control border border-left-0 border-right-0 border-top-0 borderRadius  col-md-10 col-sm-12 p-2" type="search" placeholder="მოძებნეთ ინგლისური სახელწოდებით" id="search-input">
                <button type="submit" class="btn btn-success borderRadius col-md-2 p-2 ">
                    <i class="fa fa-search  " aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <div class="col-md-3 ">

            <a href="#" ><i class="fa fa-heart text-danger fa-lg pl-2" aria-hidden="true"></i></a>
            <a href="#" ><i class="fa fa-bell text-dark pl-2 fa-lg" aria-hidden="true"></i></a>
            <a href="#" ><i class="fa fa-envelope  text-dark  pl-2 fa-lg" aria-hidden="true"></i></a>
            <a href="#" class="links pl-2"> <strong class="pl-2 ">სახელი  <i class="fa fa-bars text-dark fa-lg" aria-hidden="true"></i></a></strong>
        </div>

    </div>



</div>
<div class="container pt-5">
    <div class="row">
        <h2 class="border border-left-0 border-right-0 border-top-0 border-success p-2 text-muted">ბლოგი</h2>
    </div>
    <div class="row pt-2" >
        <div class="col-md-6 bg-danger"></div>
        <div class="col-md-6 bg-success"></div>
    </div>


</div>

</body>
</html>