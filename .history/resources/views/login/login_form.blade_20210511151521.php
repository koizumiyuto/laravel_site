<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインフォーム</title>
    <!--Scripts-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--Styles-->
    <link href=" {{ asset('css/app.css') }} " rel= "stylesheet">
    <link href=" {{ asset('css/signin.css') }} " rel= "stylesheet">
</head>
<body>

<form class="form-signin" method="POST" action="{{ route('login') }}">

  <img class="mb-4" src="{{ site.baseurl }}/docs/{{ site.docs_version }}/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

  <h1 class="h3 mb-3 font-weight-normal">ログインフォーム</h1>

  <label for="inputEmail" class="sr-only">Email address</label>

  <input type="email" id="inputEmail" name="email"　class="form-control" placeholder="Email address" required autofocus>

  <label for="inputPassword" class="sr-only">Password</label>

  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

  <div class="checkbox mb-3">

    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-{{ site.time | date: "%Y" }}</p>
</form>


    
</body>
</html>