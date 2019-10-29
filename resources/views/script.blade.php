<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->

<script>
    $(document).ready(function () {
        $('.alert-success').delay(3000).fadeOut(500);
        $('.alert-danger').delay(3000).fadeOut(500);
    });
</script>