<?php

namespace App\Http\Controllers;
use App\PlayerGamePos;
use App\Nicknames;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LobbyController extends Controller
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
        $Game_poses = PlayerGamePos::all();
        $pos = array("add","add","add");
        if($Game_poses!=NULL)
        {
            foreach($Game_poses as $Game_Pos)
            {
                if($Game_Pos->player_id==Auth::id())
                   $pos[$Game_Pos->slot_id-1]="in";
            }
        }
        return view('lobby',['pos'=>$pos]);
    }
}