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
                <a class=" btn bg-gradient text-dark" href="{{url('/client/dashboard')}}">
                  <i class="material-symbols-rounded">dashboard_customize</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class=" btn bg-gradient text-dark" href="{{url('/client/notice/')}}">
                  <i class="material-symbols-rounded">news</i>
                    <span class="nav-link-text ms-1">Notice Board</span>
                </a>
            </li>
            <li class="nav-item">
                <a class=" btn bg-gradient text-dark" href="{{url('/client/profile')}}">
                  <i class="material-symbols-rounded">account_circle</i>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>

          
            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="btn bg-gradient dropdown-toggle text-dark" data-bs-toggle="dropdown"
                        id="navbarDropdownMenuLink2">
                        <i class="material-symbols-rounded">bookmark</i>&nbsp;&nbsp;Tickets
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li>
                            <a class="dropdown-item" href="{{ url('/client/tickets/') }}">
                                Tickets List
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('client.tickets.create') }}">
                                Add Ticket
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
           
            <li class="nav-item">
                <div class="dropdown">
                    <a class="btn bg-gradient dropdown-toggle text-dark" data-bs-toggle="dropdown"
                    id="navbarDropdownMenuLink2" href="#">
                        <i class="material-symbols-rounded">request_quote</i>
                          <span class="nav-link-text ms-1">Invoice</span>
                      </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li>
                            <a class="dropdown-item" href="#">
                                Paid Invoice
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Unpaid
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="btn bg-gradient dropdown-toggle text-dark" data-bs-toggle="dropdown"
                        id="navbarDropdownMenuLink2">
                        <i class="material-symbols-rounded">edit_note</i>Renovation Request
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li>
                            <a class="dropdown-item" href="{{ url('/client/renovation/') }}">
                                Renovation List
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('client.renovation.create') }}">
                                Add Renovation
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
           
            <li class="nav-item">
              <div class="dropdown">
                <a class="btn bg-gradient text-dark" href="{{ route('client.logout') }}">
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
