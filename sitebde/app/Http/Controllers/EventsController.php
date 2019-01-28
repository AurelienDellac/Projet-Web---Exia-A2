<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Controllers\RegistrationsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ActivitiesController;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventMail;
use App\Models\User;

class EventsController extends Controller
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
        return view("creerEvent", ["activities"=>ActivitiesController::index()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fee' => 'String|required|max:50',
            'date' => 'Date|required|max:500',
        ]);

        $image = $request->file('image');
        $data = $request->all();

        
       
            Event::create([
                'fee' => $data['fee'],
                'date' => $data['date'],
                'id_activity' => $data['activite'],
            ]);
        
        
        $user = User::findOrFail(ActivitiesController::show($data['activite'])->id_author);
        Mail::to($user->email)->send(new EventMail(ActivitiesController::show($data['activite']->title)));
        return redirect("evenements");
    }
        
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        if($event != null) {
            $isRegister = null;
            if(Auth::check()) {
                $isRegister = RegistrationsController::show(Auth::user()->id, $id)->first();
            }
            return view('evenement', [
                "id_event" => $id, 
                "isRegister" => $isRegister
            ]);
        } else {
            return redirect(404);
        }
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
        Event::destroy($id);
        return redirect("evenements");
    }

    public function masked($id) {
        $event = Event::findOrFail($id);
        ActivitiesController::masked($event->id_activity);
        return redirect("evenements");
    }
}
