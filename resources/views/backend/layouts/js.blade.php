  <!-- DataTables  & Plugins -->
  <script src={{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}></script>
  <script src={{ asset('admin/plugins/jszip/jszip.min.js') }}></script>
  <script src={{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}></script>
  <script src={{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}></script>
  <script src={{ asset('admin/dist/js/demo.js') }}></script>
  <script src={{ asset('admin/plugins/jquery/jquery.min.js') }}></script>
  <script src={{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}></script>
  <script>
      $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src={{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ asset('admin/plugins/chart.js/Chart.min.js') }}></script>
  <script src={{ asset('admin/plugins/sparklines/sparkline.js') }}></script>
  <script src={{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}></script>
  <script src={{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}></script>
  <script src={{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}></script>
  <script src={{ asset('admin/plugins/moment/moment.min.js') }}></script>
  <script src={{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}></script>
  <script src={{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}></script>
  <script src={{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}></script>
  <script src={{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
  <script src={{ asset('admin/dist/js/adminlte.js') }}></script>
  <script src={{ asset('admin/dist/js/demo.js') }}></script>
  <script src={{ asset('admin/dist/js/pages/dashboard.js') }}></script>


  {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.js"></script>
  <script src={{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}></script>
  <script src={{ asset('admin/plugins/jszip/jszip.min.js') }}></script>
  <script src={{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}></script>
  <script src={{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}></script>
  <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}></script>
  <script>
      $(function() {
          $("#example1").DataTable({
              "responsive": true,
              "lengthChange": true,
              "autoWidth": true,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": true,
              "responsive": true,
          });
      });
  </script>
  <script>
      $(Document).ready(function() {
          $('.alert').fadeOut(6000);
      });
  </script>
  @yield('js')
