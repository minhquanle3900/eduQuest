<!doctype html>
<html lang="en">

@include('dean.share.css')

<body class="sidebar-main-active right-column-fixed header-top-bgcolor">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->

        @include('dean.share.menu')

        <!-- TOP Nav Bar -->

        @include('dean.share.header')

        <!-- TOP Nav Bar END -->

        <!-- Page Content  -->

        <div id="content-page" class="content-page">
           {{-- @include('dean.share.body') --}}
           @yield('noi_dung')
        </div>
    </div>

    @include('dean.share.right')

    <!-- Wrapper END -->
    <!-- Footer -->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2024 <a href="#">eduQuest</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <nav class="iq-float-menu">
        <input type="checkbox" href="#" class="iq-float-menu-open" name="menu-open" id="menu-open" />
        <label class="iq-float-menu-open-button" for="menu-open">
            <span class="lines line-1"></span>
            <span class="lines line-2"></span>
            <span class="lines line-3"></span>
        </label>
        <button class="iq-float-menu-item bg-info" data-toggle="tooltip" data-placement="top" title="Direction Mode"
            data-mode="rtl"><i class="ri-text-direction-r"></i></button>
        <button class="iq-float-menu-item bg-danger" data-toggle="tooltip" data-placement="top" title="Color Mode"
            id="dark-mode" data-active="true"><i class="ri-sun-line"></i></button>
        <button class="iq-float-menu-item bg-warning" data-toggle="tooltip" data-placement="top"
            title="Comming Soon"><i class="ri-palette-line"></i></button>
    </nav>
    <!-- Footer END -->

    @include('dean.share.js')
    @yield('js')
</body>

</html>
