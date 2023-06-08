<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post;
use App\Repositories\Post\PostRepositoryInterface;
use App\Traits\TestTrait;

class PostController extends Controller
{
    use TestTrait;
    private $postRepository;

    public function __construct(
        PostRepositoryInterface $postRepository,
    )
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->postRepository->getAll();
        $trait = $this->testAl();
        return view('Post.index', [
            'data' => $data,
            'trait' => $trait
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        return $this->postRepository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('Post.show', [
            'title' => $post->title,
            'description' => $post->description
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('Post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        return $this->postRepository->update($request, $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return $this->postRepository->destory($post);
    }
}
