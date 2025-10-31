<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

require_once(__DIR__."/../service/Service.php");
require_once(__DIR__."/../config/config.php");
class Controller
{
    private Service $service;
    private ?string $acao;
    public function __construct()
    {
        $this->service = new Service();
        $this->acao = $_POST["acao"] ?? null;
        $this->validarAcao();
    }
    function validarAcao()
    {
        switch($this->acao)
        {
            case "iniciar": $this->iniciar() ; break; 
            case "insert": $this->salvar() ; break; 
            case "change": $this->atualizar() ; break; 
            case "delete": $this->deletar() ; break; 
            case "sair": $this->sair() ; break; 
        }
    }
    public function iniciar()
    {
        $this->service->iniciar();
        header("Location: ".URL_BASE."view/perfis.php");
        exit();
    }
    public function salvar()
    {
        $this->service->salvar();
        header("Location: ".URL_BASE."view/perfis.php");
        exit();
    }
    public function atualizar()
    {
        $this->service->atualizar();
        header("Location: ".URL_BASE."view/perfis.php");
        exit();
    }
    public function deletar()
    {
        $this->service->deletar();
        header("Location: ".URL_BASE."view/perfis.php");
        exit();
    }
    public function sair()
    {
        $this->service->sair();
        header("Location: ".URL_BASE);
        exit();
    }
}
(new Controller());
?>