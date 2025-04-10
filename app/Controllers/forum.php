<?php

namespace App\Controllers;

use App\Models\ForumModel;
use App\Models\CommentModel;

class Forum extends BaseController
{
    protected $forumModel;
    protected $commentModel;

    public function __construct()
    {
        $this->forumModel = new ForumModel();
        $this->commentModel = new CommentModel();
    }

    public function index()
    {
        $data['forums'] = $this->forumModel->findAll();
        return view('forum/index', $data);
    }

    public function add()
    {
        if ($this->request->getMethod() === 'post') {
            $this->forumModel->save([
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ]);
            return redirect()->to('/forum');
        }

        return view('forum/add');
    }

    public function view($id)
    {
        $data['forum'] = $this->forumModel->find($id);
        $data['comments'] = $this->commentModel->where('forum_id', $id)->findAll();
        return view('forum/view', $data);
    }

    public function add_comment($id)
    {
        if ($this->request->getMethod() === 'post') {
            $this->commentModel->save([
                'forum_id' => $id,
                'comment' => $this->request->getPost('comment')
            ]);
        }

        return redirect()->to('/forum/view/' . $id);
    }
}
