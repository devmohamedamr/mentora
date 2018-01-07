<?php

namespace App\Http\Controllers\Admin;

use App\homeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = homeModel::find(1);
        return view('Back.home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'slogan' => 'required',
            'mission' => 'required'

        ]);

        $title = $request->input('title');
        $slogan = $request->input('slogan');
        $mission = $request->input('mission');
        $vision = $request->input('vision');
        $qus = $request->input('qus');
        $data = homeModel::find(1);
        $data->title = $title;
        $data->slogan = $slogan;
        $data->mission = $mission;
        $data->vision = $vision;
        $data->qus= $qus;
        $data->save();
        \Session::flash('update','update success');
        return redirect('Admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
