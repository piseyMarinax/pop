						<script language="javascript" type="text/javascript">
							window.onload = function() {
								document.AllFORM.uname.focus();
							}
						</script>
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo URL.'pagemanager';?>">Dashboard</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Users</span>
                                </li>
                            </ul>
                            <div class="page-toolbar">
                                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                                    <i class="icon-calendar"></i>&nbsp;
                                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> 
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                        <div class="row">
                            
                            <!-- start form -->
                            <div class="col-md-12 ">
                                <!-- BEGIN SAMPLE FORM PORTLET-->
                                <!--<div class="portlet light bordered">-->
                                <?php
									if(isset($_GET['message'])){
										if($_GET['message'] == 'existMenu'){?>
											<div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> Data is already exist!
                                            </div>
										<?php
                                        	}else if($_GET['message'] == 'existUrl'){?>
											<div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> Data is already exist!
                                            </div>
										<?php
                                        	}else if($_GET['message'] == 'empty'){?>
											<div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> Field * is required!
                                            </div>	
										<?php
                                        	}else if($_GET['message'] == 'success'){?>
											<div class="alert alert-info">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> Data has created successful!
                                            </div>	
										<?php
                                        	}else if($_GET['message'] == 'successUpdated'){?>
											<div class="alert alert-info">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> Data has updated successful!
                                            </div>	
										<?php
                                        	}else if($_GET['message'] == 'nophoto'){?>
											<div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> Invalid Picture!
                                            </div>	
										<?php
                                        	}else if($_GET['message'] == 'Error'){?>
											<div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> Oooph! Maybe something went wrong!
                                            </div>	
										<?php
                                        	}
										}
								?>
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-plus"></i> Add New </div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="" class="reload"> </a>
                                            <a href="" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form class="form-horizontal" role="form" name="AllFORM" action="<?php echo URL.'pagemanager/useradd'?>" method="POST" enctype="multipart/form-data">
                                            <div class="form-body">
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label">Upload default Photo</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="filephoto">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label">Name <span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="បញ្ចូលឈ្មោះ" name="uname" required>
                                                        <input type="hidden" class="form-control" name="user_id" value="<?php echo Session::get('user_id');?>">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">E-mail <span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="email" class="form-control" placeholder="eg. example@domain.com" name="uemail">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Your Password <span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="password" class="form-control" placeholder="" name="upwd" required>
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Status</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="cblstatus">
                                                            <option value="1">Active</option>
                                                            <option value="0">Disable</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Save</button>
                                                        <button type="reset" class="btn default"><i class="fa fa-refresh"></i> Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-list"></i> Data List </div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="" class="reload"> </a>
                                            <a href="" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                    	<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1_2" style="overflow-x: auto;">
                                            <thead>
                                                <tr class="bg-info">
                                                	<th class="hidden"></th>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>E-mail</th>
                                                    <th>Photo</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php
													@$a = 0;
													foreach($this->userlist as $key => $value) {
													@$a++;
												?>
                                                <tr>
                                                	<td class="hidden"></td>
                                                    <td><?php echo $a;?></td>
                                                    <td><?php echo $value['name'];?></td> 
                                                    <td><?php echo $value['email'];?></td>
                                                    <td><?php if(!empty($value['s_photo'])){?>
														<img src="<?php echo URL.'public/img/'.$value['s_photo'];?>" width="100">
														<?php
                                                        }else{echo "No Picture";}?>
                                                    </td>
                                                    <td><?php if($value['log_active'] == 1){?><span class="label label-sm label-info"> Active </span><?php }else if($value['log_active'] == 0){?><span class="label label-sm label-danger"> Disable </span><?php }?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-right" role="menu">
                                                                <li>
                                                                    <a class="font-yellow" href="<?php echo URL.'pagemanager/useredit/'.@$value['user_id'].'&userprofilelog';?>">
                                                                        <i class="font-yellow fa fa-edit"></i> Edit Profile</a>
                                                                </li>
                                                                <li>
                                                                    <a class="font-blue" href="<?php echo URL.'pagemanager/pwdchange/'.@$value['user_id'].'&userpwdchangelog';?>">
                                                                        <i class="font-blue fa fa-key"></i> Change Password </a>
                                                                </li>
                                                                <i class="divider"></i>
                                                                <li>
                                                                    <a class="font-red" onclick="onDelete(4)">
                                                                        <i class="font-red fa fa-trash"></i> Delete </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td> 
                                                </tr>
                                                <?php
													}
												?>
                                            </tbody>
                                        </table>
                                    </div>
                                 </div>
                                <!-- END SAMPLE FORM PORTLET-->
                            </div>
                            <!-- end form-->
                        </div>
                        <div class="clearfix"></div>
                        
                        
                        <!-- END DASHBOARD STATS 1-->
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
			