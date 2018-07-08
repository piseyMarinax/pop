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
                                            <i class='fa fa-info-circle'></i> Menu Name has created successful!
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
                                            <i class="fa fa-refresh"></i>Update New </div>
                                        <div class="tools">
                                            <a href="<?php echo URL.'pagemanager/newsarticlelist';?>" style="color:#fff;"> <i class="fa fa-list"></i> List</a>
                                            <a href="" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="" class="reload"> </a>
                                            <a href="" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form class="form-horizontal" role="form" name="AllFORM" action="<?php echo URL.'pagemanager/newsEditSave'?>" method="POST" enctype="multipart/form-data">
                                            <div class="form-body">
                                            <?php 
												if(!empty($this->newsSingle[0]['articlecover'])){?>
												<div class="form-group">
                                                    <label class="col-md-3 control-label">Uploaded</label>
                                                    <div class="col-md-9">
                                                        <img src="<?php echo URL.'source/news/'.$this->newsSingle[0]['articlecover'];?>" width="200">                                                        
                                                    </div>
                                                </div>	
												<?php
                                                }
												?>
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label">Cover Photo</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="filephoto">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label" style="font-family:KhmerOS;">ឈ្មោះអត្ថបទព័ត៌មាន (ខ្មែរ)<span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Enter Article Title" name="arttitle" value="<?php echo @$this->newsSingle[0]['articletitle'];?>" required>
                                                        <input type="hidden" class="form-control" name="user_id" value="<?php echo Session::get('user_id');?>">
                                                        <input type="hidden" class="form-control" name="artid" value="<?php echo @$this->newsSingle[0]['articleid'];?>">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">News Article Title (EN) <span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Enter Article Title" name="arttitleen" value="<?php echo @$this->newsSingle[0]['articletitleen'];?>" required>
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
                                                        <?php $status = $this->newsSingle[0]['articlestatus'];?>
                                                            <option value="1" <?=$status==1?'selected':''?>> Khmer </option>
                                                            <option value="2" <?=$status==2?'selected':''?>> English </option>
                                                        </select>
                                                    </div>
                                                </div>-->
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Status</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="cblstatus">
                                                            <?php $status = $this->newsSingle[0]['articlestatus'];?>
                                                            <option value="1" <?=$status==1?'selected':''?>> Active </option>
                                                            <option value="0" <?=$status==0?'selected':''?>> Disable </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">News Article in Menu</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="cblinmenu">
                                                        	<option value="">.:: Select Menu ::.</option>
                                                            <?php
															$m = $this->newsSingle[0]['articleatmenuid'];
															foreach($this->MenuList as $ml){?>
															<option value="<?php echo $ml['mid'];?>" <?=$m==$ml['mid']?'selected':''?>><?php echo $ml['mnameen'];?></option>
															<?php
                                                            }
															?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-6" style="font-family:KhmerOS;">ពិពណ៌នា (ខ្មែរ) (Use 3 minus to break <b>---</b>)</label><br/>
                                                    <div class="col-md-12">
                                                        <textarea class="contentarea form-control" rows="3" name="des"><?php echo @$this->newsSingle[0]['articledetail'];?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-6">Description (Use 3 minus to break <b>---</b>)</label><br/>
                                                    <div class="col-md-12">
                                                        <textarea class="contentarea form-control" rows="3" name="desen"><?php echo @$this->newsSingle[0]['articledetailen'];?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green"><i class="fa fa-refresh"></i> Update</button>
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
			