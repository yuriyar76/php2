<?php


namespace App\Models;


class User extends Model
{

    public $email;
    public $name;
    public const TABLE = 'users';
    public const COLUMNS = ['email', 'name'];

}