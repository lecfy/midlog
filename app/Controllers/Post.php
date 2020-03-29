<?php

class Post extends BaseController
{
    public function index($post_id)
    {
        if (!$post = $this->get('posts', $post_id)) {
            redirect();
        }

        return view('post_index');
    }
}