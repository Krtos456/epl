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
            <!-- note source ge root akee public -->
            <img src="/images/{{ $studentdata[0]->ProfilePic}}" alt="Profile pic also {{ $studentdata[0]->ProfilePic}}">
        </div>
        <div class="rightcontainer">
            <div>{{ $studentdata[0]->Id}}  </div>
            <div>{{ $studentdata[0]->FirstName}} {{ $studentdata[0]->LastName}}</div>
        </div>
    </div>
</body>
</html>
