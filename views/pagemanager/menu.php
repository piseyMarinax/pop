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
                                <li>
                                    <span>Menu</span>
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
                                            <i class='fa fa-info-circle'></i> Field * is required!
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
                                            <i class='fa fa-info-circle'></i> Menu has updated successful!
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
                                        	<a href="<?php echo URL.'pagemanager/menuList';?>" style="color:#fff;"> <i class="fa fa-list"> </i> <strong>Menu List</strong></a>
                                            <a href="" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="" class="reload"> </a>
                                            <a href="" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form class="form-horizontal" role="form" name="AllFORM" action="<?php echo URL.'pagemanager/menuAdd'?>" id="form_addmenu" method="POST" enctype="multipart/form-data">
                                            <div class="form-body">
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label"></label>
                                                    <div class="col-md-9">
                                                       <b> Note: <span style="color:red;">*</span> is required field ! </b>
                                                    </div>
                                                </div>                                            
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label">Upload default Photo</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="filephoto">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label" style="font-family:KhmerOS;">ឈ្មោះម៉ឺនុយ (ខ្មែរ)<span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="បញ្ចូលឈ្មោះម៉ឺនុយ" name="menuname" required style="font-family:KhmerOS;">
                                                        <input type="hidden" class="form-control" name="user_id" value="<?php echo Session::get('user_id');?>">
                                                        <input type="hidden" class="form-control" name="cblLang" value="1" required>
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Menu Name (EN)<span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Enter Menu name" name="menunameen">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Menu URL <span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Enter Menu URL (No Space, Eg. home)" name="menuurl" required>
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Ordering </label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Enter ordering number (Eg. 1, 2, 3)" name="txtordering" required>
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <!--
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Language</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="cblLang" style="visibility:hidden;">
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
                                                    <label class="col-md-3 control-label">Page Type</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="cblpagetype">
                                                            <?php
															foreach($this->PageListMenu as $plm){?>
															<option value="<?php echo $plm['ptid'];?>"><?php echo $plm['pt_name'];?></option>
															<?php
                                                            }
															?>
                                                            <option value="">.:: Select Page Type ::.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-6" style="font-family:KhmerOS;">ពិពណ៌នា (ខ្មែរ) (Use 3 minus to break <b>---</b>)</label><br/>
                                                    <div class="col-md-12">
                                                        <textarea class="contentarea form-control" rows="3" name="deskh"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-6">Description (Use 3 minus to break <b>---</b>)</label><br/>
                                                    <div class="col-md-12">
                                                        <textarea class="contentarea form-control" rows="3" name="des"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn blue" name="btnSave" value="save"><i class="fa fa-check"></i> Save</button>
                                                        <button type="submit" class="btn green" name="btnSave" value="save_new"> Save New <i class="fa fa-arrow-circle-right"></i></button>
             <!--                                           <button type="reset" class="btn default"><i class="fa fa-refresh"></i> Reset</button>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <br/><br/>
                                        <div class="errorMsg">
                                                                
                                        </div>
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
			