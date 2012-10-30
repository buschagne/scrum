$(document).ready(function(){

//    pathArray = window.location.pathname.split( '/' );
//    var len = pathArray.length;
//    if(pathArray[len-1] != 'public'){
//        var loc = pathArray.indexOf('public');
//        var diff = len-1 - loc;
//        for(var x = 0; x < diff; x++){pathArray.pop();}
//    }
//
//    var newPath = pathArray.join("/");
//    var fullPath = newPath + '/configuration/index/gettimepickerconfig/';
//    //alert(fullPath);
//
//
//  //trying different approach...
//  //can't figure this out either...
//  //how do i derive the values if they're not even in the result
//  //all i get is a bunch of functions!!!!
//
//
//
//
//    $.ajax({
//            type : "GET",
//            url : fullPath,
//            dataType: "json",
//            success: function(data) {
//                var result = data;
//                //alert(result);
//            }
//    });
//
//
//
//
////------------------
//
//
//
//
//
//   var stepResult = 0;
//   var minResult = 0;
//   var maxResult = 0;
//
//    $.get(fullPath,function(data){
//
//        //why is it a string and not an array??
//        //why is start_ and end_time null??
//
//        var dataArray = data.split(',');
//        //alert(dataArray);
//
//        //alert(dataArray.segments);
//
//        var segments = dataArray[3];
//        var start = dataArray[1];
//        var end = dataArray[2];
//
//        //alert(end);
//        //alert(start);
//
//        //console.log(segments);
//        var seg = segments.split(':');
//        var z = seg[1].replace('"', '');
//        var chop = z.substring(0, z.length-1);
//        var zx = parseInt(chop);
//
//        minResult = zx;
//        //alert(minResult);

//    });
//    stepResult = 60 / minResult;


	$('.timeSelector').livequery(function(){


                stepResult = 60 / minResult;

                //alert(stepResult);

                $(this).timepicker({hourMin: 0,hourMax: 23,stepMinute:1});

	});
});
