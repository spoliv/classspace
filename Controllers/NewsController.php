<?php

namespace App\Controllers;

use App\view\View as View;
use App\Modelky\News as News;

class NewsController extends AController
{
    protected function actionAll()
    {
        $view = new View('../view/articles.php');
        $view->news = News::findAll();
        $view->display();
    }

    protected function actionAdmin()
    {
        $view = new View('../view/articles_admin.php');
        $view->news = News::findAll();
        $view->display();
    }


    protected function actionOne()
    {
        $oneart = new View('../view/article.php');
        if (isset($_GET['id'])) {

            $oneart->article = News::findByPk($_GET['id']);
        }
        $oneart->display();
    }

    protected function actionAdd()
    {
        /*if ($_GET['id'] > 0) {
            $id = $_GET['id'];
            $editart = new View('../view/article_admin.php');
            $editart->article = News::findByPk($id);
            $editart->display();
        } else*/
        if (isset($_POST['text']) && isset($_POST['title'])) {

            $article = new News();
            $article->title = $_POST['title'];
            $article->text = $_POST['text'];
            $article->save();
        } else {
            $addart = new View('../view/article_admin.php');
            $addart->display();
        }
    }

    protected function actionEdit()
    {
        if (isset($_POST['title']) && isset($_POST['text'])) {
            $id = $_GET['id'];
            $article = new News();
            $article->title = $_POST['title'];
            $article->text = $_POST['text'];
            $article->update($id);
        }
        $editart = new View('../view/article_admin.php');
        $editart->article = News::findByPk($_GET['id']);
        $editart->display();
        /*$article = new News();
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->update();*/
    }

    protected function actionDelete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            News::delete($id);
        }
    }
} 