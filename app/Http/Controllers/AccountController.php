<?php

namespace App\Http\Controllers;
use App\Nicknames;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
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
         $user_id=Auth::id();
         $cnt=0;
         $nicknames=Nicknames::all();
         $nick=new Nicknames();
         $imgnum=1;
         foreach($nicknames as $nickname)
         {
            if ($nickname->user_id==$user_id)
            {
                $nick->nickname=$nickname->nickname;
                $nick->avatar=$nickname->avatar;
                //$imgnum=$nickname->avatar;
                break;
            }
         }
        return view('account',['nick'=>$nick]);
    }
    
    public function changenick($newnick)
    {
        $nicknames=Nicknames::all();
        $user_id=Auth::id();
        //$imgnum=1;
         foreach($nicknames as $nickname)
         {
            if ($nickname->user_id==$user_id)
            {
                $nickname->nickname=$newnick;
                $nickname->save();
                //$imgnum=$nickname->avatar;
                break;
            }
         }
         return redirect('/account');
    }
    public function avatar()
    {
        return view('avatar');
    }
     public function changeavatar($num)
    {
         $nicknames=Nicknames::all();
        $user_id=Auth::id();
        //$imgnum=1;
         foreach($nicknames as $nickname)
         {
            if ($nickname->user_id==$user_id)
            {
                $nickname->avatar=$num;
                $nickname->save();
                //$imgnum=$nickname->avatar;
                break;
            }
         }
         return redirect('/account');
    }
}