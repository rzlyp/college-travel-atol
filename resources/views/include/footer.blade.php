<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/stepwizard.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script>
        $(document).ready(function () {
                $('#table-transaksi').DataTable();
        });
        $(document).ready(function () {
                $('#table-petugas').DataTable();
        });
        $(document).ready(function () {
                $('#table-kendaraan').DataTable();
        });
        $(document).ready(function () {
                $('#table-tujuan').DataTable();
        });
</script>
</body>

</html>