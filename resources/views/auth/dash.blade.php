<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash</title>
</head>
<body>
<h1>Dashboard 1</h1>
    @php
     
        $r=Session::get('uid');
        echo $r->name." ".$r->role."<br>";
        echo "<a href='/dash2'>Dash2</a><br>";
        echo "<a href='/dashboard3'>dashboard3</a><br>";
        echo "<a href='/logout'>LogOut</a><br>";
    
    @endphp

    @if(session()->has('error'))
        <h3>{{session('error')}}</h3>
    @endif
  
</body>
</html>