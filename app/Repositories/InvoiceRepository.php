<?php

namespace App\Repositories;

class InvoiceRepository extends Repository
{

    function model()
    {
        return \App\Invoices::class;
    }
}