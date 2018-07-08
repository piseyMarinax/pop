						<!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo URL.'pagemanager';?>">Dashboard</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Menu List</span>
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
                                            <i class="fa fa-list"></i> Data List </div>
                                        <div class="tools">
                                        	<a href="<?php echo URL.'pagemanager/menu';?>" style="color:#fff;"> <i class="fa fa-plus"></i> Add New</a>
                                            <a href="" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="" class="reload"> </a>
                                            <a href="" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table id="example" class="ui celled table" cellspacing="0" width="100%" style="overflow-x: auto;">
                                            <thead>
                                                <tr class="bg-info">
                                                	<th class="hidden"></th>
                                                    <th>No</th>
                                                    <th>Action</th>
                                                    <th>Order</th>
                                                    <th>Menu (KH)</th>
                                                    <th>Menu (EN)</th>
                                                    <th>Menu URL</th>
                                                    <th>Status</th>
                                                    <th>Detail</th>
                                                    <th>Picture</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php
													@$a = 0;
													foreach($this->MenuList as $key => $value) {
													@$a++;$m_id = $value['mid']; $mname=$value['mname'];
												?>
                                                <tr>
                                                	<td class="hidden"></td>
                                                    <td><?php echo $a;?></td> 
                                                    <td>
                                                        <a class="font-white btn btn-primary" href="<?php echo URL.'pagemanager/menuedit/'.@$value['mid'].'/?menuedit';?>" style="width:70px; margin:3px;"><i class="font-white fa fa-edit"></i> Edit </a>
                                                        <a class="delete_ font-white btn btn-danger" data-id="<?php echo @$m_id; ?>" href="javascript:void(0)" data-value="<?php echo $mname;?>" style="width:70px; margin:3px;"><i class="glyphicon glyphicon-trash"></i> Del</a>
                                                    </td>
                                                    <td><?php echo $value['ordering'];?></td>
                                                    <td style="font-family:KhmerOS;"><?php echo $value['mname'];?></td>
                                                    <td><?php echo $value['mnameen'];?></td>
                                                    <td><?php echo $value['murl'];?></td>
                                                    <td><?php if($value['mstatus'] == 1){?><span class="label label-sm label-info"> Active </span><?php }else if($value['mstatus'] == 0){?><span class="label label-sm label-danger"> Disable </span><?php }?></td> 
                                                    <td><?php echo $value['mdes'];?></td>
                                                    <td><?php if(!empty($value['mphoto'])){?>
														<img src="<?php echo URL.'source/menu/'.$value['mphoto'];?>" width="100">
														<?php
                                                        }else{echo "No Picture";}?>
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
            <!-- script delete data -->
<script src="<?php echo URL;?>config/bootstrap_del_update/jquery-1.12-0.min.js"></script>
<script src="<?php echo URL;?>config/bootstrap_del_update/js/bootstrap.min.js"></script>
<script src="<?php echo URL;?>config/bootstrap_del_update/bootbox.min.js"></script>

<script>
	$(document).ready(function(){
		
		$('.delete_').click(function(e){
			
			e.preventDefault();
			
			var mid = $(this).attr('data-id');
			var mnam = $(this).attr('data-value');
			var parent = $(this).parent("td").parent("tr");
			
			bootbox.dialog({
			  message: "Are you sure you want to Delete ( <b>"+ mnam +"</b> ) ?",
			  title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
			  buttons: {
				success: {
				  label: "No",
				  className: "btn-success",
				  callback: function() {
					 $('.bootbox').modal('hide');
				  }
				},
				danger: {
				  label: "Delete!",
				  className: "btn-danger",
				  callback: function() {
					  
					  /*
					  
					  using $.ajax();
					  
					  $.ajax({
						  
						  type: 'POST',
						  url: 'delete.php',
						  data: 'delete='+mid
						  
					  })
					  .done(function(response){
						  
						  bootbox.alert(response);
						  parent.fadeOut('slow');
						  
					  })
					  .fail(function(){
						  
						  bootbox.alert('Something Went Wrog ....');
						  						  
					  })
					  */
					  
					  
					  $.post('<?php echo URL.'config/bootstrap_del_update/'?>mdelete.php', { 'mdelete':mid })
					  .done(function(response){
						  //bootbox.alert(response);
						  parent.fadeOut('slow');
					  })
					  .fail(function(){
						  bootbox.alert('Something Went Wrog ....');
					  })
					  					  
				  }
				}
			  }
			});
			
			
		});
		
	});
</script>
            <!--end script delete data -->
			