<?php
  $host = '10.160.21.32'; // адрес сервера
  $user = 'eduard'; // имя пользователя
  $password = 'eduard123'; // пароль
  $database = 'eduard'; // имя базы данных
  $mysqli = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

  mysqli_query('SET NAMES cp1251');
  mysqli_select_db("client",$mysqli);

  $sql_num="SELECT count(*) AS `id_client` FROM `client`";
  $result_num=mysqli_query($mysqli , $sql_num);
  $values_num=mysqli_fetch_assoc($result_num);
  $num_rows_num=$values_num['id_client'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/ico-for-site-330x77.png" type="image/x-icon">
  <meta name="description" content="Website Creator Description">

  <title>Monitoring</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/as-pie-progress/css/progress.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
  <link rel="stylesheet" href="http://selection-studio.com/downloads/Razrabotka/mega-elements-bootstrap/ui/css/style-329.css">
</head>
<style>
  .email-signature{
      background: #fff;
      font-family: 'Poppins', sans-serif;
      padding: 0 0 0 200px;
      position: relative;
      z-index: 1;
      overflow: hidden;
  }
  .email-signature:before,
  .email-signature:after{
      content: '';
      height: 100%;
      width: 35%;
      background: #0a3957;
      position: absolute;
      left: 0;
      top: 0;
      z-index: -1;
      -webkit-clip-path: polygon(0% 0%, 70% 0, 100% 50%, 70% 100%, 0% 100%);
      clip-path: polygon(0% 0%, 70% 0, 100% 50%, 70% 100%, 0% 100%);
  }
  .email-signature:after{
      height: 90%;
      width: 32%;
      background: #ca3436;
      transform: translateY(-50%);
      top: 50%;
      left: 30px;
      z-index: -2;
  }
  .email-signature .signature-icon{
      color: #fff;
      background: #b6b2b3;
      font-size: 60px;
      line-height: 100px;
      text-align: center;
      width: 100px;
      height: 100px;
      border-radius: 50%;
      transform: translateY(-50%);
      position: absolute;
      top: 50%;
      left: 7%;
  }
  .email-signature .signature-detail{
      padding: 27px 0 20px 25px;
      border-bottom: 3px solid #ca3436;
  }
  .email-signature .title{
      color: #ca3436;
      font-size: 22px;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      margin: 0;
  }
  .email-signature .post{
      color: #ca3436;
      font-size: 17px;
  }
  .email-signature .icon{
      font-size: 16px;
      padding: 0;
      margin: 0;
      list-style: none;
      position: absolute;
      right: 15px;
      top: 28px;
  }
  .email-signature .icon li{
      display: inline-block;
      margin: 0 2px;
  }
  .email-signature .icon li a{
      color: #fff;
      background-color: #0A3957;
      text-align: center;
      line-height: 28px;
      height: 28px;
      width: 28px;
      border-radius: 5px;
  }
  .email-signature .icon li a:hover{
      background-color: #ca3436;
  }
  .email-signature .signature-content{
      margin: 0;
      padding: 10px 0 10px 25px;
      list-style: none;
      display: block;
  }
  .email-signature .signature-content li{
      color: #949494;
      font-size: 15px;
      margin-bottom: 3px;
  }
  .email-signature .signature-content li span{
      color: #ca3436;
      font-weight: 600;
      margin-right: 7px;
      display: inline-block;
  }
  @media screen and (max-width:1200px) {
      .email-signature{ padding: 0 0 0 218px; }
  }
  @media screen and (max-width:767px) {
      .email-signature { padding: 185px 0 50px 0; }
      .email-signature:before{
          width: 100%;
          height: 40%;
          -webkit-clip-path: polygon(0% 0%, 100% 0, 100% 55%, 50% 100%, 0 55%);
          clip-path: polygon(0% 0%, 100% 0, 100% 55%, 50% 100%, 0 55%);
      }
      .email-signature:after{
          background: #ca3436;
          width: 90%;
          height: 38%;
          transform: translateY(0) translateX(-50%);
          top: 23px;
          left: 50%;
          -webkit-clip-path: polygon(0% 0%, 100% 0, 100% 55%, 50% 100%, 0 55%);
          clip-path: polygon(0% 0%, 100% 0, 100% 55%, 50% 100%, 0 55%);
      }
      .email-signature .signature-icon {
          transform: translateX(-50%) translateY(0);
          top: 22px;
          left: 50%;
      }
      .email-signature .signature-detail {
          text-align: center;
          padding: 0 0 10px;
      }
      .email-signature .icon{
          transform: translateX(50%);
          top: auto;
          right: 50%;
          bottom: 15px;
      }
      .email-signature .signature-content {
          text-align: center;
          padding: 10px 0 0;
      }
  }
</style>
<body>
    <section class="progress-bars3 cid-rs85bMGLuE" id="progress-bars3-b">
    <div class="container">
      <div class='row'>
        <div class="panel-group col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1" style="text-align:center;"><h1>КЛИЕНТЫ</h1></a>
              </h4>
            </div>
            <div class="ui-329">
              <div id='collapse1' class='panel-collapse collapse'>
                <div class='panel-body'>
                  <?php
                    $sql_info="SELECT * FROM `client`";
                    $result_info=mysqli_query($mysqli,$sql_info);

                    while($row_info=mysqli_fetch_array($result_info)){
                      $client_name = $row_info['client_name'];
                      $client_email = $row_info['client_email'];
                      $client_telephone = $row_info['client_telephone'];

                      echo "<div class='col-md-4'>
                        <div class='item'>
                          <div class='head clearfix'>
                            <img src='img/user.png' class='bg-white img-responsive' />
                            <h2><a>$client_name</a></h2>
                          </div>
                          <div class='content'>
                            <ul class='list-unstyled'>
                              <li><a><i class='glyphicon glyphicon-phone bg-red'></i>$client_telephone</a></li>
                              <li><a><i class='glyphicon glyphicon-envelope bg-green'></i>$client_email</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>";
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="media-container-row pt-5 mt-2">
            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress1" role="progressbar" data-goal="<?php echo $num_rows_num; ?>">
                        <p class="pie_progress__number mbr-fonts-style display-5"><br></p>
                    </div>
                </div>
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-4 mbr-fonts-style display-5">
                        Удобство
                    </h4>
                </div>
            </div>

            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress2" role="progressbar" data-goal="20">
                        <p class="pie_progress__number mbr-fonts-style display-5"></p>
                    </div>
                </div>
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        Доступность
                    </h4>
                </div>
            </div>

            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress2" role="progressbar" data-goal="90">
                        <p class="pie_progress__number mbr-fonts-style display-5"></p>
                    </div>
                </div>
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        График
                    </h4>
                </div>
            </div>

            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress3" role="progressbar" data-goal="45">
                        <p class="pie_progress__number mbr-fonts-style display-5"></p>
                    </div>
                </div>
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        Популярность
                    </h4>
                </div>
            </div>
        </div>
      </div>
    </section>
  <div id="containerColumn" style="min-width: 310px; height: 500px; margin: 0 auto"></div><br><br><br>
  <div id="containerLine" style="min-width: 310px; height: 500px; margin: 0 auto"></div><br><br><br>
  <div id="containerPie" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>


  <script type="text/javascript">
      Highcharts.chart('containerColumn', {
        chart: {
          type: 'column'
        },
        title: {
          text: 'Текст'
        },
        subtitle: {
          text: 'текст'
        },
        yAxis: {
          min: 0,
          title: {
            text: ''
          }
        },
        plotOptions: {
          column: {
            pointPadding: 0.3,
            borderWidth: 0
          }
        },
        series: [{
          name: '',
          data: [
            <?php
              $sql_attendance="SELECT * FROM `stats`";
              $result_attendance=mysqli_query($mysqli,$sql_attendance);
              while($row_attendance=mysqli_fetch_array($result_attendance)){
                $attendance = $row_attendance['attendance'];
                echo $attendance . ',';
              }
            ?>]}
        // ,{
        //   name: 'Berlin',
        //   data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]
        //
        // }
        ]
      });
  </script>
  <script type="text/javascript">
    Highcharts.chart('containerLine', {
      chart: {
        type: 'line'
      },
      title: {
        text: 'Текст'
      },
      subtitle: {
        text: 'текст'
      },
      yAxis: {
        min: 0,
        title: {
          text: ''
        }
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0
        }
      },
      series: [{
        name: '',
        data: [<?php
            $sql_attendance="SELECT * FROM `stats`";
            $result_attendance=mysqli_query($mysqli,$sql_attendance);
            while($row_attendance=mysqli_fetch_array($result_attendance)){
              $attendance = $row_attendance['quantity'];
              echo $attendance . ',';
            }
          ?>]
      }]
    });
  </script>
  <script type="text/javascript">
    Highcharts.chart('containerPie', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Chrome',
            y: 610.41,
            sliced: true,
            selected: true
        }, {
            name: 'Internet Explorer',
            y: 1103.84
        },{
            name: 'Other',
            y: 204.61
        }]
    }]
  });</script>

  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/as-pie-progress/jquery-as-pie-progress.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>

  </body>
</html>
