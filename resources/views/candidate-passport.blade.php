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
                                        
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-9">
                                        
                                        <form class="m-2" method="post" action="/file-upload" enctype="multipart/form-data">
            @csrf   
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        {{ Session('success') }}
        
    </div>
    <div class="staff-msg"><a href="new-candidate" class="btn btn-primary" style="color:background-color:green" >Fresh Registration</a></div> 
@endif
                                        </div>
                                        <div class="col-sm-12">
									<div class="form-group">
										<label>Upload Passport</label>
										<div class="profile-upload">
											<div class="upload-img">
												<img alt="" src="assets/img/user.jpg">
                                                
											</div>
											<div class="upload-input">
                                            @if(Session::has('users'))
                                            <input type="text" width="100%" class="form-control" name="name" value="{{Session::get('users') }}" id="name">
                                            
                                            @endif
                                            @php
										$Mynumb = rand(0, 1000000000000);
                                        $show = $Mynumb ;
										@endphp
                                            
                                            <input type="text" class="form-control" id="special" value="{{ $Mynumb }}" name="special">
												<input type="file" class="form-control" name="image" placeholder="Choose image" id="image">
                                                
                        
                                                <div class="staff-msg"><button type="submit" class="btn btn-primary" id="submit">Submit</button></div> 
											
                                                

                                            </div>
                                            @include('components.errors')
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
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
 
 </div>  
 </body>
 </html>