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
            <div>
                @if ($pos<2)
                <div>
                    {{$des}}
                     <input type='button' value='next' onclick="location.href='/continue/{{$next}}/{{$slot}}';">
                </div>
                <div>
                    <input type='button' value='{{$act[0][0]}}' disabled ="true" onclick="location.href='/home';">
                    <input type='button' value='{{$act[1][0]}}' disabled ="true"  onclick="location.href='/game';">
                </div>
                <div>
                    <input type='button' value='{{$act[2][0]}}' disabled ="true" onclick="location.href='/home';">
                    <input type='button' value='{{$act[3][0]}}' disabled ="true" onclick="location.href='/game';">
                </div>
                @else
                <div>
                    {{$des}}
                </div>
                <div>
                    <input type='button' value='{{$act[0][0]}}' onclick="location.href='/continue/{{$act[0][2]}}/{{$slot}}';">
                    <input type='button' value='{{$act[1][0]}}' onclick="location.href='/continue/{{$act[1][2]}}/{{$slot}}';">
                </div>
                    @if ($pos<3)
                <div>
                    <input type='button' value='' disabled ="true" >
                    <input type='button' value='' disabled ="true" >
                </div>
                    @else
                <div>
                    <input type='button' value='{{$act[2][0]}}' onclick="location.href='/continue/'+{{$act[2][2]}}+'/'+{{$slot}};">
                     @if ($pos<4)
                     <input type='button' value='' disabled ="true">
                     @else
                    <input type='button' value='{{$act[3][0]}}' onclick="location.href='/continue/'+{{$act[3][2]}}+'/'+{{$slot}};">
                </div>
                @endif
                @endif
                @endif
            </div>
        </div>
        <div>
            <input type='button' value='home' onclick="location.href='/home';">
        </div>
    </body>
</html>
