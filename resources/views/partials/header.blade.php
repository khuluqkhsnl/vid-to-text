
<div class="logo">
    <img src="{{ asset('gull/dist-assets/images/logo.png') }}" alt="" />
</div>
    <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="d-flex align-items-center">
        <!-- Mega menu-->
        <div class="dropdown mega-menu d-none d-md-block"><a class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a>
            <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                <div class="row m-0">
                    <div class="col-md-4 p-4">
                        <p class="text-primary text--cap border-bottom-primary d-inline-block">Features</p>
                            <div class="menu-icon-grid w-auto p-0">
                                <a href="#"><i class="i-Shop-4"></i> Home</a>
                                <a href="#"><i class="i-Library"></i> UI Kits</a>
                                <a href="#"><i class="i-Drop"></i> Apps</a>
                                <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                                <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                                <a href="#"><i class="i-Ambulance"></i> Support</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Mega menu-->
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle--><i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen=""></i>

                <a class="btn btn-danger text-white m-1" href="#">Register</a>
                <a class="btn btn-success text-white m-1" href="#">Log In</a>

                <!-- User avatar dropdown-->
                <div class="dropdown">
                    <div class="user col align-self-end"><img id="userDropdown" src="{{ asset('gull/html/layout3/assets/images/faces/1.jpg') }}" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header"><i class="i-Lock-User mr-1"></i> Timothy Carlson</div><a class="dropdown-item">Account settings</a><a class="dropdown-item" href="signin.html">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
