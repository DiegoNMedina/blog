<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Diego Medina</title>
    <meta charset="utf-8">
    <meta name="author" content="Diego Medina">
    <meta name="description" content="Hi! My name is Diego Medina and I'm a Software Engineer.
    Contact me for any collaboration or development">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link href="<?= base_url('assets/css/open-iconic-bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css'); ?>" rel="stylesheet">

    <link href="<?= base_url('assets/css/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/owl.theme.default.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/magnific-popup.css'); ?>" rel="stylesheet">

    <link href="<?= base_url('assets/css/aos.css'); ?>" rel="stylesheet">

    <link href="<?= base_url('assets/css/ionicons.min.css'); ?>" rel="stylesheet">

    <link href="<?= base_url('assets/css/flaticon.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/icomoon.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/images/bg_1.jpg'); ?>" rel="icon">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <!-- Messenger plugin del chat Code -->
    <div id="fb-root"></div>

    <!-- Your plugin del chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "104445321260859");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v10.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>