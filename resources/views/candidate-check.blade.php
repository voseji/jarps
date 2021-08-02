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
                    <div class="col-sm-12 col-12">
                    
                        <h4 class="page-title">Verify Candidate</h4>
                        
                     
                        

                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    
  
                                        
                     
                </div>
                
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                        @if(session()->has('delete_status'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session()->get('delete_status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
                        <form class="col-sm-9" method="post" action="/check-attendance" >
            @csrf   
                                        </div>
                                        <div class="col-sm-12">
									<div class="form-group">
										<label>Type Registration Number</label>
										<div >
											
											<div >
                                            
                                                
                                            
												<input type="text" width="100%" class="form-control" name="id" placeholder="Enter Regnumber" id="id">
                                                
                        
                                                <div class="staff-msg"><button type="submit" class="btn btn-primary" id="submit">Search</button></div> 
											
                                                

                                            </div>
                                            @include('components.errors')
										</div>
                                      </form>
                               
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