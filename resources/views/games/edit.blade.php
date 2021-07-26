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
    <h1 class="text-center">Create Games</h1>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" value="{{$edit->name}}"  class="form-control" id="usr" name="name">
        </div>
        <div class="form-group">
            <label for="usr">type:</label>
            <input type="text" value="{{$edit->type}}" class="form-control" id="usr" name="type">
        </div>
        <div class="form-group">
            <label for="usr">release_year:</label>
            <input type="text" value="{{$edit->release_year}}" class="form-control" id="usr" name="release_year">
        </div>
        <div class="form-group">
            <label for="usr">Price:</label>
            <input type="text" value="{{$edit->price}}"  class="form-control" id="usr" name="price">
        </div>
        <div class="form-group">
            <label for="usr">quantity:</label>
            <input type="text" value="{{$edit->quantity}}" class="form-control" id="usr" name="quantity">
        </div>
        <div class="form-group">
            <label for="usr">sort_number:</label>
            <input type="text"  value="{{$edit->sort_number}}" class="form-control" id="usr" name="sort_number">
        </div>
        <div class="form-group">
            <label for="sel1">Classes: </label>
            <select class="form-control"  name="classes">
                <option value="" selected>Classes</option>
                @foreach(\App\Enums\ChampionClass::getValues() as $class)
                    <option {{$edit->classes==$class ? 'selected' : ''}} value="{{$class}}">{{\App\Enums\ChampionClass::getDescription($class)}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="sel1">Region: </label>
            <select class="form-control" name="regions">
                <option value="" selected>Regions</option>
                @foreach(\App\Enums\ChampionRegions::getValues() as $region)
                    <option  {{$edit->regions==$region ? 'selected' : ''}} value="{{$region}}">{{\App\Enums\ChampionRegions::getDescription($region)}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary" >Submit</button>
    </form>
</div>
</body>
</html>
