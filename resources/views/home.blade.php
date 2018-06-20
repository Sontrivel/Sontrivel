@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <input type="button" value="Start game" onclick="location.href='lobby';">
                <div class="card-body">
                    <div>
                    <h2> Friend list </h2>
                     <td>
                        <th>Nickname</th>
                        <th>Online satus</th> 
                        <th>Any new info</th>
                      </td> 
                      @for($i=0;$i<$N;$i++)
                      <td>
                          <th>{{$friends[$i][1]}}#{{$friends[$i][0]}}</th>
                            @if($friends[$i][2]==0)
                                <th>
                                  Want to be friend
                               </th>
                               <th><input type="button" value="accept" onclick="location.href='/home/acceptfriend/'+{{$friends[$i][0]}}+'/'+{{Auth::id()}};"> </th>
                               <th><input type="button" value="decline" onclick="location.href='/home/deletefriend/'+{{$friends[$i][0]}}+'/'+{{Auth::id()}};"> </th>
                            @else
                                @if($friends[$i][2]==1)
                                    <th>
                                     Waiting for accept
                                    </th>
                                @else
                                    <th>
                                     Online status
                                    </th>
                                @endif
                                <th><input type="button" value="delete" onclick="location.href='/home/deletefriend/'+{{$friends[$i][0]}}+'/'+{{Auth::id()}};"> </th>
                            @endif
                      </td>
                      @endfor
                      
                      </div>
                    <div>
                      <input type="number" id="fid">
                      <input type="button" value="Add friend by ID" onclick="AddFriend()">
                    </div>
                    <div>
                        <img src="{{url('/avatars/'.$nick->avatar.'.jpg')}}" alt="avatars" width="250px">
                    <h4> {{$nick->nickname}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function AddFriend()
    {
        var id=document.getElementById("fid").value.trim();
        if(id<1) alert("id's starts with 1");
        else
        {
        if(id>9999) alert("id is too big")
        else
            location.href="/home/addfriend/"+id;
        }
    }
</script>
@endsection
