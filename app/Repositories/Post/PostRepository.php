<?php

namespace App\Repositories\Post;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface {

    public function getAll()
    {
        // TODO: Implement getAll() method.
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        return $posts;
    }

    public function store($request)
    {
        // TODO: Implement store() method.
        $title = $request->title;
        $description = $request->description;

        $post = new Post();
        $post->title = $title;
        $post->description = $description;
        $post->save();

        return redirect()->route('post.index')->with('success', 'Post successfully created.');
    }

    public function update( $request, $post)
    {
        // TODO: Implement update() method.
        $title = $request->title;
        $description = $request->description;

        $post->title = $title;
        $post->description = $description;
        $post->save();
        return redirect()->route('post.index')->with('success', 'Post successfully updated.');
    }

    public function destory($post)
    {
        // TODO: Implement destory() method.
        $post->delete();
        return redirect()->route('post.index')->with('success', 'Post successfully deleted.');
    }

}
