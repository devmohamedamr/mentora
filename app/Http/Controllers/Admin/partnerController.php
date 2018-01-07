<?php

namespace App\Http\Controllers\Admin;

use App\partnerModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class partnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = partnerModel::find(1);

        return view('Back.partner',compact('data'));
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
        $image =  $request->file('files');

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('\Front\img\web');

        $new =  $image->move($destinationPath, $input['imagename']);


        if(!empty($image))
        {
            $user = new partnerModel();

            $user->logo = $input['imagename'];
            $user->title = 'adv';
            $user->desc = 'adv';

            $user->save();
        }
        return back()
            ->with('success','Image Uploaded successfully.')
            ->with('path',$image);

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
