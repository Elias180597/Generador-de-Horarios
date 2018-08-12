@include('horario.lista')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>::Imprimir::</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="../../css/_css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/_css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    
    <div class="original">
        <?php printhorario($horario); ?>    	
    </div>

    <div id="finalcanvas"></div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- Canvas -->
    <script type="text/javascript" src="../../js/html2canvas.js"></script>
    <script type="text/javascript">
        html2canvas($(".original"), {
          onrendered: function(canvas) {
            // document.body.appendChild(canvas);
            var canvasImg = canvas.toDataURL("image/png");

            $('#finalcanvas').html('<img src="'+canvasImg+'" alt="">');
            
           },
           allowTaint: true,
           logging: true,
           useCORS: true
        });
        $('.original').hide();
    </script>    
  </body>
</html>



