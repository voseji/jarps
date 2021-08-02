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
                    
                        <h4 class="page-title">Print Attendace Sheet</h4>
                        
                     
                        

                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    
  
                                        
                     
                </div>
                
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                        <form class="col-sm-9" method="post" action="/print-attendance" >
            @csrf   
                                        </div>
                                        <div class="col-sm-12">
									<div class="form-group">
										<label>Enter Batch To Print Attnedance List</label>
										<div >
   		
											<div >
                                            
                                             <br/>
                                                <select class="form-control" name="batch_number">
                                                    <option>---Select Batch---</option>
                                                @php 
                                                $con=mysqli_connect("127.0.0.1","emgegrou_cap","2wsxzaQ1!","jarps2");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
                                               $result = mysqli_query($con,"SELECT * FROM batching");
 while($row = mysqli_fetch_array($result)) 
   echo "<option value='$row[batch_number]'>Batch " .$row['batch_number'] . "</option>";
@endphp
                                                </select>

<br/>
                                                <select class="form-control" name="hall">
                                                    <option>---Select Hall---</option>
                                                    <option value="A">Hall A</option>
                                                    <option value="B">Hall B</option>
                                                    <option value="C">Hall C</option>
                                                </select>


                                                <div class="staff-msg"><button type="submit" class="btn btn-primary" id="submit">Generate List</button></div> 
											
                                                

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