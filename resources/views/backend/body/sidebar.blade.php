<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend') }}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text fs-5">Dr Appoinment</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Default</a>
                </li>
                <li> <a href="dashboard-eCommerce.html"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Dr Info</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.dr.info') }}"><i class="bx bx-right-arrow-alt"></i>Add Dr Info</a>
                </li>
                <li> <a href="{{ route('view.dr.info') }}"><i class="bx bx-right-arrow-alt"></i>Manage Dr Info</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Services</div>
            </a>
            <ul>
                <li> <a href="{{ route('service.add') }}"><i class="bx bx-right-arrow-alt"></i>Add Services</a>
                </li>
                <li> <a href="{{ route('service.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Services</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>

                <div class="menu-title">Education & Training</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.education.training') }}"><i class="bx bx-right-arrow-alt"></i>Add Edu
                        Training</a>
                </li>
                <li> <a href="{{ route('view.education.training') }}"><i class="bx bx-right-arrow-alt"></i>Manage Edu
                        Training</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Gallery Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('category.add') }}"><i class="bx bx-right-arrow-alt"></i>Add Category</a>
                </li>
                <li> <a href="{{ route('category.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Category</a>
                </li>


            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Gallery</div>
            </a>
            <ul>
                <li> <a href="{{ route('gallery.add') }}"><i class="bx bx-right-arrow-alt"></i>Add Gallery </a>
                </li>
                <li> <a href="{{ route('gallery.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Gallery </a>
                <li> <a href="{{ route('add.education.training') }}"><i class="bx bx-right-arrow-alt"></i>Add Edu &
                        Training</a>
                </li>
                <li> <a href="{{ route('view.education.training') }}"><i class="bx bx-right-arrow-alt"></i>Manage Edu &
                        Training</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Patient</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.patient') }}"><i class="bx bx-right-arrow-alt"></i>Add Patient</a>
                </li>
                <li> <a href="{{ route('patient.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Patient</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Appointment</div>
            </a>
            <ul>
                <li> <a href="{{ route('appointment.view') }}"><i class="bx bx-right-arrow-alt"></i>All Appointment</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Consulting Center</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.consulting.center') }}"><i class="bx bx-right-arrow-alt"></i>Add Consulting C.</a>
                </li>
                <li> <a href="{{route('view.consulting.center')}}"><i class="bx bx-right-arrow-alt"></i>All Consulting C.</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Image Or Video</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.image.video') }}"><i class="bx bx-right-arrow-alt"></i>Add Image/Video</a>
                </li>
                <li> <a href="{{route('view.image.video')}}"><i class="bx bx-right-arrow-alt"></i>View Image/Video</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Social Link</div>
            </a>
            <ul>
                <li> <a href="{{ route('social.icon') }}"><i class="bx bx-right-arrow-alt"></i>Add Social</a>
                </li>
                <li> <a href="{{route('manage.social.icon')}}"><i class="bx bx-right-arrow-alt"></i>Manage Social</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Hot Link</div>
            </a>
            <ul>
                <li> <a href="{{route('add.hot.link')}}"><i class="bx bx-right-arrow-alt"></i>Add Hot link</a>
                </li>
                <li> <a href="{{route('view.hot.link')}}"><i class="bx bx-right-arrow-alt"></i>Manage Hot link</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Contact Info</div>
            </a>
            <ul>
                <li> <a href="{{route('add.contact.info')}}"><i class="bx bx-right-arrow-alt"></i>Add Contact Info</a>
                </li>
                {{-- <li> <a href="{{route('view.contact.info')}}"><i class="bx bx-right-arrow-alt"></i>Manage Hot link</a>
                </li> --}}
            </ul>
        </li>
        <li class="menu-label">Overview</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Dr Manager</div>
            </a>
            <ul>
                <li> <a href="{{ route('doctor.view') }}"><i class="bx bx-right-arrow-alt"></i>All Doctor</a>
                </li>
                <li> <a href="{{ route('patient.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Doctor</a>
                </li>
            </ul>
        </li>

        <li class="menu-label">UI Elements</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">eCommerce</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Products</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Product Details</a>
                </li>

            </ul>
        </li>


        <li>
            <a href="faq.html">
                <div class="parent-icon"><i class="bx bx-help-circle"></i>
                </div>
                <div class="menu-title">FAQ</div>
            </a>
        </li>
        <li>
            <a href="pricing-table.html">
                <div class="parent-icon"><i class="bx bx-diamond"></i>
                </div>
                <div class="menu-title">Pricing</div>
            </a>
        </li>
        <li class="menu-label">Charts & Maps</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Charts</div>
            </a>
            <ul>
                <li> <a href="charts-apex-chart.html"><i class="bx bx-right-arrow-alt"></i>Apex</a>
                </li>
                <li> <a href="charts-chartjs.html"><i class="bx bx-right-arrow-alt"></i>Chartjs</a>
                </li>
                <li> <a href="charts-highcharts.html"><i class="bx bx-right-arrow-alt"></i>Highcharts</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-map-alt"></i>
                </div>
                <div class="menu-title">Maps</div>
            </a>
            <ul>
                <li> <a href="map-google-maps.html"><i class="bx bx-right-arrow-alt"></i>Google Maps</a>
                </li>
                <li> <a href="map-vector-maps.html"><i class="bx bx-right-arrow-alt"></i>Vector Maps</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Others</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-menu"></i>
                </div>
                <div class="menu-title">Menu Levels</div>
            </a>
            <ul>
                <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level One</a>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level
                                Two</a>
                            <ul>
                                <li> <a href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Three</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="https://codervent.com/rukada/documentation/index.html" target="_blank">
                <div class="parent-icon"><i class="bx bx-folder"></i>
                </div>
                <div class="menu-title">Documentation</div>
            </a>
        </li>
        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
