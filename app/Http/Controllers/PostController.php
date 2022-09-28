<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
//use MongoDB\Driver\Session;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('admin.posts.index', ['posts'=> $posts]);
    }
    public function show(Post $post) {
        return view('blog-post', ['post' => $post]);
    }
    public function create(){
        return view('admin.posts.create');
    }
    public function store() {
       $inputs = request()->validate([
           'title' => 'required|min:4|max:255',
           'post_image'  => 'file',
           'body'  => 'required'
       ]);
       if (request('post_image')) {
           $inputs['post_image'] = request('post_image')->store('images');
       }
       auth()->user()->posts()->create($inputs);
       Session::flash('createMessage', 'Post Created');
        return redirect()->route('post.index');
    }

    public function destroy(Post $post) {
               $post->delete();
               Session::flash('message', 'Post Deleted');
                return back();
    }
    public function edit(Post $post){
//        $this->authorize('view', $post);
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(Post $post) {
        $inputs = request()->validate([
            'title' => 'required|min:4|max:255',
            'post_image'  => 'file',
            'body'  => 'required'
        ]);
        if (request('post_image')) {
            $inputs['post_image'] = request('post_image')->store('images');
            $post->post_image = $inputs['post_image'];
        }
        $post->title = $inputs['title'];
        $post->body = $inputs['body'];
        $this->authorize('update', $post);
        $post->save();

        Session::flash('updateMessage', 'Post Updated');
        return redirect()->route('post.index');
    }
}
