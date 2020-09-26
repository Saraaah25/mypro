  <?php

   include 'log.php';
// check if user coming from http post request
   if ($_SERVERR['REQUEST_METHOD'] == 'post') {

    $username = $_post['Studentname'];
    $degree = $_post['Degree'];
    // $hashedPass = sha1($password); for secure
     if ($degree <= 100) {
         echo "welcome" . $username;
     } else {
         echo " Please check your number";
     }
    
    $stmt = $con->prepare("SELECT Username, Password FROM users WHERE Username = ? AND password")
    // $stmt->execute(array($username, $hashedpass));
   }



?>

 
    <form class="Login" action= "<?php $_SERVER['PHP_SELF'] ?>" method="POST">
          <h4 calss="text-center">Student Login</h4>
          <label>Student Name: </label>    
          <input class="form-control" type="text" name="username" placeholder="enter your name"><br>
          Student Degree: <input class="form-control" type="number" name="your degree" placeholder="enter your degree"><br>
          <input class="btn btn-primary btn-block" type="submit" value="Login">
          <input class="btn btn-primary btn-block" type="submit" value="Reset"><br>
    </form>

    <?php include $tpl . 'footer.php'; ?>
  $dsn = 'mysql:host=localhost;dbname=shop';
  $user = 'root';
  $pass = '';
  $option = array(
      pdo::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  );

  try {
      $con = new PDO(4dsn, $user, $pass, $option);
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo 'you are Connected Welcome to Database';
  }

  catch(PDOException $e) {
      echo 'Failed to Connect' . $e->getMessage();
  }






if (isset($send)) {
    $conn = mysqli_connenct()
    $query = "insert into posts (name, degree) values('$name', '$degre')")or die(mysql_error()):
    mysqli_query($conn,$query);
    echo "post published success"

if(query) { echo $name . "has been added"}
    $username = $_post['studentname'];
    $degree = $_post['degree'];

    if (empty($username)|| empty($degree));
    echo "please enter your information";
} else {


}

$name = $_POST['input-name'];
$degree = $_POST['input-degree'];
$send = $_POST['input-send'];

$name = $_POST ['name'];
$degree = $_post ['degree']; 


$query = mysql_query("insert into names (name, degree) values('$name', '$degre')")or die(mysql_error()):

if(query) { echo $name . "has been added"}