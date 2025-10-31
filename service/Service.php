<?php
require_once(__DIR__."/../model/Perfil.php");
class Service
{
    private Perfil $perfil;
    public function __construct()
    {
        $this->perfil = new Perfil();
    }
    public function iniciar()
    {
        $this->iniciarSessao();
        $_SESSION["iniciar"] = "permitido";
    }
    public function salvar()
    {
        $this->iniciarSessao();
        if($_POST["usuario"] != null && $_POST["senha"] != null)
        {
            if(isset($_SESSION["perfis"]))
            {
                $num = count($_SESSION["perfis"]);
            }
            else
            {
                $num = 0;
            }
            $id = $num+1;
            $this->perfil->setId($id);
            $this->perfil->setUsuario($_POST["usuario"]);
            $this->perfil->setSenha($_POST["senha"]);
            $_SESSION["perfis"][$num] = $this->perfil;
        }
    }
    public function atualizar()
    {
        $this->iniciarSessao();
        if($_POST["id"] != null)
        {
            $id = $_POST["id"];
            foreach($_SESSION["perfis"] as $p)
            {
                if($id == $p->getId())
                {
                    if($_POST["usuario"] != null && $_POST["senha"] != null)
                    {
                        $p->setUsuario($_POST["usuario"]);
                        $p->setSenha($_POST["senha"]);
                        break;
                    }
                }
            }
            
        }
    }
    public function deletar()
    {
        $this->iniciarSessao();
        if($_POST["id"] != null)
        {
            $id = $_POST["id"];
            for($i = 0 ; $i< count($_SESSION["perfis"]);$i++)
            {
                if($id == $_SESSION["perfis"][$i]->getId())
                {
                    unset($_SESSION["perfis"][$i]);
                    $_SESSION["perfis"] = array_values($_SESSION["perfis"]);
                    break;
                }
            }
            
        }
    }
    public function sair()
    {
        $this->iniciarSessao();
        session_unset();
        session_destroy();
    }
    private function iniciarSessao()
    {
        if(session_status() != PHP_SESSION_ACTIVE)
            session_start();
    } 
}

?>