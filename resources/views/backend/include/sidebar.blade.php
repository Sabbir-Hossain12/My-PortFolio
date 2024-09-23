<!-- ========== Left Sidebar Start ========== -->

<style>

    #sidebar-menu > ul > li
    {
        margin-bottom: 10px;
        border-bottom: 1px solid #d2d2e0;
    }
</style>

<div class="vertical-menu">

    <div data-simplebar class="h-100">
        
     

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li class=""> 
                    <a href="">
                        <i class="fa-solid fa-home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fa-solid fa-user-secret"></i>
                        <span data-key="t-apps">Banner</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('admin.banner.create')}}">
                                <span data-key="t-calendar">Create Banner</span>
                            </a>
                        </li> 
                        <li>
                            <a href="{{route('admin.banner.index')}}">
                                <span data-key="t-calendar">Manage Banner</span>
                            </a>
                        </li>
                   

                       


                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fa-solid fa-user-secret"></i>
                        <span data-key="t-apps">Portfolio</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('admin.portfolio.create')}}">
                                <span data-key="t-calendar">Create Portfolio</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.portfolio.index')}}">
                                <span data-key="t-calendar">Manage Portfolio</span>
                            </a>
                        </li>





                    </ul>
                </li>



                
        

            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->