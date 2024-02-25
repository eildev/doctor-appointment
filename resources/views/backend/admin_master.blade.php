    {{-- Css --}}
@include('backend.body.css');

        <!-- Begin page -->
        <div class="wrapper">

             <!-- Left Sidebar Start -->
            @include('backend.body.sidebar');

           {{-- //Header --}}
           @include('backend.body.header');

                {{-- Main --}}
                <div class="page-wrapper">
                    <div class="page-content">
                    @yield('admin')
                </div>
            </div>
            <!-- end main content-->
            {{-- Footer --}}
            @include('backend.body.footer');
        </div>
  {{-- Switcher --}}
  @include('backend.body.switcher');
   <!-- JAVASCRIPT -->
   @include('backend.body.js');
