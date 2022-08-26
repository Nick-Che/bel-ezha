<?php

namespace App\Controllers;

use App\Models\WordModel;

class Admin extends BaseController
{
    public function view()
    {

        $wordModel = new WordModel();
        $data['words'] = $wordModel->orderBy('letter', 'ASC')->findAll();
        return view('admin/templates/header', $data)
            . view('admin/admin ')
            . view('admin/templates/footer');
    }

    public function store()
    {
        $wordModel = new WordModel();
        $data = [
            'word'         => $this->request->getPost('word'),
            'translation'  => $this->request->getPost('translation'),
            'letter'       => $this->request->getPost('letter'),
            'meaning'      => $this->request->getPost('meaning'),
            'alias'        => $this->request->getPost('alias'),
        ];

        $this->$wordModel->insert($data);
    }

    /*
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }*/
}