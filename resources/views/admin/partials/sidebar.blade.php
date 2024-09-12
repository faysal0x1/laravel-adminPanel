<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('site/logo.png') }}" class="logo-ic w-75" alt="logo icon">
        </div>
        <div>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('/admin/dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i></div>
                <div class="menu-title">Posts</div>
            </a>
            <ul>
                    <li>
                        <a href="{{ route('post.index') }}"><i class="bx bx-right-arrow-alt"></i>List of Posts</a>
                    </li>
                    <li>
                        <a href="{{ route('post.create') }}"><i class="bx bx-right-arrow-alt"></i>Add Post</a>
                    </li>
            </ul>
        </li>

        @permission(['can_manage_user', 'can_manage_role', 'can_manage_permission'])
            <li class="menu-label">Settings</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i></div>
                    <div class="menu-title">Settings</div>
                </a>
                <ul>
                    @permission('can_manage_role')
                        <li>
                            <a href="{{ url('/laratrust') }}"><i class="bx bx-right-arrow-alt"></i>Role Assignment</a>
                        </li>
                    @endpermission
                </ul>
            </li>
        @endpermission

        @permission('can_see_user')
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i></div>
                    <div class="menu-title">Users</div>
                </a>
                <ul>
                    @permission('can_see_user')
                        <li>
                            <a href="{{ route('user.index') }}"><i class="bx bx-right-arrow-alt"></i>List of Users</a>
                        </li>
                    @endpermission
                    @permission('can_add_user')
                        <li>
                            <a href="{{ route('user.create') }}"><i class="bx bx-right-arrow-alt"></i>Add User</a>
                        </li>
                    @endpermission
                </ul>
            </li>
        @endpermission
    </ul>



</div>
