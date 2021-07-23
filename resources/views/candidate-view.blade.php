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
                        <h4 class="page-title">Candidate Regigistration Slip</h4>
                    </div>
                    <div class="col-sm-9 col-9 m-b-30">
                        <div class="btn-group btn-group-sm">
                            
                        
                            <button class="btn btn-white" onclick="printDiv('card-print')" style="background-color:green; color:white"><i class="fa fa-print fa-lg"></i> Print</button>
                        </div>
                    </div>
                </div>

                @foreach ($users as $user)
                @endforeach

                @foreach ($users2 as $user2)
                @endforeach


              
                

                <div class="row" >
                    <div class="col-md-9">
                        <div class="card" id="print">
                            <div class="card-body">
                            <img style="display: block;
  margin-left: auto;
  margin-right: auto;
  
" src="images/fctlogo.png" class="inv-logo" alt="FCT SONM">
                            <h2 style="text-align:center">Federal Capital Territory Administration</h2>
                            <h3 style="text-align:center">Schools of Nursing and Midwifery, Gwagalada</h3>
                            <h4 style="text-align:center"><u>2021 Basic Midwifery Admission</u></h4>
                                <div class="row custom-invoice">
                               
                                    <div class="col-6 col-sm-6 m-b-20">
                                        
                                      
                                    </div>
                                    <div class="col-6 col-sm-6 m-b-20">
                                        <div class="invoice-details">
                                       
                                        
                                        
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
											<td style="text-align:center">Passport: <br/><img src="{{ asset('images') }}/{{ $user2->url}}" width="150px" height="150px"/>
                                          
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
                                            <td><h5>Email:</h5> <h3 class="text-lowercase">{{ $user->email}}</h3></td>
                                            
                                            <td><h5>Contact Number:</h5> <h3 class="text-uppercase">{{ $user->phone_number}}</h3></td>
                                            
                                            <td><h5>Alternate Contact Number:</h5> <h3 class="text-uppercase">{{ $user->alternate_phone_number}}</h3></td>
                                            </tr>
                                            

                                            <tr >
                                            <td> <h5>Nationality:</h5> <h3 class="text-uppercase">{{ $user->nationality}}</h3></td>
                                            <td><h5>State of Origin:</h5> <h3 class="text-uppercase">{{ $user->name}}</h3></td>
                                            
                                            <td> <h5>LGA of Origin:</h5> <h3 class="text-uppercase">{{ $user->lga}}</h3></td>
                                        
                                           
                                            </tr>

                                            
                                            </table>
                                    </div>
   
                                </div>
                            
                                <div>
                                <br/>
                                    <div class="invoice-info">
                                        <h5>Important information</h5>
                                        <p class="text-muted">
                                        For enquiries about application and examination dates, please call <b>07064221237</b> OR Email: <b>fctsonenquiry@gmail.com</b>. Follow us on our facebook page fb.me/fctson<br/>
                                        <b>Telegram link: https://rb.gy/gqzqps</b><br/>
                                        <b>WhatsApp: 08082775076</b>
                                        </p>
                                       
                                        <p style="align:right">{!! QrCode::size(180)->generate("FCT School of Nursing & Midwifery. 2021 Admissions $user->lastname $user->firstname $user->othernames"); !!}</p>
                                        <footer style="text-align:right; font-size:11px">Date Printed: @php echo date('d-m-Y') @endphp</footer>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="btn-group btn-group-sm">
                            
                        <a href="delete/{{ $user->id }}" onclick="return confirm('Are you sure you want to delete this candidate? This action cannot be reversed');"><button class="btn btn-white" style="background-color:red; color:white"><i class="fa fa-times fa-lg"></i> Delete This Registration </button>&nbsp;
                            
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