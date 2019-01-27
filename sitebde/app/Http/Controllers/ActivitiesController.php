<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Activity::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("creerActivite");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    static public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'String|required|max:50',
            'description' => 'String|required|max:500',
            'image' => 'Image|max:1000|nullable',
        ]);

        $image = $request->file('image');
        $data = $request->all();

        if ($image) {
            $image = $image->store('events', 'images'); 
            Activity::create([
                'title' => $data['title'],
                'description' => $data['description'],
                'img_src' => $image,
                'id_author' => Auth::user()->id,
            ]);
        } else {
            Activity::create([
                'title' => $data['title'],
                'description' => $data['description'],
                'id_author' => Auth::user()->id,
            ]);
        }
        
        return redirect("evenements");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    static public function show($id)
    {
        return Activity::where('id_author', $id)->orderBy('id', 'desc')->first();
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
        //
    }
}
