<!-- sidebar menu -->


            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{url('studentregisterform')}}"><i class="fa fa-home"></i> Student Registration </a>

                  </li>
                    <br>
                  <li><a href="{{url('studentdetails')}}"><i class="fa fa-edit"></i>View Student  </a>

                  </li>
                    <br>
                    <li><a><i class="fa fa-edit"></i> Program <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('addbranch')}}">Add Program</a></li>
                            <li><a href="{{url('branchshow')}}">View Program</a></li>
                        </ul>
                    </li>
                    <br>
                  <li><a><i class="fa fa-edit"></i> Course <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('addcourse')}}">Add course</a></li>
                      <li><a href="{{url('courseshow')}}">View courses</a></li>
                    </ul>
                  </li>
                    <br>
                    <li>
                    <a href="./">  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            Logout </a>
                    </li>
                    <!--<li>
                        <a href="{{route('logout')}}">  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            Logout </a>
                    </li> -->

                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->


            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>



