<footer class="main-footer text-center">
   <strong>Copyright &copy;2022 <a href="#">Hitek Hospital</a>.</strong>
   All rights reserved.

</footer>
<aside class="control-sidebar control-sidebar-dark"></aside>
</div>

<script>
   $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?php echo base_url('');?>include/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('');?>include/admin/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url('');?>include/admin/plugins/sparklines/sparkline.js"></script>
<script src="<?php echo base_url('');?>include/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('');?>include/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?php echo base_url('');?>include/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?php echo base_url('');?>include/admin/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('');?>include/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url('');?>include/admin/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url('');?>include/admin/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url('');?>include/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url('');?>include/admin/dist/js/adminlte.js"></script>
<script src="<?php echo base_url('');?>include/admin/dist/js/demo.js"></script>
<script src="<?php echo base_url('');?>include/admin/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('include/admin/');?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('include/admin/');?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('include/admin/');?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('include/admin/');?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url('include/admin/');?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('include/admin/');?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('include/admin/');?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url('include/admin/');?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url('include/admin/');?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url('include/admin/');?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('include/admin/');?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('include/admin/');?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url('include/admin/');?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- for date pikker -->
<script>
   $(function () {
     $("#example1").DataTable({
       "responsive": true, "lengthChange": false, "autoWidth": false,
       "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     $('#example2').DataTable({
       "paging": true,
       "lengthChange": false,
       "searching": false,
       "ordering": true,
       "info": true,
       "autoWidth": false,
       "responsive": true,
     });


            // Initialize summer notes elements
            $('.summernote').summernote({
               minHeight: 100,
               maxHeight: 300,
            });
   });
</script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
