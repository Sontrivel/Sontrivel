<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Account</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div>
            <img src="{{url('/avatars/'.$pos[0].'_game.jpg')}}"  onclick="SetGame(1)" alt="add" width="250px">
            <img src="{{url('/avatars/'.$pos[1].'_game.jpg')}}"  onclick="SetGame(2)" alt="add" width="250px">
            <img src="{{url('/avatars/'.$pos[2].'_game.jpg')}}"  onclick="SetGame(3)" alt="add" width="250px">
        </div>
        <div>
            <input type='button' value='back' onclick="location.href='/home';">
            <input ID="next" disabled ="true" type='button' value='choose game'  onclick="location.href='/game/0';">
        </div>
        <script>
            function SetGame(x)
            {
                document.getElementById("next").disabled = false;
                document.getElementById("next").value='continue game '+x;
                if(x==1) document.getElementById("next").onclick=function() { return location.href='/game/'+1;};
                if(x==2) document.getElementById("next").onclick=function() { return location.href='/game/'+2;};
                if(x==3) document.getElementById("next").onclick=function() { return location.href='/game/'+3;};
            }
        </script>
    </body>
</html>
