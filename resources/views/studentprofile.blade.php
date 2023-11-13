@include('navigation',['views' => 'views'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stu</title>
</head>
<body>
    <div class="container">
        <div class="leftcontainer">
            <img src="{{$data->ProfilePic}}" alt="Profile pic">
        </div>
        <div class="rightcontainer">
            <div>{{$data->Id}}  </div>
            <div>{{$data->FirstName}} {{$data->LastName}}</div>
        </div>
    </div>
</body>
</html>
