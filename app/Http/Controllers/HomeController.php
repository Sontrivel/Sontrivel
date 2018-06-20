<?php

namespace App\Http\Controllers;
use App\Nicknames;
use App\Friendlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
       // $nick = new Nicknames();
       // $nick->user_id=Auth::user()->getId();
       // $nick->nickname=Auth::user()->getName();
       // $nick->save();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $nick = new Nicknames();
         $user=Auth::user();
         $nick->user_id=Auth::id();
         $cnt=0;
         $nicknames=Nicknames::all();
         $nick->avatar=1;
         foreach($nicknames as $nickname)
         {
            if ($nickname->user_id==Auth::id())
            {
                $cnt++;
                $nick->nickname=$nickname->nickname;
                $nick->avatar=$nickname->avatar;
            }
         }
         if($cnt==0)
         {
         $nick->nickname=Auth::user()->name;
         $nick->save();
         }
         $friends=array(array(),array(),array());
         $friends_in_list=Friendlist::all();
         $N=0;
         foreach($friends_in_list as $friend_in_list)
         {
             
             
             if($friend_in_list->id_1==Auth::id())
             {
                  array_push($friends,$friend_in_list->user_id);
                  foreach($nicknames as $nickname)
                  {
                      if($nickname->user_id==$friend_in_list->id_2)
                      {
                          $friends[$N][0]=$nickname->user_id;
                          $friends[$N][1]=$nickname->nickname;
                          if($friend_in_list->accepted!=0)
                          $friends[$N][2]=2;
                          else
                          {
                              if($friend_in_list->accepted_user_id!=Auth::id())
                                  $friends[$N][2]=1;
                              else
                                  $friends[$N][2]=0;
                          }
                          $N++;
                      }
                  }
             }
           
             if($friend_in_list->id_2==Auth::id())
             {
                  array_push($friends,$friend_in_list->user_id);
                  foreach($nicknames as $nickname)
                  {
                      if($nickname->user_id==$friend_in_list->id_1)
                      {
                          $friends[$N][0]=$nickname->user_id;
                          $friends[$N][1]=$nickname->nickname;
                          if($friend_in_list->accepted!=0)
                            $friends[$N][2]=2;
                          else
                          {
                              if($friend_in_list->accepted_user_id!=Auth::id())
                                  $friends[$N][2]=1;
                              else
                                  $friends[$N][2]=0;
                          }
                          $N++;
                      }
                  } 
              
             }                       
         }
        return view('home',['friends'=>$friends,'N'=>$N,'nick'=>$nick]  );
    }
    public function addfriend($fid)
    {
        $friends = new Friendlist();
        $friends->id_1=Auth::id();
        $friends->id_2=$fid;
        $friends->accepted=0;
        $friends->accepted_user_id=$fid;
        $friends->save();
        return redirect("/home");
    }
    public function acceptfriend($fid,$uid)
    {
        $friends_in_list=Friendlist::all();
        foreach($friends_in_list as $friend_in_list)
        {
            if(($friend_in_list->id_1==$fid&&$friend_in_list->id_2==$uid)||($friend_in_list->id_1==$uid&&$friend_in_list->id_2==$fid))
            {
                $friend_in_list->accepted=1;
                $friend_in_list->save();
            }
       }
       return redirect("/home");
    }
    public function deletefriend($fid,$uid)
    {
        $friends_in_list=Friendlist::all();
        foreach($friends_in_list as $friend_in_list)
        {
            if(($friend_in_list->id_1==$fid&&$friend_in_list->id_2==$uid)||($friend_in_list->id_1==$uid&&$friend_in_list->id_2==$fid))
                $friend_in_list->delete();
       }
       return redirect("/home");
    }
     
}
