<?php

namespace App\Http\Controllers;
use App\PlayerGamePos;
Use App\Description;
Use App\Action;
Use App\DescriptionAndActions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GameController extends Controller
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
    public function index($slot)
    {
        $Game_poses= PlayerGamePos::all();
        $Player_pos= new PlayerGamePos();
        $Player_pos->player_id=Auth::id();
        $Player_pos->desc_id=1;
        $Player_pos->slot_id=$slot;
        $cnt=0;
            foreach($Game_poses as $Game_Pos)
            {
                if($Game_Pos->player_id==$Player_pos->player_id&&$Game_Pos->slot_id==$slot)
                {    $Player_pos->desc_id=$Game_Pos->desc_id;
                      $cnt++;
                }
                
            }

        if($cnt==0)
            $Player_pos->save();
        return redirect("continue/".$Player_pos->desc_id."/".$slot);
        //return view('game',['Player_pos'=>$Player_pos]);
    }
    public function cont($d_id,$slot)
    {
        if($d_id==1000)
        {
            
             $Game_poses= PlayerGamePos::all();
        foreach($Game_poses as $Game_Pos)
            {
                if($Game_Pos->player_id==Auth::id()&&$Game_Pos->slot_id==$slot)
                {    $Game_Pos->desc_id=$d_id;
                     $Game_Pos->delete();
                }
                
            }
            return redirect("/end");  
        }
              
        $Game_poses= PlayerGamePos::all();
        foreach($Game_poses as $Game_Pos)
            {
                if($Game_Pos->player_id==Auth::id()&&$Game_Pos->slot_id==$slot)
                {    $Game_Pos->desc_id=$d_id;
                     $Game_Pos->save();
                }
                
            }
        $descs= Description::all();
        $des;
        $act=array();
        $pos=0;
        $next;
        foreach($descs as $desc)
        {
            if($desc->id==$d_id)
                    $des=$desc->desc;
        }
        $attitudes= DescriptionAndActions::all();
        foreach($attitudes as $att)
        {
            if($att->desc_id==$d_id)
            {
                    $next=$att->next_desc_id;
                    $act[$pos][1]=$att->action_id;
                    $act[$pos][2]=$att->next_desc_id;
                    $pos++;
            }
        }
        for($i=0;$i<4;$i++)
            $act[$i][0]="";
        if($pos>1)
        {
            $Actions= Action::all();
            for($i=0;$i<$pos;$i++)
            {
                foreach($Actions as $action)
                {
                    if($act[$i][1]==$action->id)
                        $act[$i][0]=$action->desc;
                }
            }
            
        }
        if($pos==0)
        {
            $next=1000;
        }
            return view('game',['des'=>$des,'next'=>$next,'act'=>$act,'pos'=>$pos,'slot'=>$slot]);
    }
     public function end()
    {
         return view('end');
     }
}