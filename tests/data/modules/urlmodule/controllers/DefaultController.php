<?php

namespace tests\data\modules\urlmodule\controllers;

class DefaultController extends \luya\web\Controller
{
    public function actionIndex()
    {
        return 'bar';
    }
}
