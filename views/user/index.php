<?php 
	if ((Session::get('s_roleid_insys')) == 1 OR (Session::get('s_roleid_insys')) == 2){
?>
    <!-- end: PAGE HEADER -->
    <!-- start: PAGE CONTENT -->
	<div id="page_content">
		<div id="page_content_inner">
			<!-- start: PAGE CONTENT -->
            <!-- start blog tab-->
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
            		<div class="user_content">
                            <ul id="user_profile_tabs" class="uk-tab" data-uk-tab="{connect:'#user_profile_tabs_content', animation:'slide-horizontal'}">
                                <li class="uk-active"><a href="#">VIEW USER LIST</a></li>
                                <li><a href="#">Create Login</a></li>
                                <!-- tab 3 <li><a href="#">Provisionary</a></li>-->
                            </ul>
                            <ul id="user_profile_tabs_content" class="uk-switcher uk-margin">
                                <li>
                                    <table id="dt_colVis" class="uk-table uk-table-hover uk-table-nowrap uk-table-align-vertical" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>N</th><th>Name (KH)</th>
                                                <th>Name (EN)</th><th>E-mail</th>
                                                <th>Permission</th><th>Get Menu</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                @$a = 0;
                                                foreach($this->userlist as $key => $value) { 
                                                //@$position = $value['position'];
                                                @$a++;	
                                                $id = $value['user_id'];
                                                @$code = $value['u_code'];
                                                @$idn = $value['s_codeid'];
                                                @$prefix = $value['pre_text'];
                                            ?>
                                            <tr>
                                                <td class="hidden-xs"><?php echo @$a;?></td>
                                                <td style="font-family:KhmerOSSiemreap;">
                                                    <?php echo @$value['s_namekh'];?></td>
                                                <td><?php echo @$value['s_nameEn'];?></td>
                                                <td><?php echo @$value['s_email'];?></td>
                                                <td><?php echo @$value['rolename'];?></td>
                                                <td><a href="<?php echo URL.'user/userEdition/'.$code;?>" title="View Profile">View Menu</a></td>
                                                <td>
                                                    
                                                    <?php if($value['log_active'] == 1){ ?>
                                                    <a href="<?php echo URL.'user/active/'.$code; ?>" title="Active Profile">
                                                        <span class="uk-badge uk-badge-success"><i id="activeuser" class="fa fa-check-circle-o"></i></span>
                                                    </a>    
                                                       <?php } else{ ?>
                                                    <a href="<?php echo URL.'user/unactive/'.$code; ?>" title="Active Profile">
                                                        <span class="uk-badge uk-badge-danger"> <i id="unactiveuser" class="fa fa-times-circle-o"></i></span> 
                                                    </a><?php } ?>
                                                    <a href="<?php echo URL.'user/userEdition/'.$code;?>" title="Edit or Change Password"><span class="uk-badge uk-badge-success"><i class="fa fa-pencil-square-o"></i></span></a>
                                                    <a href="#" title="Delete"><span class="uk-badge uk-badge-danger"><i class="fa fa-trash"></i></span></a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                            </tbody>
                                    </table>
                                </li>
                                <!--start permenant blog-->
                                <li>
                                    <div class="md-card uk-margin-medium-bottom">
                                        <div class="md-card-content">
                                            <table id="dt_default" class="uk-table" cellspacing="0" width="100%">
                                                <thead>
                                            <tr>
                                                <th>N</th><th>ID</th><th>Name (KH)</th><th>Name (EN)</th><th>Sex</th><th>E-mail/Phone</th><th>Function</th><th>Nationality</th><th>Action</th>
                                            </tr>
                                            </thead>
                                            <!--
                                            <tfoot>
                                            <tr>
                                                <th>N</th><th>ID</th><th>Name (KH)</th><th>Name (EN)</th><th>Sex</th>
                                                <th>Nationality</th><th>Function</th>
                                                <th>DOB</th><th>E-mail/Phone</th>
                                                <th>Qualifications</th><th>Action</th>
                                            </tr>
                                            </tfoot>-->
                                            <tbody>
                                            <?php
                                                @$a = 0;
                                                foreach($this->stafflist as $key => $value) { 
                                                @$position = $value['position'];
                                                @$a++;	
                                                $id = $value['user_id'];
                                                @$code = $value['s_codeurl'];
                                                @$idn = $value['s_codeid'];
                                                @$prefix = $value['pre_text'];
                                            ?>
                                            <tr>
                                                <td class="hidden-xs"><?php echo @$a;?></td>
                                                <td><?php if(($value['s_codeid']) < 10){
                                                    echo "<b>".@$prefix.'-00'.@$value['s_codeid']."</b>";
                                                }else if((($value['s_codeid'])) < 100){
                                                    echo "<b>".@$prefix.'-0'.@$value['s_codeid']."</b>";
                                                }else{ echo "<b>".@$prefix.'-'.@$value['s_codeid']."</b>";
                                                }?>
                                                </td>
                                                <td style="font-family:KhmerOSSiemreap;">
												<?php echo @$value['s_namekh'];?>
												</td>
                                                <td><?php echo @$value['s_nameEn'];?></td>
                                                <td><?php echo @$value['s_gender'];?></td>
                                                <td><?php 
                                                    if(empty($value['s_phone'])){echo @$value['s_email'];}else{echo @$value['s_phone']."<br/>".@$value['s_email'];}?></td>
                                                <td><?php $b = 0;
                                                    foreach($position as $pKey => $pValue) { 
                                                        @$b++;
                                                        echo $pValue['pos_name']."<br/>";
                                                    }?>
                                                </td>
                                                <td><?php echo $value['coun_en'];?></td>
                                                <td>
                                                    <a href="<?php echo URL.'information/staffprofileviewer/'.$code;?>" title="View Profile"><span class="uk-badge uk-badge-success"><i class="fa fa-eye"></i></span></a>
                                                    <a href="<?php echo URL.'user/createloginandmenuofuser/'.$code;?>" title="Create Password"><span class="uk-badge uk-badge-primary"><i class="fa fa-key"></i></span></a>
                                                    
                                                </td>
                                            </tr>
                                            <?php }?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </li>
                                	<!--start provisionary blog-->
                                <!-- tab 3
                                <li>
                                    <ul class="md-list">
                                    </ul>
                                    <div class="md-card uk-margin-medium-bottom">
                                        <div class="md-card-content">
                                            
                                        </div>
                                    </div>
                                </li>-->
                            </ul>
                        </div>
                </div>
            </div>
            <!-- end blog tab-->
			<!-- end: PAGE CONTENT-->
            </div>
        </div>
        <!-- end: PAGE -->
        <?php }?>
    </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->