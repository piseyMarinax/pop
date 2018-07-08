// JavaScript Document

$('document').ready(function()
{ 
    //Department
     /* validation */
	 $("#form_dept").validate({
		 rules:
		 {
			 deptname: {
				 required: true,
				 minlength: 2
			 },
		 },
		 messages:
		 {
			deptname: ""
		 },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   /* form submit */
	   function submitForm()
	   {		
			var data = $("#form_dept").serialize();
				$.ajax({
				type : 'POST',
				url  : 'http://'+document.domain+'/information/addDept',
				data : data,
				beforeSend: function()
				{
					$(".errorMsg").fadeOut(1000, function(){
																	
						$(".errorMsg").html('<div class="uk-alert uk-alert-info" data-uk-alert> <img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp;Uploading data </div>');	});	
					
				},
				success :  function(response)
					{
					   var response = JSON.parse(response);
						if(response.result)
						{							
							$(".errorMsg").fadeIn(4000, function(){
									
								$(".errorMsg").html('<div class="uk-alert uk-alert-success" data-uk-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+' </div>');
										
								//$("#btn_dept").html('Save &nbsp;<i class="fa fa-arrow-circle-right"></i>');
								
								setTimeout( 'window.location.href = "dept";', 4000);
								
							});
						}else if(!response.result){
							$(".errorMsg").fadeIn(4000, function(){	
							  $(".errorMsg").html('<div class="uk-alert uk-alert-danger" data-uk-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+'</div>');
								
							});
						}
				   }
			});
			return false;
		}
	   /* form submit */
    //end Department
	
	$("#form_adddocstaff").on('submit',(function(e) {
		e.preventDefault();				   
			$.ajax({
				url: "http://"+document.domain+"/information/staffdocsave",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				beforeSend : function()
				{
					$(".errorMsg").fadeOut(1000, function(){																	
						$(".errorMsg").html('<div class="uk-alert uk-alert-info" data-uk-alert> <img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; Validating and Uploading data </div>');	
					});
				},
				success: function(response)
				{
					var response = JSON.parse(response);
					if(response.result)
					{
						$(".errorMsg").fadeIn(3000, function(){
							$(".errorMsg").html('<div class="uk-alert uk-alert-success" data-uk-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+' </div>');
							setTimeout( 'window.location.href = "../../information";', 3000);									
						});
					}else if(!response.result){
						$(".errorMsg").fadeIn(3000, function(){	
							$(".errorMsg").html('<div class="uk-alert uk-alert-danger" data-uk-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+'</div>');
						});
					}
				},
				error: function(e) 
				{
					$(".errorMsg").html(e).fadeIn();
				} 	        
		   });
	}));
	//end add employee's document
	//=======================menu blog=========================
	
	//start adding menu
		
	 $("#form_addmenu").on('submit',(function(e) {
		e.preventDefault();				   
			$.ajax({
				url: "http://"+document.domain+"/pagemanager/menuAdd",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				beforeSend : function()
				{
					$(".errorMsg").fadeOut(1000, function(){																	
						$(".errorMsg").html('<div class="alert alert-info" data-alert> <img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; Validating and Uploading data </div>');	
					});
				},
				success: function(response)
				{
					var response = JSON.parse(response);
					if(response.result)
					{
						$(".errorMsg").fadeIn(3000, function(){
							$(".errorMsg").html('<div class="alert alert-success" data-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+' </div>');
							setTimeout( 'window.location.href = "../../pagemanager/menuList";', 3000);									
						});
					}else if(!response.result){
						$(".errorMsg").fadeIn(3000, function(){	
							$(".errorMsg").html('<div class="alert alert-danger" data-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+'</div>');
						
						});
					}
				},
				error: function(e) 
				{
					$(".errorMsg").html(e).fadeIn();
				} 	        
		   });
	}));
	//end adding menu
	//start editing menu
	/* validation */
	 $("#form_editmenu").validate({
		 rules:
		 {
			 menuname: {
				 required: true,
				 minlength: 2
			 },
		 },
		 messages:
		 {
			menuname: "",
		 },
	   submitHandler: submitEditmenu	
       });  
	   /* end validation */
	   /* starting form submit */
	   function submitEditmenu()
	   {		
			var data = $("#form_editmenu").serialize();
				$.ajax({
				type : 'POST',
				url  : 'http://'+document.domain+'/menu/addEditmenu',
				data : data,
				beforeSend: function()
				{
					$(".errorMsg").fadeOut(1000, function(){
																	
						$(".errorMsg").html('<div class="uk-alert uk-alert-info" data-uk-alert> <img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; Validating and Updating data </div>');	});	
					
				},
				success :  function(response)
					{
					   var response = JSON.parse(response);
						if(response.result)
						{							
							$(".errorMsg").fadeIn(4000, function(){
									
								$(".errorMsg").html('<div class="uk-alert uk-alert-success" data-uk-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+' </div>');
								
								setTimeout( 'window.location.href = "../../menu";', 4000);
								
							});
						}else if(!response.result){
							$(".errorMsg").fadeIn(4000, function(){	
							  $(".errorMsg").html('<div class="uk-alert uk-alert-danger" data-uk-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+'</div>');
								
							});
						}
				   }
			});
			return false;
		}
		//end editing menu
		
		//start adding Sub menu
	/* validation */
	 $("#form_addsubmenu").validate({
		 rules:
		 {
			 menuname: {
				 required: true,
				 minlength: 2
			 },
		 },
		 messages:
		 {
			menuname: "",
		 },
	   submitHandler: submitAddsubmenu	
       });  
	   /* end validation */
	   /* starting form submit */
	   function submitAddsubmenu()
	   {		
			var data = $("#form_addsubmenu").serialize();
				$.ajax({
				type : 'POST',
				url  : 'http://'+document.domain+'/menu/addEditSubmenu',
				data : data,
				beforeSend: function()
				{
					$(".errorMsg").fadeOut(1000, function(){
																	
						$(".errorMsg").html('<div class="uk-alert uk-alert-info" data-uk-alert> <img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; Validating and Saving data </div>');	});	
					
				},
				success :  function(response)
					{
					   var response = JSON.parse(response);
						if(response.result)
						{							
							$(".errorMsg").fadeIn(4000, function(){
									
								$(".errorMsg").html('<div class="uk-alert uk-alert-success" data-uk-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+' </div>');
								
								setTimeout( 'window.location.href = "../menu/createnewsubmenu";', 4000);
								
							});
						}else if(!response.result){
							$(".errorMsg").fadeIn(4000, function(){	
							  $(".errorMsg").html('<div class="uk-alert uk-alert-danger" data-uk-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+'</div>');
								
							});
						}
				   }
			});
			return false;
		}
	//end adding Sub menu
	//Editing sub menu
	/* validation */
	 $("#form_editsubmenu").validate({
		 rules:
		 {
			 menuname: {
				 required: true,
				 minlength: 2
			 },
		 },
		 messages:
		 {
			menuname: "",
		 },
	   submitHandler: submitEditsubmenu	
       });  
	   /* end validation */
	   /* starting form submit */
	   function submitEditsubmenu()
	   {		
			var data = $("#form_editsubmenu").serialize();
				$.ajax({
				type : 'POST',
				url  : 'http://'+document.domain+'/menu/addEditSubmenu',
				data : data,
				beforeSend: function()
				{
					$(".errorMsg").fadeOut(1000, function(){
																	
						$(".errorMsg").html('<div class="uk-alert uk-alert-info" data-uk-alert> <img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; Validating and Updating data </div>');	});	
					
				},
				success :  function(response)
					{
					   var response = JSON.parse(response);
						if(response.result)
						{							
							$(".errorMsg").fadeIn(4000, function(){
									
								$(".errorMsg").html('<div class="uk-alert uk-alert-success" data-uk-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+' </div>');
								
								setTimeout( 'window.location.href = "../../menu/subofmenu";', 4000);
								
							});
						}else if(!response.result){
							$(".errorMsg").fadeIn(4000, function(){	
							  $(".errorMsg").html('<div class="uk-alert uk-alert-danger" data-uk-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+'</div>');
								
							});
						}
				   }
			});
			return false;
		}
		//end editing sub menu
	
	//======================end menu blog======================
	//================ starting Insert Sponsor or Company Work With ========
	$("#frmsponsor").on('submit',(function(e) {
		e.preventDefault();				   
			$.ajax({
				url: "http://"+document.domain+"/pagemanager/companiesworksponsorsave",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				beforeSend : function()
				{
					$(".errorMsg").fadeOut(1000, function(){	
						$("#btnSave").html('<img src="/assets/ajax_login/loader-spinner-white.gif" width="25" /> &nbsp; Saving');															
						$(".errorMsg").html('<div class="alert alert-info" data-alert> <img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; Validating and Saving data </div>');	
					});
				},
				success: function(response)
				{
					var response = JSON.parse(response);
					if(response.result)
					{
						$(".errorMsg").fadeIn(3000, function(){
							$("#btnSave").html('<i class="fa fa-floppy-o"></i> &nbsp; Save');
							$(".errorMsg").html('<div class="alert alert-success" data-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+' </div>');
							setTimeout( 'window.location.href = "../../pagemanager/sponsorcompanieslist";', 3000);									
						});
					}else if(!response.result){
						$(".errorMsg").fadeIn(3000, function(){	
							$("#btnSave").html('<i class="fa fa-floppy-o"></i> &nbsp; Save');
							$(".errorMsg").html('<div class="alert alert-danger" data-alert>  &nbsp;'+response.message+'</div>');
						
						});
					}
				},
				error: function(e) 
				{
					$(".errorMsg").html(e).fadeIn();
				} 	        
		   });
	}));
	
	//================ end Insert Sponsor or Company Work With =============
	//====================start blog user login for system=============
	/* validation */
	 $("#form_roleuserpwd").validate({
		 rules:
		 {
			 su_pass: {
				 required: true,
				 minlength: 4
			 },
		 },
		 messages:
		 {
			su_pass: "",
		 },
	   submitHandler: form_roleuserpwdcreate	
       });  
	   /* end validation */
	   /* starting form submit */
	   function form_roleuserpwdcreate()
	   {		
			var data = $("#form_roleuserpwd").serialize();
				$.ajax({
				type : 'POST',
				url  : 'http://'+document.domain+'/user/createpwduser',
				data : data,
				beforeSend: function()
				{
					$(".errorMsg").fadeOut(1000, function(){
																	
						$(".errorMsg").html('<div class="uk-alert uk-alert-info" data-uk-alert> <img src="/assets/ajax_login/loader-spinner-white.gif" width="24"/> &nbsp; Validating and Creating user password and menu </div>');	});	
					
				},
				success :  function(response)
					{
					   var response = JSON.parse(response);
						if(response.result)
						{							
							$(".errorMsg").fadeIn(4000, function(){
									
								$(".errorMsg").html('<div class="uk-alert uk-alert-success" data-uk-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+' </div>');
								
								setTimeout( 'window.location.href = "../../user";', 3000);
								
							});
						}else if(!response.result){
							$(".errorMsg").fadeIn(3000, function(){	
							  $(".errorMsg").html('<div class="uk-alert uk-alert-danger" data-uk-alert> <i class="fa fa-info-circle"></i> &nbsp;'+response.message+'</div>');
								
							});
						}
				   }
			});
			return false;
		}
	
	//====================End blog user login for system===============
    
});
