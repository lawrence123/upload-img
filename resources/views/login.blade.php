
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    login pages
    @if($errors->any())
    <div class="col-12">
        @foreach($errors->all() as $error )
                <div> {{$error}}</div>
        @endforeach
    </div>
    @endif

    <div class="container">
        <form action="{{route('login.post')}}" method="POST" style="width: 500px">
            @csrf
            <div class="form-group">
              <label for="username">Username</label>
              <input type="name" class="form-control" name="name" placeholder="Enter username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control"  name="password" placeholder="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

</body>
</html>
