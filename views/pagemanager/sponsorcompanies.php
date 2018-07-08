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
                                    <span>Sponsorship/Companies List</span>
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
                                            <i class="fa fa-list"></i> Data List </div>
                                        <div class="tools">
                                        	<a href="<?php echo URL.'pagemanager/sponsorcompaniesadd';?>" style="color:#fff;"> <i class="fa fa-plus"></i> Add New</a>
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
                                                    <th>Com Name (KH)</th>
                                                    <th>Com Name (EN)</th>
                                                    <th>Com URL</th>
                                                    <th>Status</th>
                                                    <th>Detail</th>
                                                    <th>Logo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php
													@$a = 0;
													foreach($this->spcompanieslist as $key => $value) {
													@$a++;$s_id = $value['spcid']; $mname=$value['spcnameen'];
												?>
                                                <tr>
                                                	<td class="hidden"></td>
                                                    <td><?php echo $a;?></td> 
                                                    <td>
                                                        <a class="font-white btn btn-primary" href="<?php echo URL.'pagemanager/chsponsor/'.@$value['spcid'].'/?companiesedit';?>" style="width:70px; margin:3px;"><i class="font-white fa fa-edit"></i> Edit </a>
                                                        <a class="delete_ font-white btn btn-danger" data-id="<?php echo @$s_id; ?>" href="javascript:void(0)" data-value="<?php echo $mname;?>" style="width:70px; margin:3px;"><i class="glyphicon glyphicon-trash"></i> Del</a>
                                                    </td>
                                                    <td><?php echo $value['spcordering'];?></td>
                                                    <td style="font-family:KhmerOS;"><?php echo $value['spcnamekh'];?></td>
                                                    <td><?php echo $value['spcnameen'];?></td>
                                                    <td><?php echo $value['spclink'];?></td>
                                                    <td><?php if($value['spcstatus'] == 1){?><span class="label label-sm label-info"> Active </span><?php }else if($value['spcstatus'] == 0){?><span class="label label-sm label-danger"> Disable </span><?php }?></td> 
                                                    <td><?php echo $value['spcdetail'];?></td>
                                                    <td><?php if(!empty($value['spclogo'])){?>
														<img src="<?php echo URL.'public/partnership/'.$value['spclogo'];?>" width="100">
														<?php
                                                        }else{echo "No Logo";}?>
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
			
			var sid = $(this).attr('data-id');
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
					  
					  
					  $.post('<?php echo URL.'config/bootstrap_del_update/'?>spdelete.php', { 'spdelete':sid })
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
			