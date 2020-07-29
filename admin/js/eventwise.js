// This code has been beautified via http://jsbeautifier.org/ with 2 spaces indentation.
$(document).ready(function () {

    $('#regtable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "order": [[2, "desc"]],
    });
});
