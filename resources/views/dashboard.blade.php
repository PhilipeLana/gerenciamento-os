@extends('layout.main') @section('conteudo') <div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard de Oficina</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Resumo do Sistema</li>
    </ol>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4 shadow border-0">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <div class="small text-white-50 text-uppercase fw-bold">OS Abertas</div>
                        <div class="h3 fw-bold">12</div>
                    </div>
                    <i class="bi bi-tools fs-1 opacity-50"></i>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4 shadow border-0">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <div class="small text-white-50 text-uppercase fw-bold">Finalizadas</div>
                        <div class="h3 fw-bold">45</div>
                    </div>
                    <i class="bi bi-check-circle fs-1 opacity-50"></i>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-dark mb-4 shadow border-0">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <div class="small text-dark-50 text-uppercase fw-bold">Clientes</div>
                        <div class="h3 fw-bold">128</div>
                    </div>
                    <i class="bi bi-people fs-1 opacity-50"></i>