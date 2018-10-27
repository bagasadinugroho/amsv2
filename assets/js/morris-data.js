// Dashboard 1 Morris-chart
$(function () {
    "use strict";
    
// Morris bar chart
  var hasil=[];
  var area = {};
  $.get( "http://localhost/amsv2/api", function( data ) {
    hasil=JSON.parse(data);
    // data.forEach(x => {
    //   hasil.push({location:x.locataion,jumlah:parseInt(x.jumlah)});
    // });
    // for (var i = 0; i < data.length; i++){
    //   console.log(data[i]);
    // }
    // console.log(hasil);
    area = new Morris.Bar({
      element   : 'asset-chart',
      resize    : true,
      data      : hasil,
      xkey      : 'location',
      ykeys     : ['jumlah'],
      labels    : ['Asset'],
      barColors: ['#55ce63'],
      gridLineColor: '#eef0f2',
      hideHover : 'auto'
    });
    // console.log(area.data);
  });
 });