<html>
  <head>
  	<link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <!--Load the Ajax API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript"> 



    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    function drawChart() {

    	var jsonData = $.ajax({
          url: "getData.php",
          dataType:"json",
          async: false
          }).responseText;

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, {width: 400, height: 240});
    }
    </script>
  </head>

  <body>
    <!--this is the div that will hold the pie chart-->
    <center><img src ="coins.jpg" width="30%" height ="30%"/ > <br><br>
      Gráfico do Número de Receitas e Despesas<br><br>
    <div id="chart_div"></div>
    <form>
      <tr><br>
      <input type="button" value="Voltar" name="voltar" onclick="javascript:history.back()">
      </tr>

    </form>
  </center>
  </body>
</html>