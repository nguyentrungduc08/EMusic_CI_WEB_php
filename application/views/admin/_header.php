<?php /**
* Created by PhpStorm.
* User: trungduc
* Date: 26/05/2017
* Time: 03:27
*/ ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= isset($title) ? $title : 'Admin - Music';?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('resource/backend/html/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?= base_url('resource/backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css');?>" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?= base_url('resource/backend/plugins/bower_components//toast-master/css/jquery.toast.css');?>" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?= base_url('resource/backend/plugins/bower_components/morrisjs/morris.css');?>" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?= base_url('resource/backend/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css');?>" rel="stylesheet">
    <link href="<?= base_url('resource/backend/plugins/bower_components/chartist-js/dist/chartist.min.css');?>" rel="stylesheet">

    <!-- animation CSS -->
    <link href="<?= base_url('resource/backend/html/css/animate.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('resource/backend/html/css/style.css');?>" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?= base_url('resource/backend/html/css/colors/default.css');?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

