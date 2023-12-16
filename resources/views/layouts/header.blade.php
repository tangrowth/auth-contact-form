<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionavlyLate</title>
</head>

<body>
  <header>
    <h1>FashionavlyLate</h1>
    @auth
    <button>logout</button>
    @endauth
  </header>
  <main>
    @yield('main')
  </main>
</body>

</html>