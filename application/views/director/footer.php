        
        <!-- Main Footer -->
        <footer class="main-footer text-center">
            <strong>Copyright &copy; 2019 <a href="#">Prachatech.com</a>.</strong> All rights reserved.
        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url(); ?>assets/director/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>assets/director/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/director/js/bootstrapValidator.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/director/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/director/js/dataTables.bootstrap.min.js"></script>
    <!--Datepicker -->
    <script src="<?php echo base_url(); ?>assets/director/js/bootstrap-datepicker.min.js"></script>
    <!-- Wizard -->
    <script src="<?php echo base_url(); ?>assets/director/js/jquery.steps.min.js"></script>
	
    <!-- Admin JS -->
    <script src="<?php echo base_url(); ?>assets/director/js/adminlte.min.js"></script>
    <!-- Validations -->
    <!--<script src="js/validations.js"></script>-->

    <script>
        $(document).ready(function(){
            $('#example1').DataTable();
            $('#example2').DataTable();
        });
    </script>
<script>
    $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true
    });
</script>
</body>

</html>