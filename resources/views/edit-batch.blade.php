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
     
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">New Batch</h4>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-9">
                        <div class="card-box">
                            <h4 class="card-title">Register New Batch</h4>

                            @if(Session::has('delete_status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        {{ Session('delete_status') }}
        
    </div>
    
@endif
                    <form method="POST" action="/edit/<?php echo $users[0]->id; ?>">
                        @csrf
                        {{ csrf_field() }}
                        <input name="created_at" type="hidden" value="@php $todayDate = Carbon\Carbon::now()->format('Y-m-d h:i:s'); echo $todayDate; @endphp"/>
                        <input name="created_by" type="hidden" value="{{ Auth::user()->name }}"/>
                        @foreach ($users as $user)
                        @endforeach
      
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Batch Number</label>
                                    <div class="col-md-9">
                                    <input id="batch_number" type="text" class="form-control" name="batch_number" value="<?php echo $users[0]->batch_number; ?>" required>
                                    <span style="color:red; font-size:11px">Choose a number for the day and an alphabet for the batch. E.g. 1A</span>
                                  
                                    </div>

                                </div>


                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Exam Date</label>
                                    <div class="col-md-9">
                                    <input id="batch_date" type="date" class="form-control" name="batch_date" value="{{ $user->batch_date}}"  required>
                                    
                                    </div>

                                </div>

                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Exam Time</label>
                                    <div class="col-md-9">
                                        <input id="batch_time" type="text" class="form-control" name="batch_time" value="{{ $user->batch_time}}" required>
                                        <span style="color:red; font-size:11px">Write date in this format: 7AM, 9AM, 11AM, 1PM</span>
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Hall</label>
                                    <div class="col-md-9">
                                    <input id="hall" type="text" class="form-control" name="hall" value="{{ $user->hall}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Capacity</label>
                                    <div class="col-md-9">
                                    <input id="seats_available" type="number" class="form-control" name="seats_available" value="{{ $user->seats_available}}" required>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                
                                
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
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- form-horizontal23:59-->
</html>
