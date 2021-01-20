<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       /* $schools=DB::table('schools')
                ->join('posts','posts.id','=','schools.postid')
                ->select('schools.*','posts.name as pname','posts.picture as pimage')
                ->get();*/

         $schools=School::with("post")->first();
         dd($schools);
        return view('school.index',compact('schools'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts=Post::all();
        return view('school.create',compact('posts'));
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
        //dd($request);
        $request->validate([
                    'name'=>'required',
                    'email'=>'required',
                    'phone'=>'required',
                     'image'=>'required|mimes:jpeg,jpg,png|max:5000',
                    'pname'=>'required']);
$imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);


        School::create([
            'sname'=>request('name'),
            'semail'=>request('email'),
            'sphone'=>request('phone'),
            'sprofile'=>$imageName,
            'postid'=>request('pname')]);
        return redirect()->route('school.index');
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
