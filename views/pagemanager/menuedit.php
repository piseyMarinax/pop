						<script language="javascript" type="text/javascript">
							window.onload = function() {
								document.AllFORM.menuname.focus();
							}
						</script>
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo URL.'pagemanager';?>">Dashboard</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li><a href="<?php echo URL.'pagemanager/menuList';?>">Menu</a> <i class="fa fa-circle"></i> </li>
                                <li><span>Update</span></li>
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
                                            <i class='fa fa-info-circle'></i> Menu Name is already exist!
                                            </div>
										<?php
                                        	}else if($_GET['message'] == 'existUrl'){?>
											<div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> Menu URL is already exist!
                                            </div>
										<?php
                                        	}else if($_GET['message'] == 'empty'){?>
											<div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> Field is required!
                                            </div>	
										<?php
                                        	}else if($_GET['message'] == 'success'){?>
											<div class="alert alert-info">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> Menu Name has created successful!
                                            </div>	
										<?php
                                        	}else if($_GET['message'] == 'successUpdated'){?>
											<div class="alert alert-info">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> Page Name has updated successful!
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
                                            <i class="fa fa-refresh"></i> Menu Update </div>
                                        <div class="tools">
                                            <a href="" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="" class="reload"> </a>
                                            <a href="" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form class="form-horizontal" role="form" name="AllFORM" action="<?php echo URL.'pagemanager/menuEditSave'?>" method="POST" enctype="multipart/form-data">
                                            <div class="form-body">
                                            <?php 
												if(!empty($this->menuSingle[0]['mphoto'])){?>
												<div class="form-group">
                                                    <label class="col-md-3 control-label">Uploaded</label>
                                                    <div class="col-md-9">
                                                        <img src="<?php echo URL.'source/menu/'.$this->menuSingle[0]['mphoto'];?>" width="100">                                                        
                                                    </div>
                                                </div>	
												<?php
                                                }
											?>
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label">Upload default Photo</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="filephoto">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label">Menu Name <span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="បញ្ចូលឈ្មោះម៉ឺនុយ" name="menuname" required value="<?php echo @$this->menuSingle[0]['mname'];?>" style="font-family:KhmerOS;">
                                                        <input type="hidden" class="form-control" name="mid" required value="<?php echo @$this->menuSingle[0]['mid'];?>">
                                                        <input type="hidden" class="form-control" name="user_id" value="<?php echo Session::get('user_id');?>">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Menu Name (EN)<span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Enter Menu name" name="menunameen" value="<?php echo @$this->menuSingle[0]['mnameen'];?>">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Menu URL <span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Enter Menu URL (No Space, Eg. home)" name="menuurl" required value="<?php echo @$this->menuSingle[0]['murl'];?>">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Ordering </label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Enter ordering number (Eg. 1, 2, 3)" name="txtordering" required value="<?php echo @$this->menuSingle[0]['ordering'];?>">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Status</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="cblstatus">
                                                            <?php $status = $this->menuSingle[0]['mstatus'];?>
                                                            <option value="1" <?=$status==1?'selected':''?>> Active </option>
                                                            <option value="0" <?=$status==0?'selected':''?>> Disable </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Page Type</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="cblpagetype">
                                                        <?php $pid = $this->menuSingle[0]['mpagetypeid'];?>
                                                        	<option value="">.:: Select Page Type ::.</option>
                                                            <?php
															foreach($this->PageListMenu as $plm){?>
															<option value="<?php echo $plm['ptid'];?>" <?=$pid==$plm['ptid']?'selected':''?>><?php echo $plm['pt_name'];?></option>
															<?php
                                                            }
															?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-6" style="font-family:KhmerOS;">ពិពណ៌នា (ខ្មែរ) (Use 3 minus to break <b>---</b>)</label><br/>
                                                    <div class="col-md-12">
                                                        <textarea class="contentarea form-control" rows="3" name="deskh"><?php echo @$this->menuSingle[0]['mdeskh'];?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-6">Description (Use 3 minus to break <b>---</b>)</label><br/>
                                                    <div class="col-md-12">
                                                        <textarea class="contentarea form-control" rows="3" name="des"><?php echo @$this->menuSingle[0]['mdes'];?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green"><i class="fa fa-pencil"></i>  Save Change</button>
                                                        <a class="btn default" href="<?php echo URL.'pagemanager/menu';?>"><i class="fa fa-list"></i> Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
			