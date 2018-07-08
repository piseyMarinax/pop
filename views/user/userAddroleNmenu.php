<script language="javascript" type="text/javascript">
	window.onload = function() {
		document.form_roleuserpwd.su_pass.focus();
	}
</script>
    <!-- end: PAGE HEADER -->
    <!-- start: PAGE CONTENT -->
	<div id="page_content">
		<div id="page_content_inner">
			<div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a" style="font-family:Georgia;">CREATE Login/Permission and Menu</h3>
                     <!--<form action="<?php echo URL.'user/createpwduser';?>" role="form" name="form_roleuserpwd" method="post" enctype="multipart/form-data">-->
                     <form action="" role="form" id="form_roleuserpwd" name="form_roleuserpwd" method="post" enctype="multipart/form-data">
                    <br/>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                        	<div class="uk-grid uk-form-row">
                            	<div class="uk-width-medium-1-2">
                                	<label>Name in Khmer <span style="color:red;">*</span></label>
                                    <input type="text" class="md-input" value="<?php echo @$this->editData[0]['s_namekh'];?>" name="txten_name" id="txten_name" disabled style="font-family:KhmerOS; font-size:13px;"/>
                                    <input type="hidden" class="form-control" id="txtempid" name="txtempid" value="<?php echo @$this->editData[0]['user_id'];?>">
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>Name in English <span style="color:red;">*</span></label>
                                    <input type="text" class="md-input" value="<?php echo @$this->editData[0]['s_nameEn'];?>" name="txten_name" id="txten_name" disabled/>
                                </div>
                             </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                        	<div class="uk-form-row">
                                    <label>E-mail <span style="color:red;">*</span></label>
                                	<input type="text" class="md-input form-control" value="<?php echo @$this->editData[0]['s_email'];?>" name="email" id="email" disabled/>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                        	<div class="uk-form-row">
                                <label>Password </label>
                                <input type="password" class="md-input" value="" name="su_pass" id="su_pass"/>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                <div class="parsley-row">                                       
                                    <select id="val_select" data-md-selectize name="roleid" required>
                                        <option value="-1" selected>Group Policy</option>
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
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-form-row">  		
                             <input type="hidden" class="form-control" id="txtaddedby" name="txtaddedby" value="<?php echo $_SESSION['user_id'];?>">
                             <input type="hidden" name="gms_evalstatus" value="1"/>
                              <table class="uk-table" style="font-family:KhmerOS; min-width:400px;">
                                <thead>
                                  <tr>
                                    <th>N</th>
                                    <th>Menu</th>
                                    <th>Check</th>
                                  </tr>
                                </thead>
                                <tbody>
        
                                <?php 
                                      @$a = 0;
                                      foreach($this->menulisttouser as $key => $value) { 
                                      $smenu = $value['smenu'];
                                      @$a++;		
                              ?>                            	
                                  <tr>
                                    <td><?php echo @$a; ?></td>
                                    <td><?php echo $value['mm_name']; ?>
                                          <div class="listsubmenu" style='display:none;'>
                                          	<div class="form-group">
                                            	<table class="uk-table" style="min-width:300px;">
                                            	<?php
													foreach($smenu as $skey => $svalue) {
														?>
                                                    <tr>
                                                    	<td><?php echo "- ". $svalue['m_name'];?></td>
                                                        <td><input type="checkbox" name="sboxes[]" value="<?php echo $value['mm_id']."__".$svalue['m_id']; ?>"/>
                                                       </td></tr>
													 <?php   
                                                     }
                                                    ?>
                                                    </table>
                                            </div>
                                          </div>
                                      </td>
                                <td>
                                   <input type="checkbox" name="boxes[]" value="<?php echo $value['mm_id']; ?>"/>
                               </td>
                               </tr>                                
                                  <?php } ?>
                                </tbody>
                              </table>
                            </div>
                        </div> <br/>
                        <div class="uk-form-row">
                            <div class="uk-width-1-1">
                               <button type="submit" class="md-btn md-btn-primary">CREATE &nbsp;<i class="fa fa-arrow-circle-right" id="btn_edistaff" name="btn_edistaff"></i></button>&nbsp;<a href="<?php echo URL.'user'?>" class="md-btn md-btn-primary"><i class="fa fa-list"></i> User List</a>
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
    <!-- Additional scripts Checkbox animation-->
<script>
    jQuery(document).ready(function($) {        
        $( "input[type=checkbox]" ).click(function(e) {
            tr = $(this).closest('tr');
            div = $(tr).find('.listsubmenu');
            
            if($(this).prop('checked')) {
                tr.attr('style', 'color:#0044cc;');                
                $(div).show('slow');
            }                
            else {
                tr.removeAttr('style');
                $(div).hide('slow');
            }
        });
    });
	
</script>