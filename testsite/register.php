<?php 
    // $email = $password = $mobile = 0;
    require_once("connect.php");
    require_once("header.php");
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $mobile = $_POST['mobile'];
        $query="insert into users (login,password,mobile) VALUES ('$email','$password','$mobile')";
        $result=mysqli_query($conn,$query);
        if($result){
            $query="select id from users where login = '$email' and password = '$password'";
            $request=mysqli_query($conn,$query);
            $row=$request->fetch_assoc();
            $id = $row["id"];
            $_SESSION["userid"]=$id;
            header('Location: index.php?newuser=true');
            die(mysqli_error($conn));
        }

    }
?>


<div class="container">
<form method="post" class="row g-3">
  <h3>Форма регистрации</h3>
  <div class="col-lg-12 col-md-6">
    <label  for="email_input" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email_input">
  </div>
  <div class="col-lg-12 col-md-6">
    <label  for="password_input" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password_input">
  </div>
  <div class="col-lg-12 col-md-6">
    <label  for="mobile_input" class="form-label">Номер телефона</label>
    <input type="text" class="form-control" name="mobile" id="mobile_input" placeholder="+79999999999">
  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Зарегистроваться</button>
  </div>
</form>




<?php 
    require_once("footer.php");
?>