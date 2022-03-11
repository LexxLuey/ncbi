<div class="app-sidebar">
    <div class="logo">
        <a href="{{route('admin')}}" class="logo-icon"><span class="logo-text">NCBI Admin</span></a>
        <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <img src="{{ asset("assets/images/avatars/avatar1.jpg") }}">
                <span class="activity-indicator"></span>
                <span class="user-info-text">Admin<br><span class="user-state-info">Online</span></span>
            </a>
        </div>
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Students
            </li>
            <li class="{{ request()->is('admin') ? 'active-page' : ''}}">
                <a href="#"><i class="material-icons-two-tone">person</i>Students<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">All Students <b>(COMING SOON)</b></a>
                    </li>
                    <li>
                        <a href="#">Registered Students <b>(COMING SOON)</b></a>
                    </li>
                    <li>
                        <a href="#">Graduated Students <b>(COMING SOON)</b></a>
                    </li>
                    <li>
                        <a href="#">Applicants <b>(COMING SOON)</b></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-title">
                Centres
            <li>
                <a href="{{route('admin')}}"><i class="material-icons-two-tone">widgets</i>Widgets</a>
            </li>
        </ul>
    </div>
</div>