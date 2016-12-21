<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeamFormRequest;
use App\Team;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('teamIndex', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createTeam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamFormRequest $request)
    {
        $team = new Team(array(
        'tname' => $request->get('teamName'),
        'owner' => $request->get('owner'),
        'manager' => $request->get('manager')
    ));

    $team->save();
    return redirect('/createTeam')->with('status', 'Your ticket has been created! Its unique id is:');
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team=Team::find($id)->first();
        return view('teamShow',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = team::find($id)->firstOrFail();
        return view('teamEdit', compact('team'));
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
        $team=Team::find($id)->firstOrFail();
        $team->tname=$request->get('teamName');
        $team->owner=$request->get('owner');
        $team->manager=$request->get('manager');
        $team->save();
        return redirect(action('TeamsController@edit', $team->id))->with('status', 'The team '.$id.' has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id)->firstOrFail();
        $team->delete();
        return redirect('/teams')->with('status','The team' .$id.' has been deleted!');
    }
}
