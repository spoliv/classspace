<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 10.10.2015
 * Time: 22:18
 */

namespace App\Controllers;

use App\view\View as View;
use App\Modelky\News as News;

class NewsController extends AController
{
    protected function actionAll()
    {
        $view = new View('view/indexv.php');
        $view->news = News::findAll();
        $view->display();
    }

    protected function actionOne()
    {
        $oneart = new View('view/article.php');
        if(isset($_GET['id'])) {

            $oneart->article = News::findByPk($_GET['id']);
        }
        $oneart -> display();
    }

    protected function actionAdd()
    {
        $addart = new View('view/forms.php');
        $addart->display();

        if (isset($_POST['text']) && isset($_POST['title'])) {

            $article = new News();
            $article->title = $_POST['title'];
            $article->text = $_POST['text'];
            $article->save();
        }
    }
} 