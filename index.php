<?php  include_once('data.php');
global $period;
?>

<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="css/bootstrap.min.css" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href="css/docs.css" rel="stylesheet">
        <title>SIX PACK</title>
    </head>

   <body class="preview" data-spy="scroll" data-target=".subnav" data-offset="50">

<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="../sixpack">SIX PACK</a>
       <div class="nav-collapse" id="main-menu">

       </div>
     </div>
   </div>
 </div>
<div class="container">
<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="row" >
    <div class="span6">
      <h1>SIX PACK</h1>
      <p class="lead">Practice everyday</p>
    </div>
  
  </div>
  <div class="subnav">
    <ul class="nav nav-pills">
      <li><a href="#Statistics">Statistics</a></li>
      <li><a href="#Analyse">Analyse</a></li>
    </ul> 
  </div>                  
</header>
<section id="Statistics">
  <div class="page-header">
    <h1>Statistics</h1>
  </div>

  <!-- Headings & Paragraph Copy -->
  <div class="row">

    <div >
        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
    </div>
  </div>

</section>

</div>        
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>
    <script src="js/highcharts.js"></script>
    <script src="js/exporting.js"></script>
<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'spline'
            },
            title: {
                text: 'Statistcs of daily exercise'
            },
            subtitle: {
                text: 'Last 15 days'
            },
            xAxis: {
                categories:<?php echo $period;?>
            },
            yAxis: {
                title: {
                    text: 'Amount'
                },
                labels: {
                    formatter: function() {
                        return this.value;
                    }
                }
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },
            series: [{
                name: 'Sit-up',
                marker: {
                    symbol: 'square'
                },
                data: [
<?php $comma = '';
    foreach ($dataset as $data):
    echo $comma . $data['amount'] ;
    $comma = ',';
    endforeach;            
?>
              ]
    
            }]
        });
    });
    
});
		</script>
        
    </body>
</html>
