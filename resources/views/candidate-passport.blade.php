@section('content')

@endsection

<!DOCTYPE html>
<html lang="en">



@include('auth/head')

<body>
<script>
   function printDiv(print) {
     var printContents = document.getElementById('print').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
        </script>


    <div class="main-wrapper">
    @include('site_name')
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            @include('user_profile')
            
        </div>
     <---------------Menus-------------------->
     @include('admin_menus')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                    
                        <h4 class="page-title">Upload Passport</h4>
                        
                     
                    
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    
  
                                        
                                        <div class="m-t-20 text-center">
                                
                            </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                        
                    </div>
                </div>
                
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                        
   
      

   


                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="assets/img/passport.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-9">
                                        <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ url('upload-image') }}" >   
                                            
                                        </div>
                                        <div class="col-sm-9">
									<div class="form-group">
										<label>Upload Passport</label>
										<div class="profile-upload">
											<div class="upload-img">
												<img alt="" src="assets/img/user.jpg">
                                                
											</div>
											<div class="upload-input">
												<input type="file" class="form-control" name="image" placeholder="Choose image" id="image">
                                                
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                                                <div class="staff-msg"><button type="submit" class="btn btn-primary" id="submit">Submit</button></div> 
											</div>
                                            
										</div>
                                      </form>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
				          </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
 <script type="text/javascript">
       
 $(document).ready(function (e) {
  
    
    $('#image').change(function(){
             
     let reader = new FileReader();
  
     reader.onload = (e) => { 
  
       $('#preview-image-before-upload').attr('src', e.target.result); 
     }
  
     reader.readAsDataURL(this.files[0]); 
    
    });
    
 });
  
 </script>
 
 </div>  
 </body>
 </html>