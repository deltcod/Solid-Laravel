<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 25/01/16
 * Time: 16:42
 */

namespace App\Repositories;


class UserRepository extends Repository
{

    function model()
    {
        return \App\User::class;
    }
}