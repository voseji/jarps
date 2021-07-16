<ul class="nav user-menu float-right">
                
                
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							
							
						</span>
						<span>Welcome back {{ Auth::user()->name }}</span>
                    </a>
					<div class="dropdown-menu">
						
						
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
					</div>
                </li>
            </ul>