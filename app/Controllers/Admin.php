<?php

namespace App\Controllers;

use App\Models\WordModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->wordModel = new WordModel();
    }

    public function view()
    {
        $data['words'] = $this->wordModel->orderBy('letter', 'ASC')->findAll();
        return view('admin/templates/header', $data)
            . view('admin/admin')
            . view('admin/templates/footer');
    }

    public function add()
    {
        return view('admin/templates/header')
            . view('admin/add')
            . view('admin/templates/footer');
    }

    public function edit($id)
    {
        $data['word'] = $this->wordModel->find($id);
        return view('admin/templates/header', $data)
            . view('admin/edit')
            . view('admin/templates/footer');
    }

    public function update($id)
    {
        $rules =
            [
                'word'        => 'required',
                'translation' => 'required',
                'letter'      => 'required',
                'alias'       => 'required',
            ];

        helper(['url', 'form']);
        
        if ($this->validate($rules)) {
            $data['data'] =
                [
                    'word'         => $this->request->getPost('word'),
                    'translation'  => $this->request->getPost('translation'),
                    'letter'       => rus2translit($this->request->getPost('letter'),'en'),
                    'meaning'      => $this->request->getPost('meaning'),
                    'alias'        => $this->request->getPost('alias'),
                ];

            $this->wordModel->update($id, $data['data']);
            return redirect()->to('/admin')->with('status','Data Upadated Successfully');
        }
        else return redirect()->to('/admin/edit/'.$id)->with('status','Fill Empty Forms');
    }

    public function store()
    {
        $rules =
            [
                'word'        => 'required',
                'translation' => 'required',
                'letter'      => 'required',
                'alias'       => 'required',
            ];

        helper(['url', 'form']);

        if ($this->validate($rules)) {
            $data['data'] =
                [
                    'word'         => $this->request->getPost('word'),
                    'translation'  => $this->request->getPost('translation'),
                    'letter'       => rus2translit($this->request->getPost('letter'),'en'),
                    'meaning'      => $this->request->getPost('meaning'),
                    'alias'        => $this->request->getPost('alias'),
                ];
            $this->wordModel->insert($data['data']);
            return redirect()->to('/admin')->with('status','Data Added Successfully');
        }
        else return redirect()->to('/admin/add')->with('status','Fill Empty Forms');
    }

    /*
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }*/
}
