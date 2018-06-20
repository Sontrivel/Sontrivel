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
            <h1>Account settings</h1>
            <h3> Avatar: </h3>
            <img src="{{url('/avatars/'.$nick->avatar.'.jpg')}}"  alt="avatars" width="250px">
            <h3> <input type="button" value="Avatar change" onclick="location.href='/avatar';" > </h3>
            <h3> Nickname </h3>
            <h3> {{$nick->nickname}}#{{Auth::id()}} </h3>
            <h3> <input type="text" id="newnick"> </h3>
            <h3> <input type="button" value="Nickname change" onclick="changeNick()"> </h3>
            <h3> <input type="button" value="Finish edit" onclick="location.href='/home';"/> </h3>
        </div>
        <script>
            function changeNick()
            {
                var newnick=document.getElementById("newnick").value.trim();
                if((newnick.length>3))
                    location.href="/account/changenick/"+newnick;
                else
                    alert("too short nickname");
            }
        </script>
    </body>
</html>
