<html>
      <header>
          <title>Admin login</title>
          <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
      </header>
      <body>
          <div class="container">
             <div class="row" style="height:200px;"></div>
             <div class="row">
                   <div class="col-sm-4"></div>
                   <div class="col-sm-4">
                        <form name="login-form" action="process_login.php" method="POST">
                            <h3>login</h3>
                            <div class="form-group">
                               <input type="text" name="username" class="form-control" placeholder="username"><br/><br/>
                               <input type="password" name="password" class="form-control" placeholder="password"><br/><br/>
                               <input type="submit" name="submit" class="btn-primary" style="width:350px;" value="Login">
                            </div>
                        </form>
                   </div>
                   <div class="col-sm-4"></div>
             </div>
          </div>
      </body>
</html>