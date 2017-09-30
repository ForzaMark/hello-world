<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="13_mark">
    <meta name="author" content="13_mark">
    <link rel="icon" href="../../favicon.ico">

    <title>13_mark-Website</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

 
    <script src="js/ie-emulation-modes-warning.js"></script>

  

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="jquery.fixedbg.min.js"></script>

    <script type="text/javascript">
      
      function onform() {
        
        var x = document.getElementById('mailform');
        x.backgroundColor = 'red';

      }


    </script>
   
  </head>

  <body style="background-image: url(back.jpg);">

  <div class="firstpage">

    <div class="site-wrapper page">

      <div class="site-wrapper-inner">

        <div class="cover-container">





          <div class="inner cover ">

          <br>

          <nav class="navbar navbar-default">
                      <a class="navbar-brand" href="#" >
              <img src="coder.gif" width="100px" height="60px;">
            </a>
            <h1 class="cover-heading" id="mainhead" >  13_mark </h1>
          </nav>

  

            <br>
            
            <div class="opa">
            <hr>
            <p class="lead ">13_mark is a 17 years old german webdeveloper with experience in HTML, CSS, PHP and MySQL. His skills in Javascript are not the greatest but on the level to work with the GoogleMapsAPI. </p>
      
            <hr>
            </div>
              <!-- <a href="#" class="btn btn-lg btn-default" id="clickme">Only for Geeks !</a>
            </p> -->
          </div>

          <br>


         <div class="panel panel-default transp">
            <div class="panel-heading transp">
              <h1 class="panel-title"><strong>Topical projects !</strong></h1>
            </div>
                    <div class="panel-body opa" >
                           <ul class="list-group">
                            <li class="lead none"><a href="https://musicision.lima-city.de">Musicision - Your Music-Decision !</a></p></li>
                            <li class="lead none" ><a href="https://helpinghand.lima-city.de">HelpingHand !</a></p></li>
                            <li class="lead none"><a href="#">13_mark Homepage !</a></p></li>
                            </ul>
                    </div>
          </div>

               <br>
               <hr>
               <br>


            <form action="13_mark.php" method="post" class="bord">
             <p class="lead">Contact him here !</p>


             <div class="container-fluid">


            <input type="text" name="user" class="form-control transp" placeholder="Your E-Mail" id="mailform" onclick="onform()">
            <br>
            <textarea placeholder="Message" class='form-control transp' rows='5' id='comment' name='mailtext'></textarea>
            <br>
            <input type="submit" name="mailsend" class="transp btn btn-success btn-block" value="Send !">



            </div>  
            </form>

              <p id="middle">Coder->setName('13_mark');</p>


              <br>
              <hr>
              <br>


              <button class="btn btn-lg btn-default transp">This is for the fans !</button>

              <br><br><br>
               

        


          <script type="text/javascript">

          $( "button" ).click(function() {
                  $( this ).css({
                    borderStyle: "inset",
                    cursor: "wait"
                  });

                  $( "form" ).slideDown( 1000, function() {
                    $( this ).focus();
                    $( "button" ).css( "visibility", "hidden" );
                    $("#middle").css("visibility", "hidden");
                  });
                });
           
          </script>

          <div class="mastfoot">
            <div class="inner">
              Copyright product by 13_mark
              <br>Instagram @13_mark_
            </div>
          </div>

        </div>

      </div>

    </div>

    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js">\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>