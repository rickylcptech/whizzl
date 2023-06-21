<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('/img/icon.ico') }}" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')
    <title>BAKSO Duckcapil - @yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!-- Fonts and icons -->
    <script src="{{ asset('/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['{{ asset('/css/fonts.min.css') }}']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <link rel="stylesheet" href="{{ asset('/css/akura.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/atlantis.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/select2.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/vendors/lightgallery/lightgallery.min.css') }}">
    <style>
        .label-status {
            text-transform: capitalize;
        }

        .btn-sm-datatable {
            font-size: 14px;
            padding: 1px 5px;
        }

        .text-sm {
            font-size: 11px;
        }

        .dt-buttons {
            margin-bottom: 20px
        }

        .accordion .card {
            background: #ffffff !important;
        }

        @media (min-width: 992px) {

            .modal-lg,
            .modal-xl {
                max-width: 800px;
            }
        }

        @media (min-width: 1200px) {
            .modal-xl {
                max-width: 1140px;
            }
        }
    </style>
    @stack('extra-style')
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="/" class="logo text-white" style="font-size: 13px;font-weight:900">
                    <img src="{{ asset('/images/logo.png') }}" width="96" alt="navbar brand"
                        class="navbar-brand img-fluid">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">

                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
                                aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">

                            <ul class="dropdown-menu messages-notif-box animated fadeIn"
                                aria-labelledby="messageDropdown">
                                <li>
                                    <div class="dropdown-title d-flex justify-content-between align-items-center">
                                        Messages
                                        <a href="#" class="small">Mark all as read</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/jm_denis.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jimmy Denis</span>
                                                    <span class="block">
                                                        How are you ?
                                                    </span>
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/chadengle.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Chad</span>
                                                    <span class="block">
                                                        Ok, Thanks !
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/mlane.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jhon Doe</span>
                                                    <span class="block">
                                                        Ready for the meeting today...
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/talha.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Talha</span>
                                                    <span class="block">
                                                        Hi, Apa Kabar ?
                                                    </span>
                                                    <span class="time">17 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all messages<i
                                            class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                {{--  <span class="notification">{{ auth()->user()->unreadNotifications->count() }} </span>  --}}
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    {{--  <div class="dropdown-title">You have {{ auth()->user()->unreadNotifications->count() }}  new notification</div>  --}}
                                </li>
                                <li>
                                    <div class="notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            {{--  @foreach (auth()->user()->unreadNotifications as $notification)
                                                <a href="{{ route('notif.read', $notification->id) }}">
                                                    <div class="notif-icon notif-warning"> <i class="fa fa-bell"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            {{ $notification->data['title'] }}
                                                        </span>
                                                        <span class="time">{{ $notification->created_at }}</span>
                                                    </div>
                                                </a>
                                            @endforeach  --}}

                                        </div>
                                    </div>
                                </li>
                                {{--  <li>
                                    <a class="see-all" href="{{ route('notif.index') }}">See all notifications<i
                                            class="fa fa-angle-right"></i> </a>
                                </li>  --}}
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-header">
                                    <span class="title mb-1">Quick Actions</span>
                                    <span class="subtitle op-8">Shortcuts</span>
                                </div>
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="row m-0">
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-file-1"></i>
                                                    <span class="text">Generated Report</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-database"></i>
                                                    <span class="text">Create New Database</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-pen"></i>
                                                    <span class="text">Create New Post</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-interface-1"></i>
                                                    <span class="text">Create New Task</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-list"></i>
                                                    <span class="text">Completed Tasks</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-file"></i>
                                                    <span class="text">Create New Invoice</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="{{ asset('images/user.png') }}" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        {{-- <div class="user-box">
											<div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div> --}}
                                    </li>
                                    <li>

                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <div class="dropdown-divider"></div>
                                            <button class="dropdown-item" style="cursor:pointer">Sign Out</button>
                                        </form>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>


        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    @if (\Auth::user())
                        <div class="user">
                            <div class="avatar-sm float-left mr-2">
                                <img src="{{ asset('images/user.png') }}" alt="..."
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="info mx-auto">
                                <a data-toggle="collapse" href="#collapseExample">
                                    <span>
                                        {{ Auth::user()->name }}

                                        <span class="user-level"> {{ Auth::user()->roles->pluck('name')[0] }}
                                        </span>
                                        <p>{{ date('Y-m-d H:m') }}</p>
                                    </span>
                                </a>

                                <div class="clearfix"></div>


                            </div>
                        </div>
                    @endif

                    <ul class="nav nav-primary">
                        <li class="nav-item {{ Request::is('dashboard/home*') ? 'active' : '' }} ">
                            <a href="{{ route('home.index') }}">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::is('dashboard/akta*') ? 'active' : '' }} ">
                            <a href="{{ route('akta.index') }}">
                                <i class="fas fa-address-card"></i>
                                <p>AKTA</p>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::is('dashboard/kia*') ? 'active' : '' }} ">
                            <a href="{{ route('kia.index') }}">
                                <i class="fas fa-child"></i>
                                <p>KIA</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                @yield('content')
            </div>
        </div>

        {{--  <footer class="footer">
			<div class="container-fluid">

				<div class="copyright ml-auto">

				</div>
			</div>
		</footer>  --}}
    </div>

    <script src="{{ asset('/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/core/popper.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
        integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <script src="{{ asset('/js/plugin/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
    <script src="{{ asset('/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('/js/atlantis.js') }}"></script>
    <script src="{{ asset('/js/plugin/moment/moment.min.js') }}"></script>

    <script src="{{ asset('/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('/js/plugin/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/js/plugin/datatables-button/dataTables.buttons.min.js') }}"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-datatables-checkboxes@1.2.13/js/dataTables.checkboxes.min.js"></script>
    <script src="{{ asset('/js/plugin/datatables-button/jszip.min.js') }}"></script>
    <script src="{{ asset('/js/plugin/datatables-button/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/js/plugin/datatables-button/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/js/plugin/datatables-button/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/js/plugin/datatables-button/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/vendors/lightgallery/lightgallery.min.js') }}"></script>
    <script src="{{ asset('/vendors/lightgallery/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('/vendors/lightgallery/lg-thumbnail.min.js') }}"></script>
    <script src="{{ asset('/vendors/lightgallery/lg-fullscreen.min.js') }}"></script>

    <script src="{{ asset('/js/akura.js') }}"></script>
    @stack('extra-script')
    <script type="text/javascript">
        $('.select2').select2({
            theme: "bootstrap"
        });

        $(".datepicker").datepicker({
            dateFormat: 'dd-mm-yy',
            date: 'dd-mm-yy',
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".light-gallery").lightGallery({

            animateThumb: true,
            showThumbByDefault: true,
            selector: 'img',
            thumbnail: true,
            exThumbImage: "src",
        });

        @stack('extra-js')
    </script>

</body>

</html>
