<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vote;
use App\Http\Controllers\ActivitiesController;

class VotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $data = $request->all();
        $i = Vote::firstOrCreate(
            ['id_activity' => $data['idee'],
            'id_user' => Auth::user()->id]
        );
        if(!$i->wasRecentlyCreated){
           $activity_author = ActivitiesController::show($data['idee'])->id_author;
           if (Auth::user()->id != $activity_author) {
               $this->destroy($data['idee']);
           }
        }
        return redirect()->back();
    }

    static public function initialStore($id_activity)
    {
        Vote::create([
            'id_activity' => $id_activity,
            'id_user' => Auth::user()->id,
        ]);
        
        return redirect("boiteIdee");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_user, $id_activity)
    {
        return Vote::where("id_user", $id_user)
                            ->where('id_activity', $id_activity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vote = Vote::where("id_user", Auth::user()->id)
                                        ->where('id_activity', $id);
        $vote->delete();
        return \redirect()->back();
    }
}
