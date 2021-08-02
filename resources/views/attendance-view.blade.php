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
                    <div class="col-sm-5 col-4">
                        <h4 class="page-title">Candidate Verification</h4>
                    </div>
                   
                </div>

                @foreach ($users as $user)
                @endforeach

           <div class="row" >
                    <div class="col-md-9">
                        <div class="card" id="print">
                            <div class="card-body">
                          <div class="row custom-invoice">
                               
                                    <div class="col-6 col-sm-6 m-b-20">
                                    <form action = "/update" method = "post">   
                                    @csrf 
                                    <input type="hidden" value="{{$user->id}}" type="text" name="id"/>
                                  
                              
<div>                             
<button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> Mark Present
                            </button>    </div>    
                            </form>
                                    </div>
                                    <div class="col-6 col-sm-6 m-b-20">
                                        <div class="invoice-details">
                                        <a href="candidate-check"><button class="btn btn-white" style="background-color:red; color:white"><i class="fa fa-close"></i> Close</button></a>
                                        <ul class="list-unstyled">
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6 m-b-20">
                                    <table width="200%">
                                        <tr>
                                        <td style="text-align:right"><h3>Form #: {{ $user->form_number}}</h3></td>
                                        </tr>
                                        </table>
										<table width="200%" border="1">
                                        <tr>
                                        
											<td colspan="2"><h5>Registration Number:</h5> <h3 class="text-uppercase">{{ $user->id}}</h3></td>
											<td style="text-align:center">Passport: <br/><img src="{{ asset('images') }}/{{ $user->url}}" width="150px" height="150px"/>
                                          
                                            </td>
                                            </tr>
                                            <tr>
                                            <td><h5>Surname:</h5> <h3 class="text-uppercase">{{ $user->lastname}}</h3></td>
                                            
                                            <td><h5>Firstname:</h5> <h3 class="text-uppercase">{{ $user->firstname}}</h3></td>
                                            
                                            <td><h5>Othernames:</h5> <h3 class="text-uppercase">{{ $user->othernames}}</h3></td>
                                            </tr>

                                            <tr>
                                            <td><h5>Gender:</h5> <h3 class="text-uppercase">{{ $user->gender}}</h3></td>
                                            
                                            <td><h5>Marital Status:</h5> <h3 class="text-uppercase">{{ $user->marital_status}}</h3></td>
                                            
                                            <td><h5>Date of Birth:</h5> <h3 class="text-uppercase">{{ $user->date_of_birth}}</h3></td>
                                            </tr>

                                            <tr>
                                            <td><h5>Exam Date:</h5> <h3 class="text-uppercase" style="color:green">{{ $user->batch_date}}</h3></td>
                                            
                                            <td><h5>Exam Time:</h5> <h3 class="text-uppercase" style="color:green">{{ $user->batch_time}}</h3></td>
                                            
                                            <td><h5>Batch:</h5> <h3 class="text-uppercase" style="color:green">{{ $user->batch_number}}</h3></td>
                                            </tr>
                                            

                                            <tr >
                                            <td> <h5>Hall Assigned:</h5> <h3 class="text-uppercase" style="color:green">Hall {{ $user->hall}}</h3></td>
                                            <td><h5>Seat Number:</h5> <h3 class="text-uppercase" style="color:green">{{ $user->seat_number}}</h3></td>
                                            @php
                                          $status=$user->status;
                                        if ($status==0)
                                        {
                                            $status1="<i style='color:red'>Not Checked In</i>"; 
                                        }
                                        elseif ($status==1)
                                        {
                                           $status1="Present"; 
                                        }
                                          @endphp

                                            <td><h5>Attendance Status:</h5> <h3 class="text-uppercase" style="color:green">@php echo $status1; @endphp</h3></td>
                                            
                                        
                                           
                                            </tr>

                                            
                                            </table>
                                    </div>
   
                                </div>
                            
                                <div>
                                <br/>
           
                                    
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
    <sript >
 
</script>
</body>


<!-- invoice-view24:07-->
</html>