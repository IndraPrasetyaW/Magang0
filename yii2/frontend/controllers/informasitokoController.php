<?php

namespace frontend\controllers;

use yii\web\Controller; // Huruf C pada "Controller" harus besar

class InformasitokoController extends Controller // Nama class harus PascalCase
{
    public function actionIndex()
    {
        return $this->render('index'); // Pastikan view 'index' ada di folder views/informasitoko/
    }
}
