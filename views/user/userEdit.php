<script language="javascript">
	function ifnull()
	{
		var form= document.user;
		if(form.txtname.value==""){
			alert("សូមបញ្ចូលឈ្មោះ! Please enter product name!");
			document.user.txtname.focus();
			return false;
			}
	}
</script>
<script type="text/javascript">
window.onload = function() {
document.user.txtname.focus();
}
</script>
<!-- Widget -->
    <div class="widget">
        <div class="widget-body overflow-x">
            <!-- Table -->
                <div class="row">
                     <div class="col-md-12">
                        <h3>Update User Account</h3>
                    <div class="widget widget-heading-simple widget-body-white">
                    <form action="<?php echo URL;?>user/userUpdate/<?php echo $this->userSingle[0]['user_id']; ?>" method="post" name="user" id="user">
                    <div class="col-md-6">
                        <div class="widget-body">
                            <div class="innerB">
                                <h5 class="heading">Name</h5>
                                <input type="text" id="value2" name="txtname" class="form-control" value="<?php echo $this->userSingle[0]['name'];?>"/>
                            </div>
                            <div class="innerB">
                                <h5 class="heading">User Name</h5>
                                <input type="text" id="value1" name="txtusername" class="form-control" value="<?php echo $this->userSingle[0]['username'];?>"/>
                            </div>
                            <div class="innerB">
                                <h5 class="heading">Password</h5>
                                <input type="password" placeholder="Enter password" id="value1" name="txtpassword" class="form-control"/>
                            </div>
                            <div class="innerB">
                                <h5 class="heading">Phone Contact</h5>
                                <input type="text" id="value1" name="txtphonecontact" class="form-control" value="<?php echo $this->userSingle[0]['Phone'];?>"/>
                            </div>
                            <div class="innerB">
                                <div class="form-group">
                                      <button type="submit" class="btn btn-primary">Update</button>
                                      <a href="../">
                                      <button type="button" class="btn btn-danger">Cancel</button>
                                      </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-md-6 end-->
                    <div class="col-md-6">
                        <div class="widget-body">
                            <div class="innerB">
                                <h5 class="heading">Work At</h5>
                                <select class="selectpicker" name="cbostationid">
                                <option value="<?php echo $this->userSingle[0]['stationid'];?>"><?php echo $this->userSingle[0]['sname'];?></option>
                                <?php foreach($this->StationList as $key => $value){ ?>
                                    <option value="<?php echo $value['stationid']; ?>"><?php echo $value['sname']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="innerB">
                                <h5 class="heading">Permisson to use System</h5>
                                <select class="selectpicker" name="cbopermission">
                                <option value="<?php echo $this->userSingle[0]['code_permission'];?>"><?php echo $this->userSingle[0]['description'];?></option>
                                <?php foreach($this->userPermissionList as $key => $value){ ?>
                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['description']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="innerB">
                                <h5 class="heading">Shift(Time working)</h5>
                                <select class="selectpicker" name="cboshiftid">
                                <option value="<?php echo $this->userSingle[0]['shiftid'];?>"><?php echo $this->userSingle[0]['shiftname']." - ".$this->userSingle[0]['time'];?></option>
                                <?php foreach($this->userShiftWork as $key => $value){ ?>
                                    <option value="<?php echo $value['shiftid']; ?>"><?php echo $value['shiftname']." - ".$value['time']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div><!-- col-md-6 end-->
                    </form>
                    </div>
                    </div><!-- end col-md-12-->
                    <div class="col-md-12">
                        <table class="table table-hover table-striped" id="bootstrap-table">
                            <thead>
                            <tr>
                                <th>Nº</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Station at</th>
                                <th>User Contact</th>
                                <th>Shift of Work</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                                @$a = 0;
                                foreach($this->userList as $key => $value) { 
                                @$a++;		
                            ?>
                            <tr>
                                <td><?php echo @$a; ?></td>
                                <td><?php echo $value['name']; ?></td>
                                <td><?php echo $value['username']; ?></td>
                                <td><?php echo $value['sname']; ?></td>
                                <td><?php echo $value['Phone']; ?></td>
                                <td><?php echo "<b>". $value['shiftname']."</b> -> ".$value['time']; ?></td>
                                <td>
                                    <a href="<?php echo URL.'user/userEdit/'.$value['user_id'];?>">
                                        <button class="btn btn-inverse btn-stroke">Edit</button>
                                    </a>
                                <button class="btn btn-danger btn-stroke">Delete</button>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <!-- // Table END -->
        </div>
    </div>
    <!-- // Widget END -->