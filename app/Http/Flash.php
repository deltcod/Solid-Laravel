<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 25/01/16
 * Time: 20:15
 */

namespace App\Http;


class Flash
{
    public function message($message)
    {
        echo "MESSAGE";

        //session->flush('flash_message', '$message');
    }
}