
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" charset="utf-8"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<!-- <script src="./js/charts_data.js" charset="utf-8"></script> -->



<script type="text/javascript">
// $(document).ready(function() {
//       getjson1(function() {
//         make_chart();
//     });
// });
// function make_chart() {
  // let day_case = {}
  // let total_case = {}
  // for (var i = 0; i < data_arr.cases_time_series.length; i++) {
  //   day_case[i] = data_arr.cases_time_series[i].date;
  //   total_case[i] = parseInt(data_arr.cases_time_series[i].totalconfirmed);
  // }
  // console.info(day_case);
  // console.info(total_case);
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    responsive: true,
    responsiveAnimationDuration: 1000,
    data: {
        labels: ['29 Jan'<?php foreach ($GLOBALS['array']['cases_time_series'] as $day_case)
                        {
                          echo ",'".substr($day_case['date'],0,6)."'";
                        }
        ?>],
        datasets: [{
            label: 'Total Confirmed',
            data: [0<?php foreach ($GLOBALS['array']['cases_time_series'] as $day_case)
                            {
                              echo ",".$day_case['totalconfirmed'];
                            }
            ?>],
            borderWidth: 3,
            pointBackgroundColor:'rgba(135,180,255,0.5)',
            backgroundColor:'rgba(135,180,255,0.2)',
            borderColor:['rgba(135,180,255 ,1 )']
        },
        {
            label: 'Total Recoveries',
            data: [0<?php foreach ($GLOBALS['array']['cases_time_series'] as $day_case)
                            {
                              echo ",".$day_case['totalrecovered'];
                            }
            ?>],
            borderWidth: 3,
            pointBackgroundColor:'rgba(0,128,0,0.5)',
            borderColor:['rgba(0,128,0,1)']
        },
        {
            label: 'Total Deaths',
            data: [0<?php foreach ($GLOBALS['array']['cases_time_series'] as $day_case)
                            {
                              echo ",".$day_case['totaldeceased'];
                            }
            ?>],
            borderWidth: 3,
            pointBackgroundColor:'rgba(210,0,0,0.5)',
            borderColor:['rgba(210,0,0,1)']
        }
      ]
    },
    options: {
      legend: {
          labels: {
              // This more specific font property overrides the global property
              fontSize: 8
          }
      },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    fontSize:9
                },
                gridLines: {
                color: "rgba(10,10,10, 0.3)",
            }
            }],
            xAxes: [{
                ticks: {
                    fontSize:9
                },
                gridLines: {
                color: "rgba(0,0,0, 0)",
            }
            }]

        }
    }

});



var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    responsive: true,
    responsiveAnimationDuration: 1000,
    data: {
        labels: ['29 Jan'<?php foreach ($GLOBALS['array']['cases_time_series'] as $day_case)
                        {
                          echo ",'".substr($day_case['date'],0,6)."'";
                        }
        ?>],
        datasets: [{
            label: 'Daily new Confirmed',
            data: [0<?php foreach ($GLOBALS['array']['cases_time_series'] as $day_case)
                            {
                              echo ",".$day_case['dailyconfirmed'];
                            }
            ?>],
            borderWidth: 3,
            pointBackgroundColor:'rgba(135,180,255,0.5)',
            backgroundColor:'rgba(135,180,255,0.2)',
            borderColor:['rgba(135,180,255 ,1 )']
        },
        {
            label: 'Daily new Recoveries',
            data: [0<?php foreach ($GLOBALS['array']['cases_time_series'] as $day_case)
                            {
                              echo ",".$day_case['dailyrecovered'];
                            }
            ?>],
            borderWidth: 3,
            pointBackgroundColor:'rgba(0,128,0,0.5)',
            borderColor:['rgba(0,128,0,1)']
        },
        {
            label: 'Daily new Deaths',
            data: [0<?php foreach ($GLOBALS['array']['cases_time_series'] as $day_case)
                            {
                              echo ",".$day_case['dailydeceased'];
                            }
            ?>],
            borderWidth: 3,
            pointBackgroundColor:'rgba(210,0,0,0.5)',
            borderColor:['rgba(210,0,0,1)']
        }
      ]
    },
    options: {
      
      legend: {
          labels: {
              // This more specific font property overrides the global property
              fontSize: 8
          }
      },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    fontSize:9
                },
                gridLines: {
                color: "rgba(10,10,10, 0.3)",
            }
            }],
            xAxes: [{
                ticks: {
                    fontSize:9
                },
                gridLines: {
                color: "rgba(0, 0, 0, 0)",
            }
            }]

        }
    }

});
// }
</script>
