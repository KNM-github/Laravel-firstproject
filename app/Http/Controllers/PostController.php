<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //dd(url()->full());   
        $itemPagination =$request->itemPagination;
        //dd($itemPagination);
        $items = $request->items;
        $year = $request->year ?? date('Y');
       // dd($years);
        $posts = Post::orderBy('created_at', 'desc')
                        ->whereYear('created_at',$year)
                        ->select('id', 'name', 'picture','description')
                        ->paginate($itemPagination)
                        ->appends(['items' => $items,
                                    'years' => $year]);


        return view('post.index',compact('posts','items','year'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //dd($request->all());
        return view('post.create');
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
       // dd($request);
        /*$request->validate(['name'=>'required',
                        'image'=>'required|mimes:jpeg,jpg,png|max:5000',
                            'description'=>'required']);*/

        $request->validate([
        'name' => 'required',
        'image'=>'required|mimes:jpeg,jpg,png|max:5000',
                            'description'=>'required']);
     /*   if($request->hasfile('image')){
            $image=$request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name);
            $image='/image/'.$name;
*/
              $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);


            Post::create([
                'name'=>request('name'),
                'picture'=>$imageName,
                'description'=>request('description')
            ]);
            return redirect()->route('post.index');
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
        $post=Post::find($id);
        return view('post.edit',compact('post'));
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
        //dd($request->all());
        $request->validate(['name'=>'required',
                            "image" => "sometimes|mimes:jpeg,jpg,png|max:5000",
                            'description'=>'required']);

        if($request->hasfile('image')){
            //dd('he');
        $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
        } else {
           // dd('heo');
            $imageName=request('oldimg');
        }
      $post=Post::find($id);
      $post->name=request('name');
      $post->picture=$imageName;
      $post->description=request('description');
      $post->save();
      return redirect()->route('post.index');

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
        $post=Post::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }

    public function autocomplete(Request $request)
    {
          $search = $request->get('term');
     
          $result = Post::where('name', 'LIKE', '%'. $search. '%')->get();

          return response()->json($result);
           
    } 
}
