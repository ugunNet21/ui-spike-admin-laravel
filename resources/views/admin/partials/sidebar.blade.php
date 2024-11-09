<aside class="left-sidebar with-vertical">
    <!-- ---------------------------------- -->
    <!-- Start Vertical Layout Sidebar -->
    <!-- ---------------------------------- -->
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="../dark/index.html" class="text-nowrap logo-img">
            <img src="{{ asset('template/assets/images/logos/logo-light.svg') }}" class="dark-logo" alt="Logo-Dark" />
            <img src="{{ asset('template/assets/images/logos/logo-dark.svg') }}" class="light-logo" alt="Logo-light" />
        </a>
        <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
            <i class="ti ti-x"></i>
        </a>
    </div>

    <div class="scroll-sidebar" data-simplebar>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="mb-0">

                <!-- ============================= -->
                <!-- Home -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold-duotone"
                        class="nav-small-cap-icon fs-5"></iconify-icon>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link primary-hover-bg" href="../dark/index.html"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                            <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Dashboard</span>
                    </a>
                </li>

                <!-- ============================= -->
                <!-- Apps -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold-duotone"
                        class="nav-small-cap-icon fs-5"></iconify-icon>
                    <span class="hide-menu">Apps</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                            <iconify-icon icon="solar:pie-chart-3-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Blog</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../dark/blog-posts.html" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Posts</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../dark/blog-detail.html" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Details</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow danger-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                            <iconify-icon icon="solar:user-circle-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">User Profile</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../dark/page-user-profile.html" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Profile One</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link primary-hover-bg" href="../dark/app-chat.html"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                            <iconify-icon icon="solar:chat-round-unread-line-duotone"
                                class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Chat</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link secondary-hover-bg" href="../dark/app-notes.html"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
                            <iconify-icon icon="solar:notification-unread-lines-line-duotone"
                                class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Notes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link success-hover-bg" href="../dark/app-contact.html"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-success-subtle rounded-1">
                            <iconify-icon icon="solar:phone-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Contact Table</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link warning-hover-bg" href="../dark/app-contact2.html"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                            <iconify-icon icon="solar:list-check-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Contact List</span>
                    </a>
                </li>

                <!-- ============================= -->
                <!-- Pages -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold-duotone"
                        class="nav-small-cap-icon fs-5"></iconify-icon>
                    <span class="hide-menu">Pages</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link indigo-hover-bg" href="../dark/page-pricing.html"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                            <iconify-icon icon="solar:dollar-minimalistic-line-duotone"
                                class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Pricing</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link info-hover-bg" href="../dark/page-faq.html" aria-expanded="false">
                        <span class="aside-icon p-2 bg-info-subtle rounded-1">
                            <iconify-icon icon="solar:question-circle-line-duotone"
                                class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">FAQ</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link primary-hover-bg" href="../dark/page-account-settings.html"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                            <iconify-icon icon="solar:user-circle-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Account Setting</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link danger-hover-bg" href="../landingpage/index.html"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                            <iconify-icon icon="solar:window-frame-line-duotone"
                                class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Landing Page</span>
                    </a>
                </li>

                <!-- ============================= -->
                <!-- SchoolPages -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold-duotone"
                        class="nav-small-cap-icon fs-5"></iconify-icon>
                    <span class="hide-menu">SchoolPages</span>
                </li>

                <!-- =================== -->
                <!-- Teachers -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow success-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-success-subtle rounded-1">
                            <iconify-icon icon="solar:lightbulb-bolt-line-duotone"
                                class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Teachers</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../dark/all-teacher.html" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">All Teachers</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- =================== -->
                <!-- Exam -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                            <iconify-icon icon="solar:file-text-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Exam</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../dark/exam-schedule.html" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Exam Schedule</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../dark/exam-result.html" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu"> Exam Result</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- =================== -->
                <!-- Students -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow danger-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                            <iconify-icon icon="solar:square-academic-cap-line-duotone"
                                class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Students</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../dark/all-student.html" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">All Students</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../dark/student-details.html" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu"> Students Details</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- =================== -->
                <!-- Classes -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link indigo-hover-bg my-3" href="../dark/classes.html"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                            <iconify-icon icon="solar:planet-3-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Classes</span>
                    </a>
                </li>

                <!-- =================== -->
                <!-- Attendance -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link info-hover-bg" href="../dark/attendance.html"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-info-subtle rounded-1">
                            <iconify-icon icon="solar:file-check-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Attendance</span>
                    </a>
                </li>

                <!-- =================== -->
                <!-- Form Repeater -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link primary-hover-bg" href="../dark/form-repeater.html"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                            <iconify-icon icon="solar:star-circle-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Form Repeater</span>
                    </a>
                </li>

                <!-- ============================= -->
                <!-- Charts -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold-duotone"
                        class="nav-small-cap-icon fs-5"></iconify-icon>
                    <span class="hide-menu">Charts</span>
                </li>

                <!-- =================== -->
                <!-- Apex Chart -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow primary-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                            <iconify-icon icon="solar:dropper-minimalistic-2-line-duotone"
                                class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Apex Charts</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../dark/chart-apex-line.html" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Line Chart</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- ============================= -->
                <!-- Sample Pages -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold-duotone"
                        class="nav-small-cap-icon fs-5"></iconify-icon>
                    <span class="hide-menu">Pages</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow danger-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                            <iconify-icon icon="solar:file-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Pages</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">

                        <li class="sidebar-item">
                            <a href="../dark/pages-gallery.html" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Gallery</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- ============================= -->
                <!-- Documentation -->
                <!-- ============================= -->
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link success-hover-bg" href="../docs/index.html"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-success-subtle rounded-1">
                            <iconify-icon icon="solar:file-text-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Version 1.0</span>
                    </a>
                </li>

                <!-- ============================= -->
                <!-- OTHER -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold-duotone"
                        class="nav-small-cap-icon fs-5"></iconify-icon>
                    <span class="hide-menu">Other</span>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>

    <div class=" fixed-profile mx-3 mt-3">
        <div class="card bg-primary-subtle mb-0 shadow-none">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between gap-3">
                    <div class="d-flex align-items-center gap-3">
                        <img src="{{ asset('template/assets/images/profile/user-1.jpg') }}" width="45" height="45"
                            class="img-fluid rounded-circle" alt="" />
                        <div>
                            <h5 class="mb-1">Mike</h5>
                            <p class="mb-0">Admin</p>
                        </div>
                    </div>
                    <a href="../dark/authentication-login.html" class="position-relative"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Logout">
                        <iconify-icon icon="solar:logout-line-duotone" class="fs-8"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------- -->
    <!-- Start Vertical Layout Sidebar -->
    <!-- ---------------------------------- -->
</aside>
