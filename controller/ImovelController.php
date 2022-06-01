<?php

require_once '../model/Imovel.php';

class ImovelController{
     public function salvar()
     {
         
         $imovel = new Imovel;

        $imovel->setDescricao($_POST['descricao']);
        $imovel->setFoto($_POST['foto']);
        $imovel->setValor($_POST['valor']);
        $imovel->setTipo($_POST['tipo']);
        $imovel->save();
     }

     public function listar()
     {
         $imoveis = new Imovel;

         return $imoveis->listAll();
     }
}