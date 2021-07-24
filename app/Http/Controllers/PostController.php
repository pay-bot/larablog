<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $user_id = auth()->user()->id;
        $posts = Post::where('user_id', $user_id)->get();
        return view('private.post.index', compact('posts'));
    }

    public function create()
    {
        return view('private.post.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'description' => 'required'
        ]);

        $image = $request->file('file');

        //get name original file
        $image_name = $image->getClientOriginalName();
        //test random create past oncloud
        $pastas = random_int(1,99);

        // $image_url = cloudinary()->upload($image->getRealPath())->getSecurePath();
        $image_url = $request->file('file')->storeOnCloudinary('deleteme/'.$pastas)->getSecurePath();

        //save local
        // $image->move(public_path('images'), $image_name);
       
        //method to save database
        $image = new Post();
        $image->image_name = $image_name;
        $image->image_url = $image_url;

        $image->save();

        

        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
            'category_id' => $request->category_id,
            'image' => $image,
            'description' => $request->description,



        ]);
        return redirect()->route('post')->with('message', 'berhasil <strong>membuat</strong> post');
    }

    public function edit(Post $post)
    {

        $this->authorize('update', $post);
        $categories = Category::all();

        return view('private.post.edit', compact('post', 'categories'));
    }

    public function update(Post $post, Request $request)
    {
        $this->authorize('update', $post);
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'description' => 'required'
        ]);

        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('thumbnail', $file_name);

        $post->update([
            'title' => $request->title,
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
            'category_id' => $request->category_id,
            'image' => $image,
            'description' => $request->description,



        ]);

        return redirect()->route('post')->with('message', 'berhasil <strong>edit</strong> post');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back()->with('message', 'berhasil <strong>hapus</strong> post');
    }
}
