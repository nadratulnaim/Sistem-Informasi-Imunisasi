<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::Paginate(9);
        // return view('posts.index', compact('posts'));
        return view('posts.index', [
            'posts' => Post::latest()->paginate(9),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    public function create()
    {
        return view('posts.create', ['post' => new Post()]);
    }
    public function postadd(PostRequest $request)
    {
        $attr = $request->all();
        
        $attr['slug'] = Str::slug(request('judul_post'));
        // Create new post
        Post::create($attr);

        session()->flash('success', 'Post berhasil ditambahkan');
        // session()->flash('error', 'Post tidak berhasil ditambahkan');
        return redirect('posts');
        // return back();
    }
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $attr = $request->all();
    //    $attr = $this->validateRequest();

        $post->update($attr);

        session()->flash('success', 'Post berhasil ubah');
        return redirect('posts');
    }

    public function delete(Post $post)
    {
        $post->delete();
        session()->flash("success", "Post berhasil di hapus");
        return redirect('posts');
    }

}
