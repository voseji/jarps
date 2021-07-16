@section('content')

@endsection

<!DOCTYPE html>
<html lang="en">



@include('auth/head')

<body>
    <div class="main-wrapper">
    @include('site_name')
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            @include('user_profile')
            
        </div>
     <---------------Menus-------------------->
     @include('admin_menus')
     
        <div class="page-wrapper ">
            <div class="content ">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Create New Candidate</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    @if(session()->has('status'))
   
      

    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session()->get('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
                    <form  action = "/create" method = "post" class="form-group" style="width:70%; margin-left:15%;" >
                           
                    <div class="row">
                                <div class="col-sm-13">
                                

                                    <div class="form-group">
                                        <label>Form Number <span class="text-danger">*</span></label>
                                        
                                        <input type="text" class="form-control" placeholder="Form Number" name="form_number">
                                        
                                    </div>
                                    </div>

                            <div class="row">
                                <div class="col-sm-6">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        
                                        <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Other names </label>
                                        <input type="text" class="form-control" placeholder="Other Names" name="othernames">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" placeholder="Email" name="email">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="tel" class="form-control" placeholder="Phone Number"  name="phone_number" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Alternate Phone Number</label>
                                        <input type="tel" class="form-control" placeholder="Alternate Phone Number"  name="alternate_phone_number" required>
                                    </div>
                                </div>
                                
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" id="date_of_birth" name="date_of_birth" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    
                                </div>

                                <div class="col-sm-6">
											<div class="form-group">
												<label>State of Origin</label>
												<select id='sel_depart' name='sel_depart' class="form-control">
       <option value='0'>-- Select State --</option>
 
       <!-- Read Departments -->
       @foreach($departmentData['data'] as $department)
         <option value='{{ $department->id }}'>{{ $department->name }}</option>
       @endforeach

    </select>
											</div>
                                            </div>

                                            <div class="col-sm-6">
											<div class="form-group">
												<label>LGA of Origin</label>
												<select id='sel_emp' name='sel_emp' class="form-control">
                                                <option value='0'>-- Select LGA --</option>
    </select>
											</div>
                                            </div>

                                <div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Gender:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" id="gender" name="gender" value="male" class="form-check-input">Male
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" id="gender" name="gender" value="female" class="form-check-input">Female
											</label>
										</div>

                                        
										</div>

									</div>


                                    <div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Marital Status:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" id="marital_status" name="marital_status" value="single" class="form-check-input">Single
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" id="marital_status" name="marital_status" value="married" class="form-check-input">Married
											</label>
										</div>

                                        
										</div>

									</div>
                                    
                                </div>
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Address</label>
                                                <textarea class="form-control" name="residential_address"></textarea>
												<input type="hidden" id="created_by" name="created_by" class="form-check-input" value="{{ Auth::user()->email }}">
											</div>
										</div>
										
										
									</div>
								</div>
                               
                                <div class="col-sm-9">
									<div class="form-group">
										<label>Upload Passport</label>
										<div class="profile-upload">
											<div class="upload-img">
												<img alt="" src="assets/img/user.jpg">
											</div>
											<div class="upload-input">
												<input type="file" class="form-control">
											</div>
                                            
										</div>
                                        <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
									</div>
                                </div>
                            </div>
                            
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
			  </div>
              <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    

   <!-- Script -->
   <script type='text/javascript'>

$(document).ready(function(){

  // Department Change
  $('#sel_depart').change(function(){

     // Department id
     var id = $(this).val();

     // Empty the dropdown
     $('#sel_emp').find('option').not(':first').remove();

     // AJAX request 
     $.ajax({
       url: 'getEmployees/'+id,
       type: 'get',
       dataType: 'json',
       success: function(response){

         var len = 0;
         if(response['data'] != null){
           len = response['data'].length;
         }

         if(len > 0){
           // Read data and create <option >
           for(var i=0; i<len; i++){

             var id = response['data'][i].id;
             var name = response['data'][i].name;

             var option = "<option value='"+id+"'>"+name+"</option>"; 

             $("#sel_emp").append(option); 
           }
         }

       }
    });
  });

});

</script>

</body>


<!-- edit-patient24:07-->
</html>
