<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
            target="_blank">
            <img src="{{ asset('assets/img/59.svg') }}" class="navbar-brand-img" width="100%" height="auto"
                alt="logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class=" btn bg-gradient text-dark" href="{{url('/admin/dashboard')}}">
                  <i class="material-symbols-rounded">dashboard_customize</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="btn bg-gradient dropdown-toggle text-dark" data-bs-toggle="dropdown"
                        id="navbarDropdownMenuLink2">
                        <i class="material-symbols-rounded">group_add</i>&nbsp;&nbsp; Flat Owner
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li>
                            <a class="dropdown-item" href="{{ url('admin/flatowner/') }}">
                                Flat Owner List
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.flatowner.create') }}">
                                Add Flate Owner
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="btn bg-gradient dropdown-toggle text-dark" data-bs-toggle="dropdown"
                        id="navbarDropdownMenuLink2">
                        <i class="material-symbols-rounded">instant_mix</i>&nbsp;&nbsp;Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li>
                            <a class="dropdown-item" href="{{ url('admin/bills/electricities/') }}">
                                Electricity Bill
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('admin/bills/water/') }}">
                                Water Bill
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="btn bg-gradient dropdown-toggle text-dark" data-bs-toggle="dropdown"
                        id="navbarDropdownMenuLink2">
                        <i class="material-symbols-rounded">receipt_long</i>&nbsp;&nbsp;Invoice
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li>
                            <a class="dropdown-item" href="#">
                                Invoice List
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="btn bg-gradient dropdown-toggle text-dark" data-bs-toggle="dropdown"
                        id="navbarDropdownMenuLink2">
                        <i class="material-symbols-rounded">bookmark</i>&nbsp;&nbsp;Tickets
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li>
                            <a class="dropdown-item" href="{{ url('admin/tickets/') }}">
                                Tickets List
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="btn bg-gradient dropdown-toggle text-dark" data-bs-toggle="dropdown"
                        id="navbarDropdownMenuLink2">
                        <i class="material-symbols-rounded">factory</i>&nbsp;&nbsp;Renovation
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li>
                            <a class="dropdown-item" href="{{ url('admin/renovation/') }}">
                                Renovation List
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a href="#" class="btn bg-gradient dropdown-toggle text-dark" data-bs-toggle="dropdown"
                    id="navbarDropdownMenuLink2">
                    <i class="material-symbols-rounded">note_alt</i>&nbsp;&nbsp;Notice
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <li>
                        <a class="dropdown-item" href="{{ url('admin/notice/') }}">
                            Notice List
                        </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('admin.notice.create') }}">
                          Add Notice
                      </a>
                  </li>
                </ul>
            </div>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a href="#" class="btn bg-gradient dropdown-toggle text-dark" data-bs-toggle="dropdown"
                    id="navbarDropdownMenuLink2">
                    <i class="material-symbols-rounded">settings</i>&nbsp;&nbsp;Setting
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <li>
                        <a class="dropdown-item" href="{{ url('admin/updateProfile/') }}">
                            Update Profile
                        </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ url('admin/gst/') }}">
                          GST Detail
                      </a>
                  </li>
                </ul>
            </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="btn bg-gradient text-dark" href="{{ route('admin.logout') }}">
                    <i class="material-symbols-rounded opacity-5">login</i>
                    <span class="nav-link-text ms-1">Sign Out</span>
                </a>
              </div>
            </li>

        </ul>
    </div>
    {{-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn btn-outline-dark mt-4 w-100"
                href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree"
                type="button">Documentation</a>
            <a class="btn bg-gradient-dark w-100"
                href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree"
                type="button">Upgrade to pro</a>
        </div>
    </div> --}}
</aside>
