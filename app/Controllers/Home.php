<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $ordemModel;
    private $usuarioModel;
    private $ordemItemModel;
    private $clienteModel;
    private $fornecedorModel;
    private $itemModel;

    public function __construct()
    {
        
        $this->usuarioModel = new \App\Models\UsuarioModel();
        
        
    }

    public function index()
    {

        $data = [
            'titulo' => 'Home'
        ];

        if( ! $this->usuarioLogado()->temPermissaoPara('visualizar-home')){

            return view('Home/index_simples', $data);
            
        }

        $data['totalClientes'] = $this->clienteModel->countAllResults();
        $data['totalFornecedores'] = $this->fornecedorModel->countAllResults();
        $data['totalItens'] = $this->itemModel->countAllResults();
        $data['totalOrdensEncerradas'] = $this->ordemModel->where('situacao', 'encerrada')->countAllResults();

        

        return view('Home/index', $data);
    }
}