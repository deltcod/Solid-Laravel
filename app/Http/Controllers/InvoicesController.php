<?php

namespace App\Http\Controllers;

use App\Repositories\InvoiceRepository;
use App\Http\Requests;
use App\Repositories\RepositoryInterface;
use App\Transformers\InvoicesTransformer;


class InvoicesController extends Controller
{

    protected $repo;

    /**
     * InvoicesController constructor.
     * @param $repo
     *
     * DEPENDENCY INJECTION
     */

    public function __construct(InvoiceRepository $repo, InvoicesTransformer $invoicesTransform)
    {
        $this->invoicesTransform = $invoicesTransform;
        $this->repo = $repo;
    }

    public function index()
    {
        $invoices = $this->invoicesTransform->transform(
            $this->repo->all());
        return view('invoices',compact('invoices'));


    }
}
