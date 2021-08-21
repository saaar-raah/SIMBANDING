<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                </div>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/dashboard"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu"></span></li>

                {{-- <li class="sidebar-item"> <a class="sidebar-link" href="{{route('FAQAdmin.create')}}"
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Tambah FAQ
                        </span></a>
                </li> --}}
                <li class="sidebar-item">
                        <a href="{{route('FAQAdmin.index')}}" class="sidebar-link icon is-small has-text-warning">
                            <i class="far fa-question-circle fa-2X"></i>
                            <span class="hide-menu">FAQ</span>
                        </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('berkasAdmin.index')}}" class="sidebar-link icon is-small has-text-warning">
                        <i class="fas fa-archive"></i>
                        <span class="hide-menu">Berkas</span>
                    </a>
            </li>

                {{-- <li class="list-divider"></li> --}}

                {{-- <li class="sidebar-item"> <a class="sidebar-link" href="{{route('pengumumanAdmin.create')}}"
                    aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                        class="hide-menu">Tambah Pengumuman
                    </span></a>
            </li> --}}

                <li class="sidebar-item">
                    <a href="{{route('pengumumanAdmin.index')}}" class="sidebar-link icon is-small has-text-warning">
                        <i class="fas fa-bullhorn"></i>
                        <span class="hide-menu">Pengumuman</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route('alurAdmin.index')}}" class="sidebar-link icon is-small has-text-warning">
                        <i class="fas fa-arrow-up"></i>
                        <span class="hide-menu">Alur</span>
                    </a>
                </li>

                {{-- <li class="sidebar-item">
                    <a href="{{route('pesanAdmin.index')}}" class="sidebar-link icon is-small has-text-warning">
                        <i class="fas fa-inbox"></i>
                        <span class="hide-menu">Pesan</span>
                    </a>
                </li> --}}


            <li class="list-divider"></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>