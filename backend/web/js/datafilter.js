// This code has been beautified via http://jsbeautifier.org/ with 2 spaces indentation.
$(document).ready(function() {
    function cbDropdown(column) {
        return $('<ul>', {
            'class': 'cb-dropdown'
        }).appendTo($('<div>', {
            'class': 'cb-dropdown-wrap'
        }).appendTo(column));
    }

    $('#example').DataTable({
        initComplete: function() {
            this.api().columns().every(function() {
                var column = this;
                var ddmenu = cbDropdown($(column.header()))
                    .on('change', ':checkbox', function() {
                        var active;
                        var vals = $(':checked', ddmenu).map(function(index, element) {
                            active = true;
                            return $.fn.dataTable.util.escapeRegex($(element).val());
                        }).toArray().join('|');

                        column
                            .search(vals.length > 0 ? '^(' + vals + ')$' : '', true, false)
                            .draw();

                        // Highlight the current item if selected.
                        if (this.checked) {
                            $(this).closest('li').addClass('active');
                        } else {
                            $(this).closest('li').removeClass('active');
                        }

                        // Highlight the current filter if selected.
                        var active2 = ddmenu.parent().is('.active');
                        if (active && !active2) {
                            ddmenu.parent().addClass('active');
                        } else if (!active && active2) {
                            ddmenu.parent().removeClass('active');
                        }
                    });

                column.data().unique().sort().each(function(d, j) {
                    var // wrapped
                        $label = $('<label>'),
                        $text = $('<span>', {
                            text: d
                        }),
                        $cb = $('<input>', {
                            type: 'checkbox',
                            value: d
                        });

                    $text.appendTo($label);
                    $cb.appendTo($label);

                    ddmenu.append($('<li>').append($label));
                });
            });
        }
    });
});