<?php

namespace App\Http\Controllers;

use App\Models\OrdemServico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdemServicoController extends Controller
{
    
    public function create()
    {
        return view('os.create');
    }


    public function store(Request $request)
    {
        // 1. Validação dos campos necessario
        $request->validate([
            'titulo' => 'required|max:100',
            'descricao' => 'required',
            'setor' => 'required',
            'categoria' => 'required|in:Hardware,Software,Rede,Outros',
            'equipamento' => 'nullable|max:50',
        ]);

        // 2. Criação da OS vinculada ao usuário logado
        OrdemServico::create([
            'user_id' => Auth::id(), 
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'setor' => $request->setor,
            'categoria' => $request->categoria,
            'equipamento' => $request->equipamento,
            'status' => 'Pendente', 
        ]);

        return redirect()->route('dashboard.usuario')->with('success', 'Ordem de Serviço aberta com sucesso!');
    }
}