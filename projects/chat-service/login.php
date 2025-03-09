<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<html>
  <head>
<style>

body {
  background-image: url('im/chat.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.wrapper{

background-color: rgb(200,200,200) !important;

}
</style>
</head>
<header style="height:230px; width:160px; margin-top:-750px; margin-left:-355px;margin-right:300px">

</header>
<?php include_once "header.php"; ?>

<body>
 
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="register.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
