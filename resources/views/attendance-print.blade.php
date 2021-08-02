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
                        <h4 class="page-title">Attendance Sheet</h4>
                    </div>
                    <div class="col-sm-9 col-9 m-b-30">
                        <button class="btn btn-white" onclick="printDiv('card-print')" style="background-color:green; color:white"><i class="fa fa-print fa-lg"></i> Print</button>
                        </div>
                </div>

                @foreach ($users as $user)
               @endforeach

           <div class="row" style="width:140%">
                    <div class="col-md-9">
                        <div class="card" id="print">
                            <div class="card-body">
                          <div class="row custom-invoice">
                               
                                    <div class="col-6 col-sm-6 m-b-20">
                               
                                    </div>
                                   
                                </div>
                                <div class="row" >
                                    <div class="col-sm-6 col-lg-6 m-b-20" >
                                    <table width="960px">
                                        <tr>
                                        <td style="text-align:center"> 
                                        <img style="display: block;
  margin-left: auto;
  margin-right: auto;
  
" src="images/fctlogo.png" class="inv-logo" alt="FCT SONM">
                                        <h2 style="text-align:center">Federal Capital Territory Administration</h2>
                            <h3 style="text-align:center">Schools of Nursing and Midwifery, Gwagalada</h3>
                            <h4 style="text-align:center"><u>2021 Basic Midwifery Entrance Examination</u></h4>
                            <h3 style="text-align:center"><u>Attendance Sheet for Batch {{ $user->batch_number}}</u></h3>
                           </td>
                                        </tr>
                                        </table>
                                        
                                        <h4>Exam Date: {{$user->batch_date}}
                                            <br/>
                                            Exam Time: {{$user->batch_time}}
                                            <br/>
                                            Exam Hall: {{$user->hall}}   
                                        </h4>
										<table width="960px" border="1">
                                        <th>SN</th>
                                        <th>Seat Number</th>
                                        <th>Form Number</th>
                                        <th>Registration Number</th>    
                                        <th>Fullname</th>
                                        <th>State of Origin</th>
                                        <th>Phone Number</th>
                                        <th>Confirm Phone Number</th>
                                        <th style="width:150px">Sign</th>
                                        </tr>
                                        @php $i=1; @endphp
                                        @foreach ($users as $user)
                                        
                                        <tr>
                                            <td>@php  echo $i++; @endphp</td>
                                        <td>{{ $user->seat_number}}</td>
                                            <td>{{ $user->form_number}}</td>
                                            <td>{{ $user->id}}</td>
                                            <td style="text-transform:uppercase">{{ $user->lastname}} {{ $user->firstname}} {{ $user->othernames}}</td>
                                            <td style="text-transform:uppercase">{{ $user->name}} </td>
                                            <td style="text-transform:uppercase">{{ $user->phone_number}} </td>
                                            <td style="text-transform:uppercase"> </td>
                                            <td style="text-transform:uppercase"></td>
                                        </tr>       
                                        @endforeach
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