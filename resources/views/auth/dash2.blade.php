<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash2</title>
</head>
<body>
<h1>Dashboard 2</h1>
    @php
   
        $r=Session::get('uid');
        echo $r->name." ".$r->role."<br>";
        echo "<a href='/dash'>Dash</a><br>";
        echo "<a href='/dashboard3'>dashboard3</a><br>";
        echo "<a href='/logout'>LogOut</a><br>";
    
    @endphp

</body>
</html>