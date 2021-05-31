<!-- sidebar menu -->


<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="{{url('studentprofile')}}"><i class="fa fa-home"></i> Profile </a>

            </li>
            <br>
            <br>

            <li><a><i class="fa fa-edit"></i> Course <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('addcourse')}}">Courses</a></li>
                    <li><a href="{{url('courseshow')}}">My courses</a></li>
                </ul>
            </li>
            <br>

                <br>
            <li><a href="{{url('studentregisterform')}}"><i class="fa fa-home"></i> Rate Us </a>

            </li>
            <br>
            <li>
                <a href="#" class="glyphicon glyphicon-off" aria-hidden="true"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
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



