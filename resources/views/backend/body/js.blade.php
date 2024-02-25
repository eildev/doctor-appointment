      <!-- JAVASCRIPT -->
      <script src="{{ asset('backend') }}/assets/libs/jquery/jquery.min.js"></script>
      <script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('backend') }}/assets/libs/metismenu/metisMenu.min.js"></script>
      <script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
      <script src="{{ asset('backend') }}/assets/libs/node-waves/waves.min.js"></script>

      <!-- apexcharts -->
      <script src="{{ asset('backend') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

      <!-- jquery.vectormap map -->
      <script src="{{ asset('backend') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js">
      </script>
      <script src="{{ asset('backend') }}/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js">
      </script>

      <!-- Required datatable js -->
      <script src="{{ asset('backend') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="{{ asset('backend') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

      <!-- Responsive examples -->
      <script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
      <script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
      </script>
      <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>

      <!-- App js -->
      <script src="{{ asset('backend') }}/assets/js/app.js"></script>
      <script src="{{ asset('backend') }}/assets/js/pages/datatables.init.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      {{-- tags input  --}}
      <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

      <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>
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


          //  image omload function
          $(document).ready(function() {
              $('#image').change(function(e) {
                  var reader = new FileReader();
                  reader.onload = function(e) {
                      $('#showImage').attr('src', e.target.result);
                  }
                  reader.readAsDataURL(e.target.files['0']);
              });
          });

          $(document).ready(function() {
              $('#image2').change(function(e) {
                  var reader = new FileReader();
                  reader.onload = function(e) {
                      $('#showImage2').attr('src', e.target.result);
                  }
                  reader.readAsDataURL(e.target.files['0']);
              });
          });
      </script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

      <script src="{{ asset('backend/assets/js/code.js') }}"></script>
      <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>

      <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
      <style type="text/css">
          .bootstrap-tagsinput .tag {
              margin-right: 2px;
              color: #b70000;
              font-weight: 700px;
          }
      </style>
      </body>

      </html>
//////////////
<script src="{{ asset('backend') }}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/jquery-knob/excanvas.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/jquery-knob/jquery.knob.js"></script>
  <script>
      $(function() {
          $(".knob").knob();
      });
  </script>
  <script src="{{ asset('backend') }}/assets/js/index.js"></script>
<!--app JS-->
<script src="{{ asset('backend') }}/assets/js/app.js"></script>
<script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/code.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

      <script src="{{ asset('backend') }}/assets/js/bootstrap.bundle.min.js"></script>
      <!--plugins-->
      <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
      <script src="{{ asset('backend') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
      <script src="{{ asset('backend') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
      <script src="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
      <script src="{{ asset('backend') }}/assets/plugins/chartjs/js/Chart.min.js"></script>
      <script src="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
      <script src="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="{{ asset('backend') }}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
      <script src="{{ asset('backend') }}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
      <script src="{{ asset('backend') }}/assets/plugins/jquery-knob/excanvas.js"></script>
      <script src="{{ asset('backend') }}/assets/plugins/jquery-knob/jquery.knob.js"></script>
      <script>
          $(function() {
              $(".knob").knob();
          });
      </script>
      <script src="{{ asset('backend') }}/assets/js/index.js"></script>
      <!--app JS-->
      <script src="{{ asset('backend') }}/assets/js/app.js"></script>
      <script src="{{ asset('backend/assets/js/code.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>
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


          //  image omload function
          $(document).ready(function() {
              $('#image').change(function(e) {
                  var reader = new FileReader();
                  reader.onload = function(e) {
                      $('#showImage').attr('src', e.target.result);
                  }
                  reader.readAsDataURL(e.target.files['0']);
              });
          });
          $(document).ready(function() {
              $('#image2').change(function(e) {
                  var reader = new FileReader();
                  reader.onload = function(e) {
                      $('#showImage2').attr('src', e.target.result);
                  }
                  reader.readAsDataURL(e.target.files['0']);
              });
          });
      </script>

      </body>

      </html>
