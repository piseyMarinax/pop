<script language="javascript" type="text/javascript">
	window.onload = function() {
		document.form_roleEdit.rolename.focus();
	}
</script>
	<div id="page_content">
		<div id="page_content_inner">
			<div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">User Role</h3>
                    <form action="" role="form" id="form_roleEdit" name="form_roleEdit" method="post" enctype="multipart/form-data"><br/>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                <label>Role Name</label>
                                <input type="text" class="md-input form-control" value="<?php echo @$this->roletoedit[0]['rolename'];?>" name="rolename" id="rolename"/> 
                                <input type="hidden" placeholder="roleid" class="form-control" id="roleid" name="roleid" value="<?php echo @$this->roletoedit[0]['roleid'];?>"> 
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                <label>Description</label>
                                <input type="text" class="md-input" value="<?php echo @$this->roletoedit[0]['roledescription'];?>" name="roledescription" id="roledescription"/>
                            </div><br/><br/>
                           <div class="uk-form-row">
                            	<div class="uk-width-1-1">
                                	<button type="submit" class="md-btn md-btn-primary">Update &nbsp;<i class="fa fa-arrow-circle-right" id="btn_role" name="btn_role"></i></button>
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
                            <th>No</th><th>Department Name</th><th>Description</th><th>Action</th>
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
                                <a href="<?php echo URL.'user/roleEdition/'.$id;?>" title="Edit"><span class="uk-badge uk-badge-success"><i class="fa fa-pencil-square-o"></i></span></a>
                            </td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        <!--end mail box-->
        <!-- end: PAGE CONTENT-->
        </div>
    </div>
    <!-- end: PAGE -->