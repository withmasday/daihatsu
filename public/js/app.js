$(document).ready(function() {
    $("#searchbar").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".product-item").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    $("#searchtable").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    $("#filtertable").on("change", function () {
        searchterm = $(this).val();                 
        $('tbody tr').each(function () {                    
            var sel = $(this);
            var txt = sel.find('td:eq(6)').text();
            if (searchterm != 'all') {
                if (txt.indexOf(searchterm) === -1) {
                    $(this).hide();
                }
                else {
                    $(this).show();
                }
            }
            else
            {                       
                $('table tbody tr').show();
            }
        });
    });
});