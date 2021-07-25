<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						
                        
						@if(Auth::user()->role =='super_admin')  
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Registration </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="new-candidate">New Registration</a></li>
								
								
							</ul>
						</li>

                        <li>
                            <a href="candidates"><i class="fa fa-users"></i> <span>Candidates Registered</span></a>
                        </li>

                        <li class="submenu">
							<a href="#"><i class="fa fa-book"></i> <span> Report </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
							<li><a href="print-all-slips">Print All Slips</a></li>
								<li><a href="">Reprint Slip</a></li>
								<li><a href="">Download Report</a></li>
								
								
							</ul>
						</li>
						        
						<li class="submenu">
							<a href="#"><i class="fa fa-cog"></i> <span> Manage Users </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="new-user">Add New User</a></li>
								<li><a href="">Delete User</a></li>
								</ul>
						</li>

						<li class="submenu">
							<a href="#"><i class="fa fa-tasks"></i> <span> Batching </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="batches">Create New Batch</a></li>
								<li><a href="batch-candidate">Batch Candidates</a></li>
								<li><a href="">Re-Batch</a></li>
								<li><a href="">Check Candidate's Batch</a></li>
								
							</ul>
						</li>

						<li >
							<a href="candidate-check"><i class="fa fa-user"></i> <span> Verify Candidate </span> </a>
						</li>
						@elseif(Auth::user()->role =='data_capture_agent') 
						<!---------------Data Capture Agents------------------>



<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Registration </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="new-candidate">New Registration</a></li>
							</ul>
						</li>

                       

						

						@elseif(Auth::user()->role =='verification_officer') 
						<!---------------Data Capture Agents------------------>



							<li>
							<a href="candidate-check"><i class="fa fa-user"></i> <span> Verify Candidate </span> </a>
						</li>

                        

						



          
@endif
						
                        
                    </ul>
                </div>
            </div>
        </div>