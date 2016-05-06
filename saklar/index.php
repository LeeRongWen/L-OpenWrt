<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Saklar Ku</title>
    <!-- Bootstrap -->
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <span class="glyphicon glyphicon-th-large"></span>
          </a>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <?php
        ob_start();
        session_start();
        define ("pwd","a914ae31ecaef5889815e76d379e0af7");
        // kalau udah LogicException
        if(isset($_POST['convert'])){
          if(md5($_POST['pwd'])==pwd && $_POST['username']=='galoeng'){
            $_SESSION['username'] = $_POST['username'];
            header('Location: index.php');
          }
          else {
            header('Location: index.php');
          }
        }
        if($_SESSION['username']=='galoeng'){ ?>
          <!-- saklar -->
          <div class="row">
            <div class="col-sm-4">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Kendali Saklar</h3>
                </div>
                <div class="panel-body">
              <table class="table table-hover">
                <tr>
                  <th>Lampu</th>
                  <th>Status</th>
                  <th colspan="2">Opsi</th>
                </tr>
                <tr>
                  <td  >Lampu 1</td>
                  <td>Hidup / Mati</td>
                  <td  >
                    <form method="post" action="saklar.php">
                      <input type="hidden" name="status" value="1">
                      <input type="hidden" name="gpio" value="0">
                      <input type="submit" name="saklar" value="Hidup" class="btn btn-success btn-sm">
                    </form>
                  </td>
                  <td  >
                    <form method="post" action="saklar.php">
                      <input type="hidden" name="status" value="0">
                      <input type="hidden" name="gpio" value="0">
                      <input type="submit" name="saklar" value="Mati" class="btn btn-sm btn-danger">
                    </form>
                  </td>
                </tr>
                <tr>
                  <td  >Lampu 2</td>
                  <td>Hidup / Mati</td>
                  <td  >
                    <form method="post" action="saklar.php">
                      <input type="hidden" name="status" value="1">
                      <input type="hidden" name="gpio" value="1">
                      <input type="submit" name="saklar" value="Hidup" class="btn btn-success btn-sm">
                    </form>
                  </td>
                  <td  >
                    <form method="post" action="saklar.php">
                      <input type="hidden" name="status" value="0">
                      <input type="hidden" name="gpio" value="1">
                      <input type="submit" name="saklar" value="Mati" class="btn btn-sm btn-danger">
                    </form>
                  </td>
                </tr>
                <tr>
                  <td  >Lampu 3</td>
                  <td>Hidup / Mati</td>
                  <td  >
                    <form method="post" action="saklar.php">
                      <input type="hidden" name="status" value="1">
                      <input type="hidden" name="gpio" value="2">
                      <input type="submit" name="saklar" value="Hidup" class="btn btn-success btn-sm">
                    </form>
                  </td>
                  <td  >
                    <form method="post" action="saklar.php">
                      <input type="hidden" name="status" value="0">
                      <input type="hidden" name="gpio" value="2">
                      <input type="submit" name="saklar" value="Mati" class="btn btn-sm btn-danger">
                    </form>
                  </td>
                </tr>
                <tr>
                  <td  >Lampu 4</td>
                  <td>Hidup / Mati</td>
                  <td  >
                    <form method="post" action="saklar.php">
                      <input type="hidden" name="status" value="1">
                      <input type="hidden" name="gpio" value="3">
                      <input type="submit" name="saklar" value="Hidup" class="btn btn-success btn-sm">
                    </form>
                  </td>
                  <td  >
                    <form method="post" action="saklar.php">
                      <input type="hidden" name="status" value="0">
                      <input type="hidden" name="gpio" value="3">
                      <input type="submit" name="saklar" value="Mati" class="btn btn-sm btn-danger">
                    </form>
                  </td>
                </tr>
                <tr>
                  <td  >Lampu 5</td>
                  <td>Hidup / Mati</td>
                  <td  >
                    <form method="post" action="saklar.php">
                      <input type="hidden" name="status" value="1">
                      <input type="hidden" name="gpio" value="4">
                      <input type="submit" name="saklar" value="Hidup" class="btn btn-success btn-sm">
                    </form>
                  </td>
                  <td  >
                    <form method="post" action="saklar.php">
                      <input type="hidden" name="status" value="0">
                      <input type="hidden" name="gpio" value="4">
                      <input type="submit" name="saklar" value="Mati" class="btn btn-sm btn-danger">
                    </form>
                  </td>
                </tr>
                <tr>
                  <td  >Lampu 6</td>
                  <td>Hidup / Mati</td>
                  <td  >
                    <form method="post" action="saklar.php">
                      <input type="hidden" name="status" value="1">
                      <input type="hidden" name="gpio" value="5">
                      <input type="submit" name="saklar" value="Hidup" class="btn btn-success btn-sm">
                    </form>
                  </td>
                  <td  >
                    <form method="post" action="saklar.php">
                      <input type="hidden" name="status" value="0">
                      <input type="hidden" name="gpio" value="5">
                      <input type="submit" name="saklar" value="Mati" class="btn btn-sm btn-danger">
                    </form>
                  </td>
                </tr>
              </table>
            </div>
          </div>

            </div>
            <div class="col-sm-4">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Kendali Sekaligus</h3>
                </div>
                <div class="panel-body">
              <table class="table" border="0">
                <tr>
                  <td>
                    <form method="post" action="saklar.php">
                      <input type="hidden" value="1" name="status">
                      <input type="submit" value="Hidupkan Semua" name="semua" class="btn btn-sm btn-success">
                    </form>
                  </td>
                  <td>
                    <form method="post" action="saklar.php">
                      <input type="hidden" value="0" name="status">
                      <input type="submit" value="Matikan Semua" name="semua" class="btn btn-sm btn-danger">
                    </form>
                  </td>
                  <td>
                    <form method="post" action="">
                      <input type="submit" value="Log-Out" name="logout" class="btn btn-sm btn-danger">
                    </form>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
          <!-- saklar -->
        <?php
          if(isset($_POST['logout'])){
            session_destroy();
            header('Location: index.php');
          }
        }
        else{ ?>
          <!-- form login -->
          <div class='col-md-4'></div>
          <div class='col-md-4'>
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Form Login</h3>
              </div>
              <div class="panel-body">
                <form method="post" action="">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='username' placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name='pwd' id="exampleInputPassword1" placeholder="Password">
                </div>
                  <button type="submit" value="Login" name="convert" class="btn btn-default">Login</button>
                </form>
              </div>
            </div>
          </div>
          <div class='col-md-4'></div>
          <!-- form login -->
        <?php
        }
        ?>
      </div>
      <div class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
          <p class="navbar-text pull-left"> Code with <span class="glyphicon glyphicon-heart-empty"></span> by <a href='https://github.com/gandhi-wibowo'>Gandhi</a></p>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="bs/js/bootstrap.min.js"></script>
    </body>
  </html>
