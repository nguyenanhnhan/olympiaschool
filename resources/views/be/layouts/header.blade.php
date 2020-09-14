<div class="header-top-area"  @if (Auth::user()->role == 2)
    style="left: 0px;"
    @endif >
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-top-wraper">
                    <div class="row">
                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                            <div class="menu-switcher-pro">
                                <button type="button" id="sidebarCollapse"
                                    class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="educate-icon educate-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="header-top-menu tabl-d-n">
                                <ul class="nav navbar-nav mai-top-nav">
                                    <li
                                        class="nav-item {{ request()->route()->named('default_booking*') ? 'current' : '' }}">
                                        <a href="{{route('default_booking')}}" class="nav-link">Schedule</a>
                                    </li>
                                    {{-- <li
                                        class="nav-item {{ request()->is('admin/schedules/booking*') ? 'current' : '' }}">
                                        <a href="admin/schedules/booking" class="nav-link">Schedule</a>
                                    </li> --}}
                                    <li
                                        class="nav-item {{ request()->is('admin/schedules/schedules*') ? 'current' : '' }}">
                                        <a href="admin/schedules/schedules" class="nav-link">Observation plan</a>
                                    </li>
                                    <li
                                        class="nav-item {{ request()->is('admin/evaluation/draft*') ? 'current' : '' }}">
                                        <a href="admin/evaluation/draft" class="nav-link">Draft</a>
                                    </li>
                                    <li
                                        class="nav-item {{ request()->is('admin/evaluation/completed*') ? 'current' : '' }}">
                                        <a href="admin/evaluation/completed" class="nav-link">Completed</a>
                                    </li>
                                    <li class="nav-item dropdown res-dis-nn">
                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                            class="nav-link dropdown-toggle">Project
                                            <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                        <div role="menu" class="dropdown-menu animated zoomIn">
                                            <a href="{{route('ranking')}}" class="dropdown-item">Ranking</a>
                                            <a href="{{route('chart_search')}}" class="dropdown-item">Search Chart Teacher</a>
                                            <a href="{{route('chart_location')}}" class="dropdown-item">Chart All Location</a>
                                            {{-- <a href="#" class="dropdown-item">Contact Support</a> --}}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
                            <div class="header-right-info">
                                <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                    <li class="nav-item">
                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                            class="nav-link dropdown-toggle">
                                            <img src="upload/users/{{Auth::user()->image}}" alt="" />
                                            <span class="admin-name">{{Auth::user()->name}}</span>
                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                        </a>
                                        <ul role="menu"
                                            class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                            <li><a href="#"><span
                                                        class="edu-icon edu-home-admin author-log-ic"></span>My
                                                    Account</a>
                                            </li>
                                            <li><a href="#"><span
                                                        class="edu-icon edu-user-rounded author-log-ic"></span>My
                                                    Profile</a>
                                            </li>
                                            <li><a href="admin/logout"><span
                                                        class="edu-icon edu-locked author-log-ic"></span>Log
                                                    Out</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('msg')