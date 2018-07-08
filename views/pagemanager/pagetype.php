						<script language="javascript" type="text/javascript">
							window.onload = function() {
								document.pagetypeform.pagename.focus();
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
                                    <span>Page Type</span>
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
										if($_GET['message'] == 'exist'){?>
											<div class="alert alert-danger">
                                            <i class='fa fa-info-circle'></i> Page Name is already exist!
                                            </div>
										<?php
                                        	}else if($_GET['message'] == 'success'){?>
											<div class="alert alert-info">
                                            <i class='fa fa-info-circle'></i> Page Name has created successful!
                                            </div>	
										<?php
                                        	}else if($_GET['message'] == 'successUpdated'){?>
											<div class="alert alert-info">
                                            <i class='fa fa-info-circle'></i> Page Name has updated successful!
                                            </div>	
										<?php
                                        	}else if($_GET['message'] == 'Error'){?>
											<div class="alert alert-info">
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
                                        <form class="form-horizontal" role="form" name="pagetypeform" action="<?php echo URL.'pagemanager/pagetypeAdd'?>" method="POST">
                                            <div class="form-body">
                                            	<div class="form-group">
                                                    <label class="col-md-3 control-label">Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Enter the page name" name="pagename" value="" required>
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
                                                    <label class="col-md-3 control-label">Description</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control description" rows="3" name="des"></textarea>
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
                                    	<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1_2">
                                            <thead>
                                                <tr class="bg-info">
                                                	<th class="hidden"></th>
                                                    <th>No</th>
                                                    <th>Page Name</th>
                                                    <th>Status</th>
                                                    <th>Detail</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php
													@$a = 0;
													foreach($this->pagetypeList as $key => $value) {
													@$a++;
												?>
                                                <tr>
                                                	<td class="hidden"></td>
                                                    <td><?php echo $a;?></td> 
                                                    <td><?php echo $value['pt_name'];?></td> 
                                                    <td><?php if($value['pt_status'] == 1){?><span class="label label-sm label-info"> Active </span><?php }else if($value['pt_status'] == 0){?><span class="label label-sm label-danger"> Disable </span><?php }?></td> 
                                                    <td><?php echo $value['pt_des'];?></td> 
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-right" role="menu">
                                                                <li>
                                                                    <a class="font-yellow" href="<?php echo URL.'pagemanager/pagetypeedit/'.@$value['ptid'];?>">
                                                                        <i class="font-yellow fa fa-edit"></i> Edit </a>
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
			