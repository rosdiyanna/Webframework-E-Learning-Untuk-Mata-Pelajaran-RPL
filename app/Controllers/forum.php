<?php

namespace App\Controllers;

use App\Models\ThreadModel;
use App\Models\PostModel;

class Forum extends BaseController
{
    public function index()
    {
        $threadModel = new ThreadModel();
        $data['threads'] = $threadModel->orderBy('created_at', 'DESC')->findAll();
        return view('forum/index', $data);
    }

    public function create()
    {
        return view('forum/create');
    }

    public function store()
    {
        $threadModel = new ThreadModel();
        $threadModel->save([
            'author_name' => $this->request->getPost('author_name'),
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ]);
        return redirect()->to('/forum');
    }

    public function detail($id)
    {
        $threadModel = new ThreadModel();
        $postModel = new PostModel();

        $data['thread'] = $threadModel->find($id);
        $data['posts'] = $postModel->where('thread_id', $id)->orderBy('created_at')->findAll();

        return view('forum/detail', $data);
    }

    public function reply($id)
    {
        $postModel = new PostModel();
        $postModel->save([
            'thread_id' => $id,
            'author_name' => $this->request->getPost('author_name'),
            'content' => $this->request->getPost('content'),
        ]);
        return redirect()->to('/forum/detail/' . $id);
    }
}
