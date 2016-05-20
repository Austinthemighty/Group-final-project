<!DOCTYPE html>
    <?php
    session_start();


    if(isset($_POST['log-out'])){
    if(isset($_SESSION['pass'])){
      unset($_SESSION['pass']);
    }
  }
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <title>Subscriptions</title>
</head>
<body class="prod-img prod-img-tint">

<!-- UPDATE NAV BAR-->
<div id='navo' style='margin-left: 10%'>
<div id='list'>
<nav>
     <ul>
           <li><a href='index.php'>Home</a></li>
           <li><a href='products.php'>Products</a></li>
           <li><a href='register.php'>sign-up</a></li>
     </ul>
</nav> 
</div> 

            <?php
             if(!isset($_SESSION['pass'])){
                    echo "<div class='dropdown'>
                                      <button class='btn dropdown-toggle' type='button' data-toggle='dropdown'>
                                                <span class='glyphicon glyphicon-user'></span>  Hello</button>
                                                           <ul class='dropdown-menu'>
                                                                     <li><a href='profile.php'>profile</a></li>
                                                                     <form method='post'>
                                                                     <li><input type='submit' style='background-color:transparent;border-color: transparent;margin-left: 9px' value='Log-out'  name='log-out' /></li>
                                                                     </form>
                                                          </ul>
                             </div>";
                }
            ?>


</div>

<!--products-->


<!--Put in the description of the box-->
<!--Font white-->
<!--PRICES-->
<div id="pricing" class="container-fluid price-img" >
    <div class="text-center">
        <h2>Subscriptions</h2>
        <h4>Choose wisely</h4>
    </div>
    <div class="row">
        <div class="col-sm-4 col-xs-9">
            <div class="panel text-center" style="background-color: #1c1c1c;">
                <div class="panel-heading">
                    <h1>Basic</h1>
                </div>
                <div class="panel-body">
                    <img src="images/box-1.png" style="width:400px;padding-bottom: 5px"/>
                    <p style='color: #EBEBEB'> The Content here we offer range from an arduino uno to an SSD and also high </p>
                </div>
                <div class="panel-footer" style="background-color: #1c1c1c;">
                    <h3>$70-$200</h3>
                    <h4>per month</h4>
                    <!--MODAL 0-->
                    <button type="button" class="btn " data-toggle="modal" data-target="#myModal0" style='margin-top: 10px; border-radius: 0px; background-color: #1c1c1c;border-color: #c7c7c7'>Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-9">
            <div class="panel text-center" style="background-color: #1c1c1c;">
                <div class="panel-heading">
                    <h1>Pro</h1>
                </div>
                <div class="panel-body">
                    <img src="images/box-2.png" style="width: 400px;padding-bottom: 5px"/>
                    <p><strong>Discription</strong> here</p>
                </div>
                <div class="panel-footer">
                    <h3>$200-$300</h3>
                    <h4>per month</h4>
                      <!--MODAL 1-->
                     <button type="button" class="btn " id='coo' data-toggle="modal" data-target="#myModal1" style='margin-top: 10px; border-radius: 0px; background-color: #1c1c1c;border-color: #c7c7c7'>Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-9">
            <div class="panel text-center" style="background-color: #1c1c1c;">
                <div class="panel-heading">
                    <h1>Premium</h1>
                </div>
                <div class="panel-body">
                    <img src="images/box-3.png" style="width: 400px;height: 345.5px;padding-bottom: 5px"/>
                    <p style="padding-bottom:0px"><strong style="border-bottom:0px">Discription</strong> here</p>
                </div>
                <div class="panel-footer">
                    <h3>$400-$1000</h3>
                    <h4>per month</h4>
                    <!--MODAL 2-->
                     <button type="button" class="btn " id='coo' data-toggle="modal" data-target="#myModal2" style='margin-top: 10px; border-radius: 0px; background-color: #1c1c1c;border-color: #c7c7c7'>Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--products-->

<!--MODAL 0-->
  <div class="modal fade" id="myModal0" role="dialog">
    <div class="modal-dialog">
    
      <?php
      $id = '1';
      $image= 'images/box-1.png';
      if(isset($_POST['subscribe'])){
          if(!isset($_SESSION['pass'])){
                  $dbh = new PDO('mysql:host=localhost;dbname=e-box', 'root', 'root');
                  $query = 'SELECT * FROM topic WHERE id="1" AND image="box-1.png" ';
                  $stmt = $dbh->prepare($query);
                  $stmt->execute();
                $_SESSION['id'] = $id;
                              $_SESSION['image'] = $image;
                              echo '<h1>hello</h1>';
          }else{
                      echo'<p style="color: red;">Nothing Here</p>';
                  }
        }
      ?>
      <div class="modal-content" style='border-radius: 0;background-color:#1c1c1c'>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="text-align: left;color: #c7c7c7;">
        <div class="modal-header">
          <button type="button" class="close" style='color: #fff'data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Billing Info</h4>
        </div>
        <div class="modal-body">
          
                  <label for="id">Card Holder Name</label>
                    <input type="text" id="id" name="id" value="" /><br />
                    <label for="password">Card Number</label>
                    <input type="password" id="password1" name="password1" /><br />
                    <label for="password2">Exp. Date</label>
                    <input type="password" id="password2" name="password2" style='margin-left:75px;'/><br />
                    <label for="email">CVV</label>
                    <input type="text" id="email" name="email" style='margin-left:75px;'/></br>
                    <label for="id">Zip Code</label>
                    <input type="text" id="id" name="id" value="" /><br />
        </div>
        <div class="modal-footer">
            <input style="background-color: #34b484;margin-top:  20px; color: #1c1c1c" type="submit" class="btn" value="Subscribe"  name="subscribe"  />
          
        </div>
      </div>
      
    </div>
    
  </div>
  </form>
</div>
<!--MODAL 0-->

<!--MODAL 1-->
 <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content" style='border-radius: 0;background-color:#1c1c1c'>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="text-align: left;color: #c7c7c7;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          
                    <!--<label for="id">Card Holder Name</label>
                    <input type="text" id="id" name="id" value="#" /><br />
                    <label for="password">Card Number</label>
                    <input type="password" id="password1" name="password1" /><br />
                    <label for="password2">Exp. Date</label>
                    <input type="password" id="password2" name="password2" style='margin-left:75px;'/><br />
                    <label for="email">CVV</label>
                    <input type="text" id="email" name="email" style='margin-left:75px;'/></br>
                    <label for="id">Zip Code</label>
                    <input type="text" id="id" name="id" value="#" /><br />
                    -->
                    <?php
                    echo '<p style=" color: red;">' . $_SESSION['id'] . '</p>';
                    echo '<img src = " ' . $_SESSION['image'] . ' " style="height:100px;width:100px" />';
                    ?>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-default" value="Sign Up" name="submit-sp" />
               
           <button type="button"  data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
    
  </div>
  </form>
</div>
<!--MODAL 1-->

<!--MODAL 2-->
 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content" style='border-radius: 0;background-color:#1c1c1c'>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="text-align: left;color: #c7c7c7;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal 2</h4>
        </div>
        <div class="modal-body">
          
                    <label for="id">Card Holder Name</label>
                    <input type="text" id="id" name="id" value="<?php if (!empty($id)) echo $id; ?>" /><br />
                    <label for="password">Card Number</label>
                    <input type="password" id="password1" name="password1" /><br />
                    <label for="password2">Exp. Date</label>
                    <input type="password" id="password2" name="password2" style='margin-left:75px;'/><br />
                    <label for="email">CVV</label>
                    <input type="text" id="email" name="email" style='margin-left:75px;'/></br>
                    <label for="id">Zip Code</label>
                    <input type="text" id="id" name="id" value="<?php if (!empty($id)) echo $id; ?>" /><br />
                    
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-default" value="Sign Up" name="submit-sp" />
               
           <button type="button"  data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
    
  </div>
  </form>
</div>
<!--MODAL 2-->



<!--UPDATE THE FOOTER-->
<div id="footer">
    <div class="container">
        <div class="row">

            <br>
            <div class="col-md-3" id="fot-txt">
                <center>
                    <a href="https://www.facebook.com"> <img src="http://ri2.sierraclub.org/sites/ri.sierraclub.org/files/Transparent-Facebook-Logo-Icon.png"  width='20%'> </a>
                    <br><br><br>

                    <a href="index.php"> <h4 class="footertext">home<br></a>

                </center>
            </div>
            <div class="col-md-3" id="fot-txt">
                <center>
                    <a href="https://www.instagram.com/accounts/login/?force_classic_login"> </a> <img src="https://cdn0.iconfinder.com/data/icons/shift-logotypes/32/Instagram-512.png"  width='20%'></a>
                    <br><br><br>

                    <a href="contact.php"> <h4 class="footertext">contact<br></a>
                </center>
            </div>
            <div class="col-md-3" id="fot-txt" style='margin-top: 36px'>
                <center>
                    <a href="https://twitter.com"> <img src="https://g.twimg.com/Twitter_logo_blue.png"  width='20%'></a>
                    <br><br><br>

                    <a href="products.php"> <h4 class="footertext">subscription<br> </a>

                </center>
            </div>
            <div class="col-md-3" id="fot-txt">
                <center>
                    <a href="https://www.pinterest.com"> </a> <img src="http://www.maylifestyle.com/wp-content/uploads/2013/02/icono-pinterest-color-04.png"  width='20%'></a>
                    <br><br><br>

                    <a href="register.php"> <h4 class="footertext">register<br></a>
                </center>
            </div>
        </div>
        <div class="row">
            <p><center><a href="about.php">Contact us</a> <p class="footertext">Copyright @ <span style="color:#34b484;">E-box</span> 2016</p></center></p>
        </div>
    </div>
</div>
</body>
</html>