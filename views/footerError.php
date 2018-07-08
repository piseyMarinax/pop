<!-- end: PAGE -->
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
        <script src="/public/js/jqueryv2.0.3.min.js"></script>
		<!--<![endif]-->
		<script src="/public/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="/public/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="/public/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="/public/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="/public/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="/public/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="/public/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="/public/plugins/less/less-1.5.0.min.js"></script>
		<script src="/public/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="/public/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="/public/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="/public/plugins/rainyday/rainyday.js"></script>
		<script src="/public/js/utility-error404.js?<?=time()?>"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Error404.init();				
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>