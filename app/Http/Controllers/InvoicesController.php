<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\RepositoryInterface;
use App\Transformers\InvoicesTransformer;


/**
 * Class InvoicesController
 * @package App\Http\Controllers
 */
class InvoicesController extends Controller
{

    /**
     * @var RepositoryInterface
     */
    protected $repo;

    /**
     * InvoicesController constructor.
     * @param $repo
     *
     * DEPENDENCY INJECTION
     */

    public function __construct(RepositoryInterface $repo, InvoicesTransformer $invoicesTransform)
    {
        $this->invoicesTransform = $invoicesTransform;
        $this->repo = $repo;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $invoices = $this->invoicesTransform->transform($this->repo->all());

        return view('invoices',compact('invoices'));


    }
}
