<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ModelNameRepository;

class HomeController extends Controller
{

    protected $modelnames;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ModelNameRepository $modelnames)
    {
        $this->modelnames = $modelnames;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }
}
