<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>Login</h2>
  <form action="">
    <input type="text" placeholder="Your email" name="email">
    <input type="text" placeholder="Your password" name="password">
    <button type="submit">Login</button>
    <a href="{{ $authUrl }}">Login google</a>
  </form>
</body>
</html>