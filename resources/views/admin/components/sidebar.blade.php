<aside class="main-sidebar hidden-print">
    <section class="sidebar" id="sidebar-scroll">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="nav-level">--- Navigation</li>
            <li class="active treeview">
                <a class="waves-effect waves-dark" href="{{ route('dashboard') }}">
                    <i class="icon-speedometer"></i><span> Dashboard</span>
                </a>
            </li>

            {{-- Doctors --}}

            <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                        class="icon-briefcase"></i><span>Doctors View</span><i class="icon-arrow-down"></i>
                </a>
                <ul class="treeview-menu">

                    <li class="nav-item menu-items">
                        <a class= "nav-link" href="{{ route('admin.doctor.index') }}">
                            <span class="menu-icon">
                                <i class="mdi mdi-file-document-box"></i>
                            </span>
                            <span class="menu-title">Doctor List </span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class= "nav-link" href="{{ route('admin.doctor.create') }}">
                            <span class="menu-icon">
                                <i class="mdi mdi-file-document-box"></i>
                            </span>
                            <span class="menu-title">Add New Doctors</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Blogs --}}
            <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                        class="icon-briefcase"></i><span>Blogs View</span><i class="icon-arrow-down"></i>
                </a>
                <ul class="treeview-menu">

                    <li class="nav-item menu-items">
                        <a class= "nav-link" href="{{ route('admin.blogs') }}">
                            <span class="menu-icon">
                                <i class="mdi mdi-file-document-box"></i>
                            </span>
                            <span class="menu-title">Blog List </span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class= "nav-link" href="{{ route('admin.blogCreate') }}">
                            <span class="menu-icon">
                                <i class="mdi mdi-file-document-box"></i>
                            </span>
                            <span class="menu-title">Add New Blogs</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Blog Ends -->
            <!-- Blog Category Start -->
            <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                        class="icon-briefcase"></i><span>Blog Categories View</span><i class="icon-arrow-down"></i>
                </a>
                <ul class="treeview-menu">

                    <li class="nav-item menu-items">
                        <a class= "nav-link" href="{{ route('admin.categories') }}">
                            <span class="menu-icon">
                                <i class="mdi mdi-file-document-box"></i>
                            </span>
                            <span class="menu-title">Category List </span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class= "nav-link" href="{{ route('admin.categoryCreate') }}">
                            <span class="menu-icon">
                                <i class="mdi mdi-file-document-box"></i>
                            </span>
                            <span class="menu-title">Add New Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                        class="icon-briefcase"></i><span>Testimonial View</span><i class="icon-arrow-down"></i>
                </a>
                <ul class="treeview-menu">

                    <li class="nav-item menu-items">
                        <a class= "nav-link" href="{{ route('admin.testimonials') }}">
                            <span class="menu-icon">
                                <i class="mdi mdi-file-document-box"></i>
                            </span>
                            <span class="menu-title">Testimonial List </span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class= "nav-link" href="{{ route('admin.testimonialCreate') }}">
                            <span class="menu-icon">
                                <i class="mdi mdi-file-document-box"></i>
                            </span>
                            <span class="menu-title">Add New Testimonial</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Blog Category Ends -->


        </ul>
    </section>
</aside>
