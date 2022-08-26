<?php

namespace App\Controllers;

use App\Models\WordModel;

class Browse extends BaseController
{
    public function view($letter)
    {
        $model = new WordModel();
        $data['data'] = $model->getWhere(['letter' => $letter])->getResult();

        return view('templates/header', $data)
            . view('pages/browse')
            . view('templates/footer');
    }
}
