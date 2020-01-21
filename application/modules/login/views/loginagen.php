<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php echo base_url();?>assetsfront/css/csslogin.css">

    <!-- Modernizr JS -->
    <script src="<?php echo base_url();?>assetsfront/js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body>

    <div class="wrapper">
    	<div class="container">
    		<h1>Login agen Dreamworld</h1>
    		<form class="form" action="<?php base_url() ?>login/login_agen" method="POST">
    			<input type="text"  name="username" placeholder="Username" required>
    			<input type="password"  name="password"placeholder="Password" required>
    			<button type="submit" id="login-button">Login</button>
    		</form>
    	</div>

    	<ul class="bg-bubbles">
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    	</ul>
    </div>
<script src="<?php echo base_url();?>assetsfront/js/loginjs.js"></script>
  </body>
</html>