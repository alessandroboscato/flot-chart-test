$(document).ready(function(){

  var date = new Date('2021/01/15');
  var time = date.getTime() / 1000;
  console.log(time);


// $.plot(placeholder, data, options);
monthNames: ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
$.plot($("#placeholder"), [ [["jan", 0], ["feb", 1]], [["jan", 1], ["feb", 10]] ], {
    xaxes: [ { mode: "time" } ],
    yaxes: [ { }, { } ]
} );




// $.plot($("#placeholder"), [ [[0, 0], [0, 1], [1, 1]], [[0, 1], [1, 10]] ], { yaxis: { max: 10 } });


});
