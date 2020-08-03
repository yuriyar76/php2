<?php


namespace App\Models;

use App\Db;

abstract class Model
{
    public $id;
    public static function findAll($kol=0){
        $class_call = static::class;
        $table_call = static::TABLE;
        $kol = (int)$kol;
        if($kol>0){
            $sql = "SELECT * FROM $table_call ORDER BY id DESC LIMIT $kol";
        }else{
            $sql = "SELECT * FROM $table_call";
        }

        $db = new Db();
        return $db->query($sql, $class_call);
    }
    public static function addItem(array $value){
        $class_call = static::class;
        $table_call = static::TABLE;
        $column = static::COLUMNS;
        $col = implode(',', $column);
        $str = '';
        foreach($value as $key=>$val){
            $str .= "'$value[$key]',";
        }
        $str = substr($str,0,-1);
        $sql = "INSERT INTO $table_call ($col) VALUES ($str)";
        $db = new Db();
        $db->query($sql, $class_call);
    }

    public static function findById($id){
        $class_call = static::class;
        $table_call = static::TABLE;
        $sql = "SELECT * FROM $table_call WHERE id='$id'";
        $db = new Db();
        $res = $db->query($sql, $class_call);
        if($res){
            return $res;
        }
            return false;
    }
    protected function getTemplate($name='', $data = []){
        $arResult = $data;
        ob_start();
        include ( __DIR__ . '/../../templates/'.$name.'.php');
        return ob_get_contents();
    }
}