<script language="javascript" type="text/javascript">
	window.onload = function() {
		document.form_addstaff.txten_name.focus();
	}
</script>
    <!-- end: PAGE HEADER -->
    <!-- start: PAGE CONTENT -->
	<div id="page_content">
		<div id="page_content_inner">
			<div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">STAFF Information</h3>
                    <form action="" role="form" id="form_addstaff" name="form_addstaff" method="post" enctype="multipart/form-data">
                    <!--<form action="<?php echo URL.'information/addstaffprofile';?>" role="form" name="form_addstaff" method="post" enctype="multipart/form-data">-->
                    <br/>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                        	<div class="uk-form-row">
                                <div class="md-card-content">
                                    <h3 class="heading_a uk-margin-small-bottom">
                                        Photo
                                    </h3>
                                    <input type="file" id="input-file-a" name="s_photo" class="dropify" />
                                </div>
                            </div>
                        	<div class="uk-grid uk-form-row">
                                <div class="uk-width-medium-1-2">
                                    <div class="parsley-row">
                                        <select id="val_select" data-md-selectize name="idprefix">
                                            <?php 
                                                foreach($this->prefix_selected as $dkey => $dvalue){
                                                ?>
                                                <option value="<?php echo @$dvalue['pre_id'];?>"><?php echo @$dvalue['pre_text'];?>
                                                </option>	
                                                <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>ID Number <span style="color:red;">*</span></label>
                                    <?php @$IDN = $this->idcodeSelect[0]['codeid'];?>
                                    <input type="text" class="md-input" value="<?php if($IDN < 10){ echo "000".(@$IDN + 1);}else if($IDN < 100){ echo "00".(@$IDN + 1);}else if($IDN < 1000){echo "0".@$IDN;}else{echo (@$IDN + 1);}?>" name="idnum" id="idnum"/>
                                    <input type="hidden" class="form-control" id="idcode" name="idcode" value="">
                                </div>
                            </div>
                            <div class="uk-grid uk-form-row">
                                <div class="uk-width-medium-1-2">
                                    <label>Name in English <span style="color:red;">*</span></label>
                                    <input type="text" class="md-input" value="" name="txten_name" id="txten_name" required/>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>Name in Khmer</label>
                                    <input type="text" class="md-input" value="" name="txtkh_name" id="txtkh_name"/>
                                    <input type="hidden" class="form-control" id="txtaddedby" name="txtaddedby" value="<?php echo $_SESSION['user_id'];?>">
                                </div>
                            </div>
                        	<div class="uk-grid uk-form-row">
                            	<div class="uk-width-medium-1-2">
                                <br/>
                                    <span class="icheck-inline">
                                        <input type="radio" name="radio_gender" id="radio_demo_inline_1" data-md-icheck value="M"/>
                                        <label for="radio_demo_inline_1" class="inline-label">Male</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="radio" name="radio_gender" id="radio_demo_inline_2" data-md-icheck value="F" checked/>
                                        <label for="radio_demo_inline_2" class="inline-label">Female</label>
                                    </span>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_1">Date of Birth</label>
                                        <input class="md-input" type="text" id="uk_dp_1" name="txtdob" data-uk-datepicker="{format:'DD-MMM-YYYY'}">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid uk-form-row">
                            	<div class="uk-width-medium-1-2">
                                    <div class="parsley-row">
                                        <select id="val_select" data-md-selectize name="txtnationalityid">
                                            <option value="" selected>Nationality - Country</option>
                                            <?php 
											foreach($this->countrylist as $dkey => $dvalue){
												@$coid = $dvalue['coun_id'];
											?>
											<option value="<?php echo @$coid;?>"><?php echo @$dvalue['coun_en'];?>
											</option>	
											<?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>E-mail <span style="color:red;">*</span></label>
                                	<input type="text" class="md-input form-control" value="" name="email" id="email" required/>
                                </div>
                            </div>                            
                            <div class="uk-grid uk-form-row">
                                <div class="uk-width-medium-1-2">
                                    <label>Phone 1 <span style="color:red;">*</span></label>
                                	<input type="text" class="md-input form-control" value="" name="mobile1" id="mobile1" required/>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>Phone 2</label>
                                	<input type="text" class="md-input form-control" value="" name="mobile2" id="mobile2"/>
                                </div>
                            </div>
                            <div class="uk-grid uk-form-row">
                            	<div class="uk-width-medium-1-2">
                                    <div class="parsley-row">
                                        <select id="val_select" data-md-selectize name="civil_status">
                                            <option value="" selected>Civil Status</option>
                                            <?php 
                                                foreach($this->civilstatus as $dkey => $dvalue){
                                                @$csid = $dvalue['st_csid'];
                                                ?>
                                                <option value="<?php echo @$csid;?>"><?php echo $dvalue['st_cstitle'];?>
                                                </option>	
                                                <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>Number of Children</label>
                                	<input type="text" class="md-input form-control" value="" name="txtnbofchild" id="txtnbofchild"/>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2"><br/><br/>
                        	
                            <div class="uk-form-row">
                                <label>Current Address</label>
                                <input type="text" class="md-input" value="" name="curaddress" id="curaddress"/>
                            </div>
                            <div class="uk-grid uk-form-row">
                            	<div class="uk-width-medium-1-2">
                                	<div class="parsley-row">
                                        <select id="val_select" data-md-selectize name="txtjobtype">
                                            <option value="" selected>Job Type</option>
                                            <?php 
                                                foreach($this->Listjobtype as $dkey => $dvalue){
                                                @$jid = $dvalue['job_id'];
                                                ?>
                                                <option value="<?php echo @$jid;?>"><?php echo $dvalue['job_name'];?>
                                                </option>	
                                                <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                	<div class="parsley-row">
                                        <select id="val_select" data-md-selectize name="txtstafftype">
                                            <option value="" selected>Staff Type</option>
                                            <?php 
                                                foreach($this->stafftype as $dkey => $dvalue){
                                                @$stid = $dvalue['st_id'];
                                                ?>
                                                <option value="<?php echo @$stid;?>"><?php echo $dvalue['st_name'];?>
                                                </option>	
                                                <?php }
                                            ?>
                                        </select>
                                    </div> 
                                </div>
                            </div>
                            <div class="uk-grid uk-form-row">
                            	<div class="uk-width-medium-1-2">
                                   <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_1">Emp Hire Date <span style="color:red;">*</span></label>
                                        <input class="md-input" type="text" id="uk_dp_1" name="emphiredate" data-uk-datepicker="{format:'DD-MMM-YYYY'}">
                                    </div> 
                                </div>
                                <div class="uk-width-medium-1-2">
                                	<div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_1">Leave Date</label>
                                        <input class="md-input" type="text" id="uk_dp_1" name="empexpiredate" data-uk-datepicker="{format:'DD-MMM-YYYY'}">
                                    </div>     
                                </div>
                            </div>
                            <div class="uk-grid uk-form-row">
                                <div class="uk-width-medium-1-2">
                                	<div class="parsley-row">
                                        <select id="val_select" data-md-selectize name="txtqualid">
                                            <option value="-1" selected>Choose Qualifications Level</option>
                                            <?php 
                                                foreach($this->ListQual as $dkey => $dvalue){
                                                @$qid = $dvalue['q_id'];
                                                ?>
                                                <option value="<?php echo @$qid;?>"><?php echo $dvalue['q_name'];?>
                                                </option>	
                                                <?php }
                                            ?>
                                        </select>
                                	</div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                	<label>School Name (Qualifications)</label>
                                	<input type="text" class="md-input" value="" name="qualnoted" id="qualnoted"/>
                                </div>
                            </div>
                            <div class="uk-grid uk-form-row">
                                <div class="uk-width-medium-1-2">
                                    <label>Language Spoken</label>
                                	<input type="text" class="md-input" value="" name="quallang" id="quallang"/>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <div class="parsley-row">
                                        <select id="val_select" data-md-selectize name="schoolcountry">
                                            <option value="-1" selected>School Country</option>
                                            <?php 
											foreach($this->countrylist as $dkey => $dvalue){
												@$coid = $dvalue['coun_id'];
											?>
											<option value="<?php echo @$coid;?>"><?php echo @$dvalue['coun_en'];?>
											</option>	
											<?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        	<h3>
                                <b>Function Information</b>
                            </h3>
                            <div class="uk-form-row">
                                <div class="parsley-row">
                                    <select id="val_select" data-md-selectize name="txtposition">
                                        <option value="" selected>Function *</option>
                                        <?php 
                                            foreach($this->ListPosition as $dkey => $dvalue){
                                            @$pid = $dvalue['pos_id'];
                                            ?>
                                            <option value="<?php echo @$pid;?>"><?php echo $dvalue['pos_name'];?>
                                            </option>	
                                            <?php }
                                        ?>
                                    </select>
                                </div>
                             </div>
                             <div class="uk-form-row">
                                <div class="parsley-row">
                                    <select id="val_select" data-md-selectize name="txtdepartment">
                                        <option value="" selected>Department *</option>
                                        <?php 
                                            foreach($this->DeptList as $dkey => $dvalue){
                                            @$did = $dvalue['deptid'];
                                            ?>
                                            <option value="<?php echo @$did;?>"><?php echo $dvalue['deptname'];?>
                                            </option>	
                                            <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        	<div class="uk-grid uk-form-row">
                                <div class="uk-width-medium-1-2">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_1">Hire Date <span style="color:red;">*</span></label>
                                        <input class="md-input" type="text" id="uk_dp_1" name="txthiredate" data-uk-datepicker="{format:'DD-MMM-YYYY'}">
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_1">Expire Date</label>
                                        <input class="md-input" type="text" id="uk_dp_1" name="txtexpire" data-uk-datepicker="{format:'DD-MMM-YYYY'}">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <!--<label>Position Description</label>
                                <input type="text" class="md-input" value="" name="txtnoted" id="txtnoted"/>-->
                                <label>Function Description</label>
                                <textarea cols="30" rows="4" class="md-input" name="txtnoted" id="txtnoted"></textarea>
                            </div>
                            <br/>
                        </div>
                        <div class="uk-form-row">
                            <div class="uk-width-1-1">
                               <button type="submit" class="md-btn md-btn-primary">Save &nbsp;<i class="fa fa-arrow-circle-right" id="btn_addstaff" name="btn_addstaff"></i></button>
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
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->