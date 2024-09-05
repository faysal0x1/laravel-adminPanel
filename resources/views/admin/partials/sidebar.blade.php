<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <h4 class="logo-text"> DIU</h4>

        </div>
        <div>
            <h4 class="logo-text"> Medical</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">


        <li>
            <a href="{{ url('/') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Side Content</li>

        {{-- Posts --}}

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Posts</div>
            </a>
            <ul>
                <li> <a href="{{ route('post.create') }}">
                        <i class="bx bx-right-arrow-alt"></i>
                        Add New Posts
                    </a>
                </li>
                <li> <a href="{{ route('post.index') }}"><i class="bx bx-right-arrow-alt"></i>
                        List of Posts
                    </a>
                </li>

            </ul>
        </li>



        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>
                <li>
                    <a href="{{ url('/laratrust') }}">
                        <i class="bx bx-right-arrow-alt"></i>
                        Role Management
                    </a>
                </li>



                {{-- <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-menu"></i>
                        </div>
                        <div class="menu-title">CMS Pages</div>
                    </a>
                    <ul>


                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Blogs</a>
                            <ul>

                                <li> <a href="">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        All Blogs</a>
                                </li>

                                <li> <a href=""><i class="bx bx-right-arrow-alt"></i>
                                        Add New Blog
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </li>
        {{-- @endrole --}}
    </ul>




</div>
