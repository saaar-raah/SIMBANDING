<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/dashboard"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                {{-- <li class="sidebar-item"> <a class="sidebar-link" href="{{route('FAQAdmin.create')}}"
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Tambah FAQ
                        </span></a>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{route('FAQAdmin.index')}}"
                        aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i>
                        <span class="hide-menu">FAQ</span>
                    </a>
                </li>

                {{-- <li class="list-divider"></li> --}}

                {{-- <li class="sidebar-item"> <a class="sidebar-link" href="{{route('pengumumanAdmin.create')}}"
                    aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                        class="hide-menu">Tambah Pengumuman
                    </span></a>
            </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{route('pengumumanAdmin.index')}}"
                        aria-expanded="false"><i data-feather="message-square" class="feather-icon">
                        </i>
                        <span class="hide-menu">Pengumuman</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{route('alurAdmin.index')}}"
                        aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i>
                        <span class="hide-menu">Alur</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{route('pesanAdmin.index')}}"
                        aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i>
                        <span class="hide-menu">Pesan</span>
                    </a>
                </li>

            <li class="list-divider"></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>