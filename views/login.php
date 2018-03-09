<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin donokasa</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/inmobiliaria/public/stylesheets/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div class="cover">
    <form class="form-signin" method="post" action="/inmobiliaria/controller/loginctrl.php">
      <img class="mb-4" src="http://www.pvhc.net/img168/jffndxripfxwhizatkik.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Bienvenido a mi app</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" name="e" id="inputEmail" class="form-control" placeholder="Email address" required pattern='^[^@]+@[^@]+\.[^@]{2,3}$' minlength="8" maxlength="40" required autofocus>
      <label for="inputUsername" class="sr-only">Username</label>
      <input type="text" name="u" id="inputUsername" class="form-control" placeholder="Username" required pattern="[A-z0-9À-ž]{3,15}$" minlength="3" maxlength="15" required>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="p" id="inputPassword" class="form-control" placeholder="Password" required pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,40}" minlength="8" maxlength="40" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="a" value="true" required> Acepto las condiciones de uso
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarte</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
      </div>
  </body>
</html>