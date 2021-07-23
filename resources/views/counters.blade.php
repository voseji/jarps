<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span ></span>
							<div>
                           
								<h3></h3>
								<span class="widget-title1">Total Registered By Me Today </span>
                                @php
                                $todayDate = Carbon\Carbon::now()->format('Y-m-d');
                                $count = DB::table('candidates')->where ('created_by', '=', Auth::user()->name)->where ('created_at', '=', $todayDate)->count();
                                echo '<h3>'.$count.'</h3>';
                                //echo $todayDate;
                                @endphp


							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                           
                            <div >
                                <h3></h3>
                                <span class="widget-title2">Total Registered By Me Till Date </span>
                                @php
                                $count = DB::table('candidates')->where ('created_by', '=', Auth::user()->name)->count();
                                echo '<h3>'.$count.'</h3>';
                                @endphp
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            
                            <div >
                                <h3></h3>
                                <span class="widget-title3">Total Candidates Captured By All</span>
                                @php
                                $count = DB::table('candidates')->count();
                                echo '<h3>'.$count.'</h3>';
                               @endphp
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            
                            <div >
                                <h3></h3>
                                <span class="widget-title4">No Passport </span>
                            </div>
                        </div>
                    </div>
                </div>