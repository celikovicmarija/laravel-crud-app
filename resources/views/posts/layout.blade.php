<!DOCTYPE html>
<html lang="en" class="text-gray-900 leading-tight">
<head>
    <title>Blogify</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="{{ asset('css/favicon.ico') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
     <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
</head>
<body>
  
<div class="container pt-2 pb-2">
 
  <!-- navigation bar -->
  <div class="container pt-2 pb-2">
    <div class="row">
      <div class="col-xs-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3">
        
        <ul class="nav nav-pills nav-fill justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contacts">Authors</a>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
  <!-- navigation bar ends here -->

    @yield('content')
</div>
     
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>
</html>
