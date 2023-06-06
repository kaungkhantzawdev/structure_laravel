<?php

namespace App\Repositories\Post;

interface PostRepositoryInterface {

    public function getAll();

    public function store($request);

    public function update($request, $post);

    public function destory($post);

}
