<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Create Apartments</h1>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" value="{{$edit->name}}"  class="form-control" id="usr" name="name">
        </div>
        <div class="form-group">
            <label for="usr">Address:</label>
            <input type="text" value="{{$edit->address}}" class="form-control" id="usr" name="address">
        </div>
        <div class="form-group">
            <label for="usr">price:</label>
            <input type="text" value="{{$edit->price}}" class="form-control" id="usr" name="price">
        </div>
        <div class="form-group">
            <label for="usr">General Information:</label>
            <input type="text" value="{{$edit->price}}"  class="form-control" id="usr" name="generalInformation">
        </div>
        <div class="form-group">
            <label for="usr">Details:</label>
            <input type="text" value="{{$edit->quantity}}" class="form-control" id="usr" name="details">
        </div>
        <div class="form-group">
            <label for="usr">Avatar:</label>
            <input type="text"  value="{{$edit->sort_number}}" class="form-control" id="usr" name="avatar">
        </div>
        <div class="form-group">
            <label for="usr">Status:</label>
            <input type="text"  value="{{$edit->sort_number}}" class="form-control" id="usr" name="status">
        </div>
        <div class="form-group">
        <button class="btn btn-primary" >Submit</button>
        </div>
    </form>
</div>
</body>
</html>

