<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>{{__('Game')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                font-family: 'Lobster', cursive;
                font-size: 50px;
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
            
            input.next{
                height: 100px;
                width: 150px;
                position: absolute;
                top: 400px;
                right: 100px;
            }
            
            .center{
               position: absolute;
               top: 200px;
               left: 200px;
            }
            
            .center2{
               position: absolute;
               top: 200px;
               left: 150px;
            }
            
            input.left{
                position: absolute;
                left: 100px;
                top: 50px;
                widht: 100px;
                height: 40px;
            }
            
            input.button{
            width: 600px;
            height: 100px;
            font-family: 'Lobster', cursive;
            font-size: 20px;
            }
        </style>
    </head>
    <body>
            @if ($pos<2)
            <input class="next" type='button' value="{{__('Next')}}" onclick="location.href='/continue/{{$next}}/{{$slot}}';">
                 <div class="center2">              
                    {{$des}}
                 </div>
                @else
                <div class="center">
                <div>
                    {{$des}}
                </div>
                
                <div>
                    <input class="button" type='button' value='{{$act[0][0]}}' onclick="location.href='/continue/{{$act[0][2]}}/{{$slot}}';">
                    <input class="button" type='button' value='{{$act[1][0]}}' onclick="location.href='/continue/{{$act[1][2]}}/{{$slot}}';">
                </div>
                  
                    @if ($pos<3)
                         
                <div>
                    <input class="button" type='button' value='' disabled ="true" >
                    <input class="button" type='button' value='' disabled ="true" >
                </div>
                    @else
                <div>
                    <input class="button" type='button' value='{{$act[2][0]}}' onclick="location.href='/continue/'+{{$act[2][2]}}+'/'+{{$slot}};">
                     @if ($pos<4)
                     <input class="button" type='button' value='' disabled ="true">
                     @else
                    <input class="button" type='button' value='{{$act[3][0]}}' onclick="location.href='/continue/'+{{$act[3][2]}}+'/'+{{$slot}};">
                </div>
                @endif
                @endif
                @endif
            </div>

            <input class="left" type='button' value="{{__('Home')}}" onclick="location.href='/home';">
        
    </body>
</html>
