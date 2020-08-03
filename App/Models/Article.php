<?php

namespace App\Models;

class Article extends Model
{
    public const COLUMNS = ['title', 'content'];
    public const TABLE = 'news';
    public const ARTICLES = 'articles';
    public const ARTICLE = 'article';

    public static function getArticles($kol){
      $res = parent::findAll($kol);
      $arrRes = (array)$res;
      if(!empty($arrRes)){
          $templ = (new Article)->getTemplate(static::ARTICLES, $arrRes);
          ob_clean();
          return $templ;
      }
      return "Нет шаблона для вывода";
    }
    public static function getArticle($id){
        $id=(int)$id;
        $res = parent::findById($id);
        $arrRes = (array)$res;
        if(!empty($arrRes)){
            $templ = (new Article)->getTemplate(static::ARTICLE, $arrRes);
            ob_clean();
            return $templ;
        }
        return "Нет шаблона для вывода";
    }



}