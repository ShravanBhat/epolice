<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissingpeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('missingpeople.create');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('missingpeople.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'namec' => 'required',
            'anum' => 'required',
            'mnum' => 'required',
            'addr' => 'required',
            'namem' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'body' => 'nullable',
            'loc' => 'required',
            'face_image'=> 'image|required|max:1999',
        ]);
        
        if($request-hasfile('fface_image')){
            $filenameWithExt = $request->file('face_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('face_iamge')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('face_image')->storeAs('public/face_image',$fileNameToStore);

        }

        $missingpeople=new Missingpeople;
        $missingpeople->namec=$request->input('namec');
        $missingpeople->anum=$request->input('anum');
        $missingpeople->mnum=$request->input('mnum');
        $missingpeople->addr=$request->input('addr');
        $missingpeople->namem=$request->input('namem');
        $missingpeople->age=$request->input('age');
        $missingpeople->gender=$request->input('gender');
        $missingpeople->body=$request->input('body');
        $missingpeople->loc=$request->input('loc');
        $missingpeople->face_image=$fileNameToStore;
        $missingpeople->save();


        return redirect('/missingpeople')->with('success','Complaint registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('missingpeople.create');
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
