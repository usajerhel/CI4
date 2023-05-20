<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Singers extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new \App\Models\SingerModel();
    }

    public function new()
    {
        return view('Singers/new');
    }

    public function create()
    {
        $post = $this->request->getPost();
        if ($this->model->save($post)) {
            return redirect()->to("/");
        } else {
            dd($this->model->errors());
        }
    }

    public function edit($id)
    {
        $singer = $this->model->find($id);

        return view('Singers/edit', $singer);
    }

    public function update()
    {
        $post = $this->request->getPost();

        if ($this->model->save($post)) {
            return redirect()->to("/");
        } else {
            dd($this->model->errors());
        }
    }

    public function delete($id)
    {
        if ($this->model->delete($id)) {
            return redirect()->to("/");
        }
    }
}