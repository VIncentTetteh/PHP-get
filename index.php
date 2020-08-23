<?php

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1>Php</h1>
    </header>
    <main>
      <section >
        <div class="sidebar">
          <form class="form-section" action="index.php" method="get">
            <div class="form-item">
              <input class="input-item" type="text" name="fullname" placeholder="Full Name">
            </div>
            <div class="form-item">
              <input class="input-item" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-item">
              <input class="input-item" type="password" name="password" placeholder="Password">
            </div>
            <div class="">
              <input type="submit" name="submit" value="Register" class="btn">
            </div>

          </form>
        </div>
        <div class="">
          <aside>
            <form class="form-section " method="get">
              <div class="form-item">
                <input class="input-item" type="text" value="<?php echo $_GET["fullname"]; ?>" >
              </div>
              <div class="form-item">
                <input class="input-item" type="text" value="<?php echo $_GET["email"]; ?>" >
              </div>
              <div class="form-item">
                <input class="input-item" type="text" value="<?php echo $_GET["password"]; ?>" >
              </div>


            </form>
          </aside>
        </div>
      </section>

    </main>
  </body>
</html>
