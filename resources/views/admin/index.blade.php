<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <h1>Admin</h1>
    @if (session('successStatus'))
        <div class="alert alert-success" role="alert">
          {{session('successStatus')}}
        </div>
      @endif

  
  </body>
</html>
