<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SYN | Payment Gateway</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="pstyle.css">
    <style>

    </style>
  </head>
  <body>
    <div id="logowe">
      <a href="index.html"><img src="pl1.png" alt="Logo" style="max-width: 100%"></a>
    </div>
    <br>

    <?php
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $mobile=$_POST["mobile"];
        $email=$_POST["e-mail"];
        foreach ($_POST['Method'] as $key)
        {
          $method=$key;  
        }
        

    function OpenCon()
     {
     $dbhost = "localhost";
     $dbuser = "id15253107_root";
     $dbpass = "Wpproject-28";
     $db = "id15253107_wp";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
     
     return $conn;
     }
     
    function CloseCon($conn)
     {
     $conn -> close();
     }
     
     $conn = OpenCon();
     if($conn === false){
        die("ERROR: Could not connect. " . $conn->connect_error);
    }

    $sql = "CREATE TABLE if not exists donation (
        name VARCHAR(50) NOT NULL, 
        email VARCHAR(70) NOT NULL UNIQUE,
        mobile VARCHAR(10) NOT NULL PRIMARY key,
        method VARCHAR(10) NOT NULL,
        amount VARCHAR(10) NOT NULL
    )";
    $conn->query($sql);
    $sql1="INSERT INTO donation SET name='$name', mobile='$mobile', email='$email',method='$method',amount='0'";
    $conn->query($sql1);

     CloseCon($conn);
    }
    ?>

    <div class="container border " >
      <div class="row" id="panel_m" >
        <div class="col-xs-4 col-xs-offset-5">
          <div class="panel pancon2" >
            <div class="panel pancon">
              <h4>DONATION</h4>
            </div>
            <div class="panel-body">
              <form action="P35.php" method="post">
                <div class="form-group">
                  <label>Name - <?php echo "$name"; ?></label>
                </div>
                <div class="form-group">
                  <label>Email - <?php echo "$email"; ?></label>
                </div>

                <div class="form-group">
                  <label>Mobile - <?php echo "$mobile"; ?></label><br>
                </div>
                <div class="form-group">
                  <input type="number"  placeholder="Amount" name="amount" required>
                </div>
                <input type="hidden" name="mob" value="<?php echo $mobile;?>">
                <input type="hidden" name="met" value="<?php echo $method;?>">
                <br>
                <center>
                    <input type="submit" name="submit"  class="btn btn-primary" value="Pay"><br>
                </center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div id="sec1">
        <div id="sec11">
          <div>
              <a href="P61.html"   class="navmar3"><span class="glyphicon glyphicon-phone"><p class="nsi"> Contact us</p></a>
          </div>
          <div>
              <a href="P71.html"   class="navmar3"><span class="glyphicon glyphicon-book"><p class="nsi"> Legal</p> </a>
          </div>
        </div >
        <div id="sec12">
          <div id="sec121" class="nav navbar-nav">
              <a href="P33.html"  ><span><i class="fa fa-inr" id="gnm"></i></span></a><br>
              <a href="P33.html"  ><p class="nsi1">DONATE</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav">
              <a href="P41.html"  ><span class="glyphicon glyphicon-calendar"></span></a><br>
              <a href="P41.html"  ><p class="nsi1">EVENTS</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav">
              <a href="index.html"  ><span class="glyphicon glyphicon-home"></span></a><br>
              <a href="index.html"  ><p class="nsi1">HOME</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav ">
              <a href="P8.html"  ><span class="glyphicon glyphicon-heart"></span></a><br>
              <a href="P8.html"  ><p class="nsi1">ABOUT US</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav">
              <a href="P2.html"  ><span class="glyphicon glyphicon-picture"></span></a><br>
              <a href="P2.html"  ><p class="nsi1">GALLERY</p></a>
          </div>
        </div>
        <div id="sec13">
          <div>
              <p id="npad">Connect On-</p>
          </div>
          <div class="sec131">
              <a href="https://www.facebook.com/"  target="_blank" alt="FB"><img src="pic1.png" style="max-width: 100%"></a>
          </div>
          <div class="sec131">
              <a href="https://www.instagram.com/?hl=en"  target="_blank" alt="insta"><img src="pic3.png" style="max-width: 100%"></a>
          </div>
          <div class="sec131">
              <a href="https://twitter.com/login?lang=en" target="_blank"  alt="twitter"><img src="pic2.png" style="max-width: 100%"></a>
          </div>
        </div>
      </div>
    </nav>
  </body>
</html>