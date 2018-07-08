						<script language="javascript" type="text/javascript">
							window.onload = function() {
								document.AllFORM.arttitle.focus();
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
                                    <span>News</span>
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
										if($_GET['message'] == 'existNews'){?>
											<div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> News article is already exist!
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
                                            <i class='fa fa-info-circle'></i> News has created successful!
                                            </div>	
										<?php
                                        	}else if($_GET['message'] == 'successUpdated'){?>
											<div class="alert alert-info">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class='fa fa-info-circle'></i> News article has updated successful!
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
                                            <a href="<?php echo URL.'pagemanager/newsarticlelist';?>" style="color:#fff;"> <i class="fa fa-list"></i> List</a>
                                            <a href="" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="" class="reload"> </a>
                                            <a href="" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form class="form-horizontal" role="form" name="AllFORM" action="<?php echo URL.'pagemanager/newsAddSave'?>" method="POST" enctype="multipart/form-data">
                                            <div class="form-body">
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label">Cover Photo</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="filephoto" required>
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label" style="font-family:KhmerOS;">ឈ្មោះអត្ថបទព័ត៌មាន (ខ្មែរ)<span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="ឈ្មោះអត្ថបទព័ត៌មាន" name="arttitle" required style="font-family:KhmerOS;">
                                                        <input type="hidden" class="form-control" name="user_id" value="<?php echo Session::get('user_id');?>">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">News Article Title (EN) <span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Enter Article Title" name="arttitleen" required>
                                                        <input type="hidden" class="form-control" name="cblLang" value="1">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <!--
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Pin to Top</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="cbltop">
                                                            <option value="">.:: Optional ::.</option>
                                                            <option value="1">Pin to Top</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Language</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="cblLang">
                                                            <option value="1">Khmer</option>
                                                            <option value="2">English</option>
                                                        </select>
                                                    </div>
                                                </div>-->
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Status</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="cblstatus">
                                                            <option value="1">Active</option>
                                                            <option value="0">Disable</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">News Article in Menu</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="cblinmenu">
                                                        	<option value="">.:: Select Menu ::.</option>
                                                            <?php
															$m = "News";
															foreach($this->MenuList as $ml){?>
															<option value="<?php echo $ml['mid'];?>" <?=$m==$ml['mnameen']?'selected':''?>><?php echo $ml['mname'];?></option>
															<?php
                                                            }
															?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-6" style="font-family:KhmerOS;">ពិពណ៌នា (ខ្មែរ) (Use 3 minus to break <b>---</b>)</label><br/>
                                                    <div class="col-md-12">
                                                        <textarea class="contentarea form-control" rows="3" name="des"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-6">Description (Use 3 minus to break <b>---</b>)</label><br/>
                                                    <div class="col-md-12">
                                                        <textarea class="contentarea form-control" rows="3" name="desen"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Save</button>
                                                        <button type="reset" class="btn default"><i class="fa fa-refresh"></i> Reset</button>
                                                        <a class="btn default" href="<?php echo URL.'pagemanager/newsarticlelist';?>"><i class="fa fa-list"></i> List</a>
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
			