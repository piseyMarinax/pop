				<?php
					@include('config.php');
					@include('dbloaded.php');
				?>
                <div style="float: left; width:50%;">
                    <label style="font-size: 14px;font-family: Kh-Battambang !important;">ជ្រើសរើស ស្រុក ខណ្ឌ</label>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <select name="district_list" class="form-control" id="district_dropdown" style="padding: 5px;width: 99%;font-size: 13px;font-family: Kh-Battambang !important;">
                            <?php
								@$district = $_POST['district_list'];
								if($selected_city > 0){
									$sql="SELECT dis_id, dis_name, dis_aid, dis_status, dis_ordering 
														FROM quest_district 
														WHERE dis_aid = '".$selected_city."' AND dis_status = 1 ORDER BY dis_ordering ASC";
									$query = $conn->prepare($sql);
									$query->execute();
									  for($i=0; $row = $query->fetch(); $i++){
										  if($district == $row['dis_id']){
											  $Dropdown.="<option value='".$row['dis_id']."' selected>".$row['dis_name']."</option>";
											}else{
												$Dropdown.="<option value='".$row['dis_id']."'>".$row['dis_name']."</option>";
											}
									  }
									  unset($conn); 
									  unset($query);
									  //echo $Dropdown;
								}
							?>
                                <option value=""><?=$selected_city>0?'Select district':'សូមជ្រើសរើស'?></option>
                                <?php echo @$Dropdown;?>
                            </select>
                            <span id="district_loader"></span>
                        </div>
                	</div>