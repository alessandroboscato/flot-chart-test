$(document).ready(function(){

  var date = new Date('2021/01/15');
  var time = date.getTime() / 1000;
  console.log(time);




// $.plot(placeholder, data, options);
$.plot($("#placeholder"), [ [["Jan", 0], ["Feb", 1]], [["Jan", 1], ["Feb", 10]] ], {
  xaxis: { ticks: [[1, "Jan"], [2, "Feb"], [3, "Mar"], [4, "Apr"], [5, "May"], [6, "Jun"], [7, "Jul"], [8, "Aug"], [9, "Sep"], [10, "Oct"], [11, "Nov"], [12, "Dec"]] }
} );






// $.plot($("#placeholder"), [ [[0, 0], [0, 1], [1, 1]], [[0, 1], [1, 10]] ], { yaxis: { max: 10 } });


});
