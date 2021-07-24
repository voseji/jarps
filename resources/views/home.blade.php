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

     <---------------Counters-------------------->
     @include('counters') 
     @if(Auth::user()->role =='verification_officer') 
     @elseif(Auth::user()->role =='super_admin' || Auth::user()->role=='data_capture_agent') 
     <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Homepage</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="new-candidate" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Create New Candidate</a>
                    </div>
                </div>
		
		@endif
                   
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>



</html>