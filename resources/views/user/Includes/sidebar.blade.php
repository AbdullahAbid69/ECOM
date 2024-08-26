@include('User.Includes.head')
<div class="sidebar close">
    <div class="logo-details">
        <a href="{{route('home')}}"><i class='bx bx-plus-medical' style="color: #00ABE4"></i></a>
        <span class="logo_name" style="color: #00ABE4"><a href="{{route('home')}}">Dental Store</a></span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
                <i class='bx bx-home'></i>
                <span class="link_name">Home</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="{{route('home')}}">Home</a></li>
            </ul>
        </li>



        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-category'></i>
                    <span class="link_name">Categories</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Categories</a></li>
                <li><a href="#">Tools</a></li>
                <li><a href="#">Kits</a></li>
                <li><a href="#">Items</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-info-circle'></i>
                <span class="link_name">About</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">About</a></li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class='bx bx-help-circle'></i>
                <span class="link_name">Help</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Help</a></li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="link_name">Setting</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Setting</a></li>
            </ul>
        </li>
        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <!--<img src="image/profile.jpg" alt="profileImg">-->
                </div>
                <div class="name-job">
                    <div class="profile_name">Abdullah Abid</div>
                    <div class="job">Web Desginer</div>
                </div>
                <a href="#" target="_blank"><i class='bx bx-log-out' id="developer-designer"></i></a>
            </div>
        </li>
    </ul>
</div>
