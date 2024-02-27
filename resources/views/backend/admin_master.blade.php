<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('backend')}}/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="{{asset('backend')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('backend')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('backend')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('backend')}}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{asset('backend')}}/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('backend')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{asset('backend')}}/assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('backend')}}/assets/css/dark-theme.css" />
	<link rel="stylesheet" href="{{asset('backend')}}/assets/css/semi-dark.css" />
	<link rel="stylesheet" href="{{asset('backend')}}/assets/css/header-colors.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<title>Doctor  Appoinment</title>
</head>

<body>
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
   <!-- Bootstrap JS -->
	<script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/jquery-knob/excanvas.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/jquery-knob/jquery.knob.js"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{asset('backend')}}/assets/js/index.js"></script>
	<!--app JS-->

	<script src="{{asset('backend')}}/assets/js/app.js"></script>

    <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif

        $(document).ready(function() {
            $('#datatable').DataTable();
        });

    </script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
        //  image omload function
        $(document).ready(function() {
    $('#image').change(function(e) {
        var file = e.target.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            var fileType = file.type.split('/')[0]; // Get the type of file (image or video)
            if (fileType === 'image') {
                $('#showMedia').html('<img height="100" width="100" src="' + e.target.result + '" class="img-thumbnail" alt="Image">');
            } else if (fileType === 'video') {
                $('#showMedia').html('<video controls autoplay height="200" width="200"><source src="' + e.target.result + '" type="' + file.type + '">Your browser does not support the video tag.</video>');
            } else {
                $('#showMedia').html('Unsupported file type');
            }
        }

        reader.readAsDataURL(file);
    });
});

        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            $('#image2').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage2').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            //    delete function
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();

                var link = $(this).attr("href");

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                            'Deleted!',
                            'Your File has been deleted.',
                            'success'
                        )
                    }
                })

            });
        });
    </script>
</body>

</html>
