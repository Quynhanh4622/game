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
    <h2>List Apartments</h2>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>home</th>
            <th>Best Home</th>
            <th>Life style</th>
            <th>About Us</th>
            <th>Contact Us</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $apartment)
            <tr>
                <td>
                    <div>{{$apartment->name}}</div>
                    <div>({{$apartment->name}})</div>
                </td>
                <td>
                    <a href="apartments/edit/{{$apartment->id}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="apartments/delete/{{$apartment->id}}" onclick="return confirm('bạn chắc chắn muốn xóa chứ?')">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

