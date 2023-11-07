
<!DOCTYPE html>
<html lang="en">
<head>
    <script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-4529508631166774",
          enable_page_level_ads: true
        });
      </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register | PHP Chat Application using Websocket</title>
    <link href="restaurant-management-system-demo/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="restaurant-management-system-demo/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="restaurant-management-system-demo/vendor/parsley/parsley.css"/>
    <!-- Bootstrap core JavaScript -->
    <script src="restaurant-management-system-demo/vendor/jquery/jquery.min.js"></script>
    <script src="restaurant-management-system-demo/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="restaurant-management-system-demo/vendor/parsley/dist/parsley.min.js"></script>
</head>
<body>

    <div class="containter">
      <br />
      <br />
      <h1 class="text-center"><a href="https://www.webslesson.info/2021/01/build-real-time-chat-application-in-php-mysql-using-websocket.html">PHP Chat Application using Websocket</a></h1>
      <div class="row justify-content-md-center">
        <div class="col col-md-4 mt-5">
          <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
              <form method="post" id="login_form">
                  <div class="form-group">
                    <label>Enter Your Email</label>
                    <input type="email" name="user_email" id="user_email" class="form-control" data-parsley-type="email" required />
                  </div>
                  <div class="form-group">
                    <label>Enter Your Password</label>
                    <input type="password" name="user_password" id="user_password" class="form-control" data-parsley-minlength="6" data-parsley-maxlength="12" required />
                  </div>
                  <div class="form-group text-center">
                      <input type="submit" name="Login" class="btn btn-success" value="Login" />
                  </div>
              </form>
            </div>
          </div> 
        </div>
      </div>
    </div>
</body>
</html>
<script>
$(document).ready(function(){
  $('#login_form').parsley();
});
</script>