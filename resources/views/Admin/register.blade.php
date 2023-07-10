<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
    	<div class="card" style="padding:22px;">
    	<h1 class="text-center">Admin Admin</h1>
    	<form method="post" action="">
    		@csrf
    		
    		<div class="grup">
    		<label>Name</label>
    		<input type="text" name="name" class="form-control">
    		@error('name')
    		<p class="text-danger">{{$message}}</p>
    		@enderror
    	</div>

        <div class="grup">
        <label>E-mail</label>
        <input type="text" name="email" class="form-control">
        @error('email')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

        <div class="grup">
        <label>Username</label>
        <input type="text" name="username" class="form-control">
        @error('username')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>

    	<div class="grup">
    		<label>Password</label>
    		<input type="password" name="password" class="form-control">
    		@error('password')
    		<p class="text-danger">{{$message}}</p>
    		@enderror
    	</div>

    	<button class="btn btn-primary mt-4">Register</button>
    	</form>
    	<a href="/admin/login/" class=" mt-4">Login</a>
    	</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>