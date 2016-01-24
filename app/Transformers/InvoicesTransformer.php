<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 24/01/16
 * Time: 10:07
 */

namespace App\Transformers;


class InvoicesTransformer extends Transformer
{

    public function transform($database_invoices)
    {
        //Nothing here -> no transformations example
        return $database_invoices;
    }
}