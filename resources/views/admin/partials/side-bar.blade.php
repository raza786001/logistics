 <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">


                    <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
                    <!--It will only appear on small screen devices.-->
                    <!--================================
                    <div class="mainnav-brand">
                        <a href="index.html" class="brand">
                            <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                            <span class="brand-text">Nifty</span>
                        </a>
                        <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
                    </div>
                    -->

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <img class="img-circle img-md" src="{{  asset('assets/admin/img/profile-photos/1.png')}}" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">Admin</p>
                                            <span class="mnp-desc">admin@gmail.com</span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-information icon-lg icon-fw"></i> Help
                                        </a>
                                        <a href="{{url('/admin/logout/')}}" class="list-group-item">
                                            <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                                        </a>
                                    </div>
                                </div>


                                <!--Shortcut buttons-->
                                <!--================================-->
                                <div id="mainnav-shortcut" class="hidden">
                                    <ul class="list-unstyled shortcut-wrap">
                                        <li class="col-xs-3" data-content="My Profile">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                                <i class="demo-pli-male"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Messages">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                                <i class="demo-pli-speech-bubble-3"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Activity">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                <i class="demo-pli-thunder"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Lock Screen">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                                <i class="demo-pli-lock-2"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--================================-->
                                <!--End shortcut buttons-->


                                <ul id="mainnav-menu" class="list-group">
						
						            <!--Category name-->
						            <li class="list-header">Navigation</li>
						
						            <!--Menu list item-->
						            <li class="{{ request()->is('admin/dashboard*')  ? 'active-sub' : ''}}">
						                <a href="{{ url('/admin/dashboard') }}">
						                    <i class="demo-pli-home"></i>
						                    <span class="menu-title">Dashboard</span>
											<!-- <i class="arrow"></i> -->
						                </a>
						
						                <!--Submenu-->
						                <!-- <ul class="collapse in">
						                    <li class="active-link"><a href="index-2.html">Dashboard 1</a></li>
											<li><a href="dashboard-2.html">Dashboard 2</a></li>
											<li><a href="dashboard-3.html">Dashboard 3</a></li>
											
						                </ul> -->
						            </li>
									<li class="{{ request()->is('admin/categories*')  ? 'active-sub' : ''}}">
										@role('admin')
										<a href="#">
						                    <i class="demo-pli-split-vertical-2"></i>
											
						                    <span class="menu-title">Admin Section</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
										
						                <ul class="collapse">
						                    <li><a href="{{ url('admin/allusers') }}">View All Users</a></li>
						                    <li><a href="{{ url('admin/addroles') }}">Add Roles</a></li>
						                    <li><a href="{{ url('admin/addpermission') }}">Add permissions</a></li>
						                </ul>
						            </li>
									
									@endrole
						            <!--Menu list item-->
						            <li class="{{ request()->is('admin/categories*')  ? 'active-sub' : ''}}">
						                <a href="#">
						                    <i class="demo-pli-split-vertical-2"></i>
						                    <span class="menu-title">Categories</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
										@can('permission_create')
						                <ul class="collapse">
						                    <li><a href="{{ url('admin/categories') }}">Category View</a></li>
											<li><a href="{{ url('admin/categories/create') }}">Add Category</a></li>
						                </ul>
						            </li>
									@endcan
						
						            <li class="list-divider"></li>
						
						            <!--Category name-->
						            <li class="list-header">Vendors</li>

                                    <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-split-vertical-2"></i>
						                    <span class="menu-title">Vendors</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
										@can('permission_create')
						                <ul class="collapse">
						                    <li><a href="{{ url('admin/vendors') }}">Vendors View</a></li>
											
											<li><a href="{{ url('admin/vendors/create') }}">Add Vendors</a></li>
											
						                </ul>
						            </li>
									@endcan
                                    <li class="list-header">Vendors</li>

                                    <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-split-vertical-2"></i>
						                    <span class="menu-title">Stores</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
										@can('permission_create')
						                <ul class="collapse">
						                    <li><a href="{{ url('admin/stores') }}">Stores View</a></li>
											<li><a href="{{ url('admin/stores/create') }}">Add Stores</a></li>
						                </ul>
										
						            </li>
									@endcan
                                    <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-split-vertical-2"></i>
						                    <span class="menu-title">Users</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="#">Users View</a></li>
											<li><a href="#">Add Users</a></li>
						                </ul>
						            </li>

                                    <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-split-vertical-2"></i>
						                    <span class="menu-title">Reports</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="#">Reports View</a></li>
											<li><a href="#">Add Reports</a></li>
						                </ul>
						            </li>

                                    <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-split-vertical-2"></i>
						                    <span class="menu-title">Bookings</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="{{ url('booking') }}">Booking View</a></li>
											<li><a href="#">Add Booking</a></li>
						                </ul>
						            </li>
						
						            <li class="list-divider"></li>
						
						            <!--Category name-->
						            <li class="list-header">Settings</li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-computer-secure"></i>
						                    <span class="menu-title">Settings</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="#">Pages</a></li>
											<li><a href="#">Profile Settings</a></li>
											<li><a href="#">Website Settings</a></li>
											
						                </ul>
						            </li>
						
                                </ul>

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->