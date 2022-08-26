<?php

namespace App\Controllers;

use App\Models\WordModel;

class Word extends BaseController
{
    public function view($word)
    {
        $model = new WordModel();
        $data['data'] = $model->getWhere(['alias'=>$word])->getResult();

        return view('templates/header', $data)
            . view('pages/word')
            . view('templates/footer');
    }
}
