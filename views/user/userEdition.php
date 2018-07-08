<script language="javascript" type="text/javascript">
	window.onload = function() {
		document.form_eidtstaff.txten_name.focus();
	}
</script>
    <!-- end: PAGE HEADER -->
    <!-- start: PAGE CONTENT -->
	<div id="page_content">
		<div id="page_content_inner">
			<div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">STAFF Information Update</h3>
                     <form action="" role="form" id="form_editinguser" name="form_editingstaffinfo" method="post" enctype="multipart/form-data">
                    <br/>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                        	<?php @$pic = $this->editData[0]['s_photo']; if(!empty($pic)){?>
                        	<div class="uk-grid uk-form-row">
                            	<div class="uk-width-medium-1-2">
                                	<div class="md-card-content">
                                        <h3 class="heading_a uk-margin-small-bottom">
                                            Photo
                                        </h3>
                                    <img src="/public/staffphotos/<?php echo @$pic;?>" width="99%"/>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <div class="uk-form-row">
                                        <div class="md-card-content">
                                            <h3 class="heading_a uk-margin-small-bottom">
                                                New Photo upload
                                            </h3>
                                            <input type="file" id="input-file-a" name="s_photo" class="dropify" />
                                        </div>
                                    </div>
                                  </div>
                             	</div>
                              	<?php }else {?>
									<div class="uk-form-row">
                                        <div class="md-card-content">
                                            <h3 class="heading_a uk-margin-small-bottom">
                                                Upload a photo
                                            </h3>
                                            <input type="file" id="input-file-a" name="s_photo" class="dropify" />
                                        </div>
                                    </div>
								<?php }?>
                        	
                        	
                        </div>
                        <div class="uk-width-medium-1-2" style="padding-top:7px;">
                        	<div class="uk-grid uk-form-row">
                            	<div class="uk-width-medium-1-2">
                                    <label>E-mail <span style="color:red;">*</span></label>
                                	<input type="text" class="md-input form-control" value="<?php echo @$this->editData[0]['s_email'];?>" name="email" id="email" required/>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label for="uk_dp_1">Date of Birth</label>
                                        <?php @$bd = $this->editData[0]['s_dob'];?>
                                        <input class="md-input" type="text" id="uk_dp_1" name="txtdob" value="<?php echo date("d-M-Y", strtotime(@$bd));?>" data-uk-datepicker="{format:'DD-MMM-YYYY'}">
                                </div>
                            </div>                            
                            <div class="uk-grid uk-form-row">
                                <div class="uk-width-medium-1-2">
                                     <label>Name in English <span style="color:red;">*</span></label>
                                    <input type="text" class="md-input" value="<?php echo @$this->editData[0]['s_nameEn'];?>" name="txten_name" id="txten_name" required/>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>Name in Khmer <span style="color:red;">*</span></label>
                                    <input type="text" class="md-input" value="<?php echo @$this->editData[0]['s_namekh'];?>" name="txten_name" id="txten_name" required/>
                                </div>
                                
                            </div>
                            <div class="uk-grid uk-form-row">
                            	<div class="uk-width-medium-1-2">
                                    <label>New Password </label>
                                    <input type="password" class="md-input" value="" name="su_pass" id="password"/>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <div class="parsley-row">                                       
                                        <select id="val_select" data-md-selectize name="role">
                                            <option value="" selected>Role</option>
                                            <?php 
											$role = $this->editData[0]['s_roleid_insys'];
											foreach($this->roleuser as $dkey => $dvalue){
												@$roid = $dvalue['roleid'];
											?>
											<option value="<?php echo $roid;?> <?=$roid==$role?'selected':''?>"><?php echo $dvalue['rolename'];?></option>	
											<?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                           
                            <br/>
                        </div>
                        <div class="uk-form-row">
                            <div class="uk-width-1-1">
                               <button type="submit" class="md-btn md-btn-primary">Update &nbsp;<i class="fa fa-arrow-circle-right" id="btn_edistaff" name="btn_edistaff"></i></button>
                            </div>
                        </div> 
                    </div>
                    
                    </form>
                    <br/>
                    <div class="errorMsg">
                                            
                    </div>
                </div>
            </div>		
            <!-- end: PAGE CONTENT-->
            
    </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->