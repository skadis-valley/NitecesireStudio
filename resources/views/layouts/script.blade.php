<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin.js')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<script src="{{asset('js/sb-admin-datatables.js')}}"></script>
<script src="{{asset('js/accounting.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.alert-success').delay(3000).fadeOut(500);
        $('.alert-danger').delay(3000).fadeOut(500);
    });
</script>