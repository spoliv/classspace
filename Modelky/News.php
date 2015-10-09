<?php


namespace App\Modelky;


class News extends AbstractModel
{

    static protected $table = 'news';
    static protected $columns = ['title', 'text'];
} 