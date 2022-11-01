<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>

                     {{-- @if ( auth()->user()->roleid==1) --}}
                     

                    @if ( auth()->user()->roleid==3)
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li>
                            <a href="/student-dashboard"><i class="fas fa-user-graduate"></i> <span>Students Dashboard</span></span></a>
                         </li>
                         
                         <li>
                            <a href="/student-course"><i class="fas fa-book-open"></i> <span> Course</span></span></a>
                         </li>
                         <li>
                            <a href="/student-application"><i class="fas fa-file"></i> <span>Application</span></span></a>
                         </li>
                         <li>
                           <a href="/student/fee"><i class="fas fa-file"></i> <span> Fees</span></span></a>
                        </li>
                         {{-- <li class="submenu">
                            <a href="#"><i class="fas fa-columns"></i> <span> Admission Form </span> <span class="menu-arrow"></span></a>
                            <ul>
                               <li><a href="/admissionform/firstsection">Personal Information</a></li>
                               <li><a href="/admissionform/secondsection">Select Courses </a></li>
                               <li><a href="/admissionform/thirdsection">Academic Qualification </a></li>
                               <li><a href="/admissionform/fourthsection">English and work exp </a></li>
                               <li><a href="/admissionform/fifthsection">Further Information </a></li>
                               <li><a href="/admissionform/sixthsection">Marketing Information </a></li>
                            </ul>
                         </li> --}}
                         <li>
                            <a href="/student-profile-details"><i class="fas fa-user"></i> <span>Profile</span></span></a>
                         </li>
                         <li>
                            <a href="/student-letter"><i class="fas fa-envelope"></i> <span>Student Letter</span></span></a>
                         </li>
                         <li>
                            <a href="../login.html"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></span></a>
                         </li>
                            </ul>
                        </li>
                        @else
                        <li class="submenu active">
                       
                           <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                           <li>
                              <a href="#"><i class="fas fa-user-graduate"></i> <span>Admin Dashboard</span></span></a>
                           </li>
                           
                           {{-- <ul>
                              <li><a href="/" class="active">Admin Dashboard</a></li>
                              
                              <li><a href="/studentdashboard/student-dashboard">Student Dashboard</a></li>
                           </ul> --}}
                        </li>
                        {{-- @canany('Course access','Course add','Course edit','Course delete')
                        <li>
                           <a href="{{ route('admin.courses.index') }}"><i class="fas fa-book-open"></i> <span>Course</span></span></a>
                        </li>
                        @endcanany --}}
                        
                        <li class="submenu ">
                           <a href="#"><i class="fas fa-user-graduate"></i> <span>Course</span> <span
                                   class="menu-arrow"></span></a>
                           <ul>
                              @canany('Course access','Course add','Course edit','Course delete')
                               <li><a href="{{ route('admin.courses.index') }}">Undergraduate Course</a></li>
                              @endcanany
                             
                               <li><a href="{{ route('admin.foundationcourse.index') }}">Foundation Course </a></li>
                               <li><a href="{{ route('admin.commencement.index') }}">Commencement</a></li>
                           </ul>  
                       </li>
                        <li>
                           <a href="/student"><i class="fas fa-user"></i><span> Students</span></span></a>
                        </li>
   
                        @canany('Application access','Application add','Application edit','Application delete')
                        <li>
                           <a href="{{ route('admin.applications') }}"><i class="fas fa-file"></i> <span>Application</span></span></a>
                        </li>
                        @endcanany
                        
                        <li>
                           <a href="#"><i class="fas fa-dollar-sign"></i> <span>Fee Status</span></span></a>
                        </li>
                        
                        <li>
                           <a href="/student-letter"><i class="fas fa-envelope"></i> <span>Student Letter</span></span></a>
                        </li>
                        <li>
                           <a href="/email-template"><i class="fas fa-envelope"></i> <span>Email Template</span></span></a>
                        </li>
                        <li>
                           <a href="/profile-details"><i class="fas fa-user"></i> <span>Profile</span></span></a>
                        </li>
                        {{-- <li>
                           <a href="/role-permission"><i class="fas fa-user"></i> <span>Role and permissions</span></span></a>
                        </li> --}}
                        <li class="submenu ">
                           <a href="#"><i class="fas fa-user-graduate"></i> <span>Role and permissions</span> <span
                                   class="menu-arrow"></span></a>
                           <ul>
                              @canany('Role access','Role add','Role edit','Role delete')
                               <li><a href="{{ route('admin.roles.index') }}">Roles</a></li>
                              @endcanany
                              @canany('Permission access','Permission add','Permission edit','Permission delete')
                               <li><a href="{{ route('admin.permissions.index') }}">Permissions </a></li>
                              @endcanany
                              @canany('User access','User add','User edit','User delete')
                               <li><a href="{{ route('admin.users.index') }}">Users</a></li>
                              @endcanany
                           </ul>
                       </li>
                        {{-- <li class="submenu ">
                           <a href="#"><i class="fas fa-user-graduate"></i> <span>Users</span> <span
                                   class="menu-arrow"></span></a>
                           <ul>
                               <li><a href="/userlist">user List</a></li>
                               <li><a href="/user-add">user Add</a></li>
                               <li><a href="#">user Edit</a></li>
                           </ul>
                       </li> --}}
                       {{-- @endif --}}
   
                        @endif

                    </ul>
                </div>
            </div>
</div>