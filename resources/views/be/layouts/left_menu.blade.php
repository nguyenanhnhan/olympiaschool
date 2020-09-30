<div @if (Auth::user()->role == 2)
    hidden
    @endif class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{route('select_school')}}"><img class="main-logo" src="be/img/logo.png" alt="" /></a>
            <strong><a href="{{route('select_school')}}"><img src="be/img/logo.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a title="Landing Page" href="/admin/dashboard" aria-expanded="false">
                            <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                            <span class="mini-click-non">Dashboard</span></a>
                    </li>
                    <li class="{{ request()->is('admin/teachers*') ? 'active' : '' }}">
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span
                                class="educate-icon educate-professor icon-wrap"></span> <span
                                class="mini-click-non">Teachers</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="admin/teachers/list"><span class="mini-sub-pro">All
                                        Teachers</span></a></li>
                            <li><a title="Add Professor" href="admin/teachers/add"><span class="mini-sub-pro">Add
                                        Teachers</span></a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('admin/users*') ? 'active' : '' }}">
                        <a class="has-arrow" href="all-students.html" aria-expanded="false"><span
                                class="educate-icon educate-student icon-wrap"></span> <span
                                class="mini-click-non">Admin</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" href="admin/users/list"><span class="mini-sub-pro">All
                                        Admins</span></a></li>
                            <li><a title="Add Students" href="admin/users/add"><span class="mini-sub-pro">Add
                                        Admin</span></a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->route()->named('Subject*') ? 'active' : '' }}">
                        <a class="has-arrow" href="all-students.html" aria-expanded="false">
                            <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                            <span class="mini-click-non">Subject</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li>
                                <a title="All schedule" href="{{route('subject_show')}}">
                                    <span class="mini-sub-pro">All Subject</span>
                                </a>
                            </li>
                            <li>
                                <a title="Add schedule" href="{{route('subject_create')}}">
                                    <span class="minFi-sub-pro">Add Subject</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ request()->route()->named('default*') ? 'active' : '' }}">
                        <a class="has-arrow" href="all-students.html" aria-expanded="false"><span
                                class="educate-icon educate-student icon-wrap"></span> <span
                                class="mini-click-non">Default Schedules</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All schedule" href="{{route('default_schedule_show')}}"><span
                                        class="mini-sub-pro">All
                                        Default Schedules</span></a></li>
                            <li><a title="Add schedule" href="{{route('default_schedule_create')}}"><span
                                        class="mini-sub-pro">Add
                                        Default Schedules</span></a></li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span
                                class="educate-icon educate-library icon-wrap"></span> <span
                                class="mini-click-non">Library</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Library" href="library-assets.html"><span class="mini-sub-pro">Library
                                        Assets</span></a></li>
                            <li><a title="Add Library" href="add-library-assets.html"><span class="mini-sub-pro">Add
                                        Library Asset</span></a></li>
                            <li><a title="Edit Library" href="edit-library-assets.html"><span class="mini-sub-pro">Edit
                                        Library Asset</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span
                                class="educate-icon educate-message icon-wrap"></span> <span
                                class="mini-click-non">Mailbox</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</span></a>
                            </li>
                            <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">View
                                        Mail</span></a></li>
                            <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Compose
                                        Mail</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span
                                class="educate-icon educate-charts icon-wrap"></span> <span
                                class="mini-click-non">Charts</span></a>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Bar Charts" href="bar-charts.html"><span class="mini-sub-pro">Bar
                                        Charts</span></a></li>
                            <li><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Line
                                        Charts</span></a></li>
                            <li><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Area
                                        Charts</span></a></li>
                            <li><a title="Rounded Charts" href="rounded-chart.html"><span class="mini-sub-pro">Rounded
                                        Charts</span></a></li>
                            <li><a title="C3 Charts" href="c3.html"><span class="mini-sub-pro">C3 Charts</span></a>
                            </li>
                            <li><a title="Sparkline Charts" href="sparkline.html"><span class="mini-sub-pro">Sparkline
                                        Charts</span></a></li>
                            <li><a title="Peity Charts" href="peity.html"><span class="mini-sub-pro">Peity
                                        Charts</span></a></li>
                        </ul>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </nav>
</div>