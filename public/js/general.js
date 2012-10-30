$(function() {
       
       
    // ###########################
    // ####### DATE PICKER #######
    // ###########################
    
    //for planning (will redirect to selected date page)
    $('#dateSelector').datepicker({
        dateFormat: "yy-mm-dd",
        onSelect: function (dateText, inst) {
           var distributionEndIndex = window.location.pathname.indexOf("distribution")+12;
           window.location = window.location.pathname.substr(0, distributionEndIndex) + '/list/date/' + dateText;
           return false;    //for IE6
        }
    });
    
    //for other pages where no redirection is needed
    $('.datepicker').datepicker({
        dateFormat: "yy-mm-dd"
    });

    // ###########################
    // ####### TIME PICKER #######
    // ###########################
    $('.timeSelector').timepicker();
  

    // ##### DATA TABLE COLUMN FILTER ###### //
    if($('#datatable').length > 0){
        $('#datatable').dataTable().columnFilter();
    }
       
       
    });