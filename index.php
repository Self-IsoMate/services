<html>
<head>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

<style>
.form-gap {
    padding-top: 70px;
}

</style>

</head>
<body>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
                    <!--form id="register-form" action="index.php" role="form" autocomplete="off" class="form" method="post"-->
                  <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-unlock fa-lg"></i></span>
                          <input id="pass1" name="pass1" placeholder="New Password" class="form-control"  type="password" onkeyup='check();'><!--pass1-->
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-unlock fa-lg"></i></span>
                          <input id="pass2" name="pass2" placeholder="Confirm new password" class="form-control"  type="password" onkeyup='check();'><!--pass1-->
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="submit" class="btn btn-lg btn-primary btn-block" value="Reset Password"> <!--type="submit"-->
                        <span id='message'></span>

                      </div>
                    <!--/form-->    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
<script>
 var check = function() {
      if (document.getElementById('pass1').value ==
          document.getElementById('pass2').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'matching';
          const toSend = {
      
      email: "<?php echo $_GET['email']; ?>",
      token: "<?php echo $_GET['token']; ?>",
      password:"pass123"

    };

    const jsonString = JSON.stringify(toSend);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "http://self-isomate-api.appspot.com/api/resetpassword");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(jsonString);
      } else {
      		document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'not matching';
      }
  }

    

</script>
</body>
</html>