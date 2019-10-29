// Call the dataTables jQuery plugin
var tbl;
$(document).ready(function () {
  tbl = $('#dataTable').DataTable({
    "aaSorting": [],
    "language": {
      "emptyTable": "Data Tidak Ada",
      "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      "infoEmpty": "Menampilkan 0 data",
      "lengthMenu": "Tampilkan _MENU_ per halaman",
      "infoFiltered": "(dari _MAX_ total data)",
      "zeroRecords": "Data Tidak Ditemukan",
      "search": "Cari",
      "paginate": {
        "next": "Selanjutnya",
        "previous": "Sebelumnya"
      }
    }
  });
});