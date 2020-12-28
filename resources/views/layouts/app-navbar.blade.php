<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            @if ($attributes->get('sidebar',true))
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            @endif
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
                <div class="search-header">
                    Histories
                </div>
                <div class="search-item">
                    <a href="#">How to hack NASA using CSS</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                    <a href="#">Kodinger.com</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                    <a href="#">#Stisla</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-header">
                    Result
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded" width="30" src="{{ asset('assets/img/products/product-3-50.png') }}" alt="product">
                        oPhone S9 Limited Edition
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded" width="30" src="{{ asset('assets/img/products/product-2-50.png') }}" alt="product">
                        Drone X2 New Gen-7
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded" width="30" src="{{ asset('assets/img/products/product-1-50.png') }}" alt="product">
                        Headphone Blitz
                    </a>
                </div>
                <div class="search-header">
                    Projects
                </div>
                <div class="search-item">
                    <a href="#">
                        <div class="search-icon bg-danger text-white mr-3">
                            <i class="fas fa-code"></i>
                        </div>
                        Stisla Admin Template
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                        <div class="search-icon bg-primary text-white mr-3">
                            <i class="fas fa-laptop"></i>
                        </div>
                        Create a new Homepage Design
                    </a>
                </div>
            </div>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <x-layout-navbar-dropdown dropdown-list="dropdown-list" :toggle="true" :beep="true" :right="true" link-style="message-toggle" class="dropdown dropdown-list-toggle">
            <x-slot name="icon"> <i class='far fa-envelope'></i> </x-slot>
            <x-slot name="header">
                Messages
                <div class="float-right">
                    <a href="#">Mark All As Read</a>
                </div>
            </x-slot>

            <div class="dropdown-list-content dropdown-list-message">

                <x-layout-message-item-dropdown href="#">
                    <x-slot name="avatar"> <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle"/> </x-slot>
                    <x-slot name="name"> Habib </x-slot>
                    <x-slot name="message"> Hello </x-slot>
                    <x-slot name="time">yesterday</x-slot>
                </x-layout-message-item-dropdown>
                <x-layout-message-item-dropdown herf="#" :online="true" :read="true">
                    <x-slot name="avatar">
                        <img alt="image" src="{{ asset('assets/img/avatar/avatar-3.png') }}" class="rounded-circle">
                    </x-slot>
                    <x-slot name="name">
                        Kusnaedi
                    </x-slot>
                    <x-slot name="message">
                        Hello, Bro!
                    </x-slot>
                    <x-slot name="time">10 Hours Ago</x-slot>
                </x-layout-message-item-dropdown>
            </div>

            <x-slot name="footer">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </x-slot>
        </x-layout-navbar-dropdown>

        <x-layout-navbar-dropdown dropdown-list="dropdown-list" :toggle="true" :beep="true" :right="true" link-style="notification-toggle" class="dropdown dropdown-list-toggle">
            <x-slot name="header">
                Notifications
                <div class="float-right"> <a href="#">Mark All As Read</a> </div>
            </x-slot>
            <x-slot name="icon"> <i class="far fa-bell"></i> </x-slot>
            <div class="dropdown-list-content dropdown-list-icons">
                <x-layout-notification-item-dropdown href="#" :read="true" >
                    <x-slot name="icon"> <i class="fas fa-code"></i> </x-slot>
                    <x-slot name="message"> Template update is available now! </x-slot>
                    <x-slot name="time"> 2 Min Ago </x-slot>
                </x-layout-notification-item-dropdown>
                <x-layout-notification-item-dropdown href="#" :read="false" icon-color="bg-info text-white">
                    <x-slot name="icon"> <i class="fas fa-user"></i> </x-slot>
                    <x-slot name="message"> <b>You</b> and <b>Dedik Sugiharto</b> are now friends </x-slot>
                    <x-slot name="time"> 2 Min Ago </x-slot>
                </x-layout-notification-item-dropdown>
            </div>
            <x-slot name="footer">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </x-slot>
        </x-layout-navbar-dropdown>
        <x-layout-navbar-dropdown :right="true" :toggle="true" link-style="nav-link-user">
            <x-slot name="icon">
                <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
            </x-slot>
            <div class="dropdown-title">Logged in 5 min ago</div>
            <a href="features-profile.html" class="dropdown-item has-icon"> <i class="far fa-user"></i> Profile </a>
            <a href="features-activities.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i> Activities </a>
            <a href="features-settings.html" class="dropdown-item has-icon"> <i class="fas fa-cog"></i> Settings </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i> Logout </a>
        </x-layout-navbar-dropdown>
    </ul>
</nav>
