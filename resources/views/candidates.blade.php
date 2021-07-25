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
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Candidates</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="new-candidate" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Create New Candidate</a>
                    </div>
                </div>
                @if(Session::has('delete_status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        {{ Session('delete_status') }}
        
    </div>
    
@endif
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">


                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Form Number

      </th>
      <th class="th-sm">Registration Number

      </th>
      <th class="th-sm">Fullname

      </th>
      <th class="th-sm">Email
    </th>
    <th class="th-sm">S. of Origin
    </th>

    </th>
      <th class="th-sm">Batch
    </th>

    <th class="th-sm">Action
    </th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr>
      <td>{{ $user->form_number}}</td>
      <td>{{ $user->id }}</td>
      <td style="text-transform:uppercase">{{ $user->lastname }}, {{ $user->firstname }} {{ $user->othernames }}</td>
      <td style="text-transform:lowercase">{{ $user->email }}</td>
      <td style="text-transform:uppercase">{{ $user->name }}</td>
      <td style="text-transform:uppercase">{{ $user->batch }}</td>
      <td class="text-right">
											<div >
											<a class="dropdown-item" href="edit/{{ $user->id }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="candidate-view?id={{ $user->id }}&&special={{ $user->special }}"  ><i class="fa fa-print"></i> Print</a>
                                            <a class="dropdown-item" href="rebatch?id={{ $user->id }}"  ><i class="fa fa-tasks"></i> Rebatch</a>
											</div>
										</td>
    </tr>
@endforeach

  </tbody>
  <tfoot style="text-align:center">
    <tr>
      <th>Form Number
      </th>
      <th>Registration Number
      </th>
      <th>Fullname
      </th>
      <th>Email
      </th>
      <th class="th-sm">S. of Origin
    </th>
      <th>Batch
      </th>

      <th class="th-sm">Action
    </th>
      
    </tr>
  </tfoot>
</table>



						
						</div>
					</div>
                </div>
            </div>
           
			
		</div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

<script>

    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
  
});
</script>
</body>


<!-- patients23:19-->
</html>