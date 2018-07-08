<style type="text/css">
.circular {
		width: 160px;
		height: 160px;
		border-radius: 85px !important;
		-webkit-border-radius: 150px;
		-moz-border-radius: 150px;
		/*background: url("/public/img/logo_ico.png") no-repeat;*/
		box-shadow: 0 0 8px rgba(0, 0, 0, .8);
		-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
		-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	}
</style>
<script language="javascript" type="text/javascript">
	window.onload = function() {
		document.login.username.focus();
	}
</script>
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
		<!-- PUT YOUR LOGO HERE -->
	</div>
	<!-- END LOGO -->    
    <div class="content">
		<!-- BEGIN LOGIN FORM -->
		<form class="form-vertical login-form" method="post" action="" role="login" name="login" id="login-form">
			<!--<h3 class="form-title">WESTERN HR</h3>--><center>
            <div class="circular"><img src="/public/img/login.png" width="100" style="padding:5px 5px; margin-top:10px;"></div><br/></center>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>Enter any username and password.</span>
			</div>
            
            <div id="error">
            <!-- error will be shown here ! -->
            </div>
            
			<div class="control-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="fa fa-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" id="username"/>
                        <span id="check-e"></span>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="fa fa-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password"/>
					</div>
				</div>
			</div>
			<div class="form-actions">
                <button type="submit" class="btn blue btn-default" name="btn-login" id="btn-login">
                    <i class="fa fa-sign-in"></i>&nbsp; Log In &nbsp;
                </button>
			</div>
		</form>
		<!-- END LOGIN FORM -->  
        <!-- BEGIN COPYRIGHT -->
        <div class="create-account">
			</div>
        <div class="copyright">
        &copy; <?php echo date("Y");?>
		<a href="http://www.pingitgroup.com/" target="_blank" style="color:white !important;">Ping Information Technology Group</a>
	</div>
        <!-- END COPYRIGHT -->      
	</div>
    
	<!-- END LOGIN -->
    