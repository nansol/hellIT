<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(count($users)>0)
    @foreach($users as $user)
    <div class="row mt-1">
        <div class="col">
            {{$user->name}}
        </div>
        <div class="col">
            {{$user->lastNname}}
        </div>
        <div class="col">
            {{$user->sex}}
        </div>
        <div class="col">
            {{$user->socialNumber}}
        </div>
          @endforeach
    @else
        <p>Seznam je prázdny</p>
    @endif
</body>
</html>
