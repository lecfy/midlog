<?php

class Post extends Controller
{
    public function index($post_id)
    {
        if (!$post = $this->get('posts', $post_id)) {
            redirect();
        }

        return $this->view('post_index', [
            'title' => $post['title'],
            'post' => $post
        ]);
    }
}