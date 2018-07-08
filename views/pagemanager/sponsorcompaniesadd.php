						<script language="javascript" type="text/javascript">
							window.onload = function() {
								document.frmsponsor.comname.focus();
							}
							//check if any input empty
							function check()
							{
								if (!frmsponsor.comnameen.value)
								{
									alert ("Please Enter a Company Name");
									return (false);
								}
								return (true);
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
                                    <span>Sponsor/Companies</span>
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
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-plus"></i> Add New </div>
                                        <div class="tools">
                                        	<a href="<?php echo URL.'pagemanager/sponsorcompanieslist';?>" style="color:#fff;"> <i class="fa fa-list"> </i> <strong>SP/Com List</strong></a>
                                            <a href="" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="" class="reload"> </a>
                                            <a href="" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form class="form-horizontal" role="form" id ="frmsponsor" name="frmsponsor" action="<?php echo URL.'pagemanager/companiesworksponsorsave'?>" id="form_addmenu" method="POST" enctype="multipart/form-data">
                                            <div class="form-body">
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label"></label>
                                                    <div class="col-md-9">
                                                       <b> Note: <span style="color:red;">*</span> is required field ! </b>
                                                    </div>
                                                </div>                                            
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label">Upload Logo <span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="filephoto" required>
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label" style="font-family:KhmerOS;">ឈ្មោះក្រុមហ៊ុន (ខ្មែរ)</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="បញ្ចូលឈ្មោះក្រុមហ៊ុន" name="comname" style="font-family:KhmerOS;">
                                                        <input type="hidden" class="form-control" name="user_id" value="<?php echo Session::get('user_id');?>">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Company Name (EN)<span style="color:red;"> * </span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Enter Company name" name="comnameen" required>
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">FB/Website</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Enter FB/Website" name="comweb">
                                                        <span class="help-block">  </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Ordering </label>
                                                    <div class="col-md-9">
                                                        <input type="number" class="form-control" placeholder="Enter ordering number (Eg. 1, 2, 3)" name="txtordering">
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
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Company as</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="cbxcomtype">
                                                            <?php
															foreach($this->comlisttype as $lt){?>
															<option value="<?php echo $lt['spid'];?>"><?php echo $lt['spname'];?></option>
															<?php
                                                            }
															?>
                                                            <option value="">.:: Select Company as ::.</option>
                                                        </select>
                                                    </div>
                                                </div><!--
                                                <div class="form-group">
                                                    <label class="col-md-6">Description (Use 3 minus to break <b>---</b>)</label><br/>
                                                    <div class="col-md-12">
                                                        <textarea class="contentarea form-control" rows="3" name="des"></textarea>
                                                    </div>
                                                </div>-->
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn blue" id="btnSave" name="btnSave" value="save" onclick="check()"><i class="fa fa-floppy-o"></i> Save</button>
                                                        <a class="btn btn-danger" href="<?php echo URL;?>pagemanager/sponsorcompanieslist"><i class="fa fa-times"></i> Cancel </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="errorMsg" style="margin:5px 5px;">
                                                                
                                        </div><br/>
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
			