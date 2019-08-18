<?php 
  session_start();

  if(!isset($_SESSION['use']))
   {
       header("Location:login.php");
   }
   echo 'Hello ' . $_SESSION['use'];

   echo "<a class='btn btn-sm btn-warning' style='margin-top:0;' href='logout.php'>Выход</a>";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/ico-for-site-330x77.png" type="image/x-icon">
    <meta name="description" content="Website Creator Description">

    <title>Monitoring</title>

    <script src="js/highcharts.js"></script>
    <script src="js/ajax/jquery.min.js"></script>
    <link rel="stylesheet" href="/templates/graph/assets/tether/tether.min.css">
    <link rel="stylesheet" href="/templates/graph/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/templates/graph/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/templates/graph/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/templates/graph/assets/as-pie-progress/css/progress.min.css">
    <link rel="stylesheet" href="/templates/graph/assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="/templates/graph/assets/theme/css/style.css">
    <link rel="stylesheet" href="/templates/graph/assets/mobirise/css/mbr-additional.css" type="text/css">

  </head>

  <body>

    <div id="reload">

    </div>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script type="text/javascript">
        function show()
        {
          $.ajax({
            url: "reload.php", // Путь к php скрипту который будет загружать заголовки
            cache: true,
            success: function(html){
              $("#reload").html(html); // Блок куда буду выводить информацию
            }
          });
        }

        $(document).ready(function(){
          show();
          setInterval(show, 30000); // Интервал обновления в миллисекундах
        });
    </script>

    <script src="/templates/graph/assets/popper/popper.min.js"></script>
    <script src="/templates/graph/assets/tether/tether.min.js"></script>
    <script src="/templates/graph/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/templates/graph/assets/as-pie-progress/jquery-as-pie-progress.min.js"></script>
    <script src="/templates/graph/assets/viewportchecker/jquery.viewportchecker.js"></script>
    <script src="/templates/graph/assets/theme/js/script.js"></script>
  </body>
</html>
