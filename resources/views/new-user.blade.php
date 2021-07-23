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
                        <h4 class="page-title">New User</h4>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-9">
                        <div class="card-box">
                            <h4 class="card-title">Register New User</h4>

                            @if(Session::has('delete_status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        {{ Session('delete_status') }}
        
    </div>
    
@endif
                    <form method="POST" action="/new-user">
                        @csrf
                        {{ csrf_field() }}
                        <input name="created_at" type="hidden" value="@php $todayDate = Carbon\Carbon::now()->format('Y-m-d h:i:s'); echo $todayDate; @endphp"/>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Fullname</label>
                                    <div class="col-md-9">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Email Address</label>
                                    <div class="col-md-9">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>

                                </div>


                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Assign Role</label>
                                    <div class="col-md-9">
                                    <select name="role" class="form-control">
                                    <option value="">---Select---</option>
                                    <option value="super_admin">Super Admin</option>
                                    <option value="data_capture_agent">Data Capture Agent</option>
                                    <option value="verification_officer">Verification Officer</option>
                                    
                                   </select>

                                    </div>

                                </div>

                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Password</label>
                                    <div class="col-md-9">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Repeat Password</label>
                                    <div class="col-md-9">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
