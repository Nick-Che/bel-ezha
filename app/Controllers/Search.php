<?php

namespace App\Controllers;

use App\Models\WordModel;

class Search extends BaseController
{
    public function __construct()
    {
        $this->wordModel = new WordModel();
    }

    function ajaxSearch()
    {
        helper(["url"]);

        $term = $this->request->getGet('term');

        if ($term != '') {
            $data = $this->wordModel->like('word', $term)->orderBy('word', 'ASC')->limit(10)->get()->getResult();
            echo json_encode($data);
        } else {
            echo json_encode(null);
        }
    }
}
