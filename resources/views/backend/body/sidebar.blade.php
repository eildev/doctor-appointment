<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend') }}/assets/images/logo-icon.png"  class="logo-icon" alt="logo icon">
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
            <a href="{{url('/admin/dashboard')}}" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
           
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Home Slider</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.slider') }}"><i class="bx bx-right-arrow-alt"></i>Add Slider</a>
                </li>
                <li> <a href="{{ route('slider.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Slider</a>
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
                <div class="menu-title">Review</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.review') }}"><i class="bx bx-right-arrow-alt"></i>Add Review</a>
                </li>
                <li> <a href="{{ route('view.review') }}"><i class="bx bx-right-arrow-alt"></i>All Review</a>
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
                <li> <a href="{{route('view.contact.info')}}"><i class="bx bx-right-arrow-alt"></i>Manage Contact Info</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Others</li>
  
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fab fa-blogger"></i>
                </div>
                <div class="menu-title">Manage Blog</div>
            </a>
            <ul class="mm-collapse">
                    {{-- //Blog Category --}}
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon">
                            <i class="fab fa-slack"></i>
                        </div>
                        <div class="menu-title">Blog Category</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('blog.category.view') }}"><i class="bx bx-right-arrow-alt"></i>Add Blog
                                Category</a>
                        </li>
                        <li>
                            <a href="{{ route('blog.all.category.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Blog
                                Category</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon">
                            <i class="fas fa-blog"></i>
                        </div>
                        <div class="menu-title">Blog Post</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('blog.post.add.view') }}"><i class="bx bx-right-arrow-alt"></i>Add Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('blog.all.post.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Blog</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Manage FAQs</div>
            </a>
            <ul>
                <li> <a href="{{route('faq.add')}}"><i class="bx bx-right-arrow-alt"></i>Add FAQ</a>
                </li>
                <li> <a href="{{route('faq.view')}}"><i class="bx bx-right-arrow-alt"></i>Manage Faq</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
