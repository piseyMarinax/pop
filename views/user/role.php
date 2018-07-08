<script language="javascript" type="text/javascript">
	window.onload = function() {
		document.form_roles.rolename.focus();
	}
</script>
	<div id="page_content">
		<div id="page_content_inner">
			<div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">User Role </h3>
                    <form action="" role="form" id="form_roles" name="form_roles" method="post" enctype="multipart/form-data"><br/>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                <label>Role Name</label>
                                <input type="text" class="md-input form-control" value="" name="rolename" id="rolename"/> 
                                <input type="hidden" placeholder="roleid" class="form-control" id="roleid" name="roleid">
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                    <label>Description</label>
                                    <input type="text" class="md-input" value="" name="roledescription" id="roledescription"/>
                            </div><br/><br/>
                           <div class="uk-form-row">
                            	<div class="uk-width-1-1">
                                	<button type="submit" class="md-btn md-btn-primary">Save &nbsp;<i class="fa fa-arrow-circle-right" id="btn_dept" name="btn_dept"></i></button>
                            	</div>
                            </div> 
                        </div>
                    </div>
                    
                    </form>
                    <br/><br/>
                    <div class="errorMsg">
                                            
                    </div>
                </div>
            </div> 
            
					
					<!-- end: PAGE CONTENT-->
                    <!-- start: PAGE CONTENT -->
			<div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <table id="dt_colVis" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th><th>Role Name</th><th>Description</th><th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
							@$a = 0;
							foreach($this->ListRole as $key => $value) { 
							@$a++;	
							$id = $value['roleid'];
						?>
                        <tr>
                            <td><?php echo $a;?></td><td><?php echo $value['rolename'];?></td>
                            <td><?php echo $value['roledescription'];?></td>
                            <td>
                                <a href="<?php echo URL.'user/roleEdition/'.@$id;?>" title="Edit"><span class="uk-badge uk-badge-success"><i class="fa fa-pencil-square-o"></i></span></a>
                                <a href="#" id="<?php echo $id; ?>" class="delete" title="Delete"><span class="uk-badge uk-badge-danger"><i class="fa fa-trash"></i></span></a>
                            </td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
    <script src="/config/jquery.js"></script>
	<script type="text/javascript">
		$(function() {
			$(".delete").click(function(){
				var element = $(this);
				var del_id = element.attr("id");
				var info = 'id=' + del_id;
				if(confirm("Are you sure you want to delete this?"))
				{
				 $.ajax({
				   type: "POST",
				   url: "../config/roledelete.php",
				   data: info,
				   success: function(){
				 }
				});
					/*
				  $(this).parents(".show").animate({ backgroundColor: "#003" }, "slow")
				  .animate({ opacity: "hide" }, "slow");*/
				  setTimeout( 'window.location.href = "../user/role";', 1000);
				 }
				return false;
			});
		});
    </script>