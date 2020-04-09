<?php

namespace App\Http\Controllers\Team;

use App\Models\Idea;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Keygen\Keygen;

class TeamIdeaController extends Controller
{
    /**
     * @param $iID
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($iID)
    {
        //
        $ideas = Idea::where('iID',$iID)->first();
        return view('/profiles/team/idea', compact('ideas'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($this->validate($request, [
            'iname'=>'required|max:100',
            'idesc'=>'required|min:60|max:1000',
        ])){
            $iId = Keygen::numeric(10)->generate(true);

            $idea = new Idea();
            $idea->iID = $iId;
            $idea->iname = $request['iname'];
            $idea->ititle = $request['iname'];
            $idea->idesc = $request['idesc'];
            $idea->teamID = Auth::user()->teamID;
            $idea->sID=Auth::user()->sID;
            $idea->created_at = Carbon::now();
            $idea->updated_at = Carbon::now();
            $idea->save();

            return redirect()->back()->with('success',trans('messages.teamidea_store_success'));
        }
    }

}
