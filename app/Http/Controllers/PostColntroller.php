<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostColntroller extends Controller
{
    public function index(){

    $post=post::get();
    return view('posts.index',compact('post'));
    }

    public function create(){


        return view('posts.create');
    }
    public function stor(Request $request){
$request->validate([
    'Title'=>['required']
]);
post::create([
  'Title'=> $request->Title
]);
return redirect('posts');
    }
    public function edit($id){
        $post=post::findOrFail($id);
   return view('posts.update',compact('post'));

    }
    public function update(Request $request,$id=null){
    $post=post::findOrFail($id);

    $post->update([

        'Title'=> $request->Title
    ]);
    return redirect('posts');

    }

    public function delete($id){
    $post=post::findOrFail($id);
    $post->delete();
    return redirect('posts');
    }
}
