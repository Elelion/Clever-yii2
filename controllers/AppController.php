<?php

namespace app\controllers;

use app\models\Portfolio;
use app\models\ServiceCategory;
use yii\web\Controller;


class AppController extends Controller
{
    protected function setMeta($title = null, $description = null, $keywords = null)
    {
        $this->view->title = $title;

        $this->view->registerMetaTag([
            'name' => 'description',
            'content' => $description]);

        $this->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $keywords]);
    }

    protected function getHomeUrl()
    {
        return 'http://clever.cx';
    }

    protected function getImagePath()
    {
        /**
         * @fixme:
         * web/images/ - for production
         * images/ - for local debugging
         */
        return $imagePath = 'images/';
    }

    protected function getPortfolioQuery()
    {
        $portfolioList = Portfolio::find()
            ->orderBy('RAND()')
            ->where(['type_portfolio' => 'gallery'])
            ->limit(3)
            ->all();

        return $portfolioList;
    }
}