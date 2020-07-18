<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;
use Correios;

class HomeController extends Controller
{
    protected $study;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Study $study)
    {
        // $this->middleware('auth');
        $this->study = $study;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $atraso     = $this->study->getAmountByStatus('Em andamento');
        $andamento  = $this->study->getAmountByStatus('Em atraso');
        $concluido  = $this->study->getAmountByStatus('Finalizado');

        // dd(\Correios::cep('17511395'));
        return view('home', compact('atraso', 'andamento', 'concluido'));
    }
}
