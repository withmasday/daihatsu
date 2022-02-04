$(function() {
  $(".allxls-btn").click(function(e) {
    var table = $('#table');
    if (table && table.length) {
      var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
      $(table).table2excel({
        exclude: ".noExl",
        name: "Client Daihatsu",
        filename: "clientdaihatsu.xls",
        fileext: ".xls",
        exclude_img: true,
        exclude_links: true,
        exclude_inputs: true,
        preserveColors: preserveColors
      });
    }
  });
});