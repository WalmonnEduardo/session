<?php
require_once(__DIR__."/../config/config.php");
require_once(__DIR__."/../model/Perfil.php");
if(session_status() != PHP_SESSION_ACTIVE)
    session_start();
if(!(isset($_SESSION["iniciar"]) && $_SESSION["iniciar"] == "permitido"))
{
    header("Location: ".URL_BASE);
    exit();
}
include(__DIR__."/components/header.php");
?>
<div class="h-[80dvh] w-screen bg-gray-500 flex">
    <div class="h-full w-1/2 flex justify-center items-center">
        <form action="<?=URL_BASE?>controller/Controller.php" method="post" class="absolute top-3 right-3 group z-50">
            <input type="hidden" name="acao" value="sair">
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-full" title="Sair">Sair</button>
        </form>
        <form action="<?=URL_BASE?>controller/Controller.php" method="post" class="w-1/2 h-2/3 bg-gray-700 rounded-xl flex flex-col justify-center items-center">
            <div class="mb-5 w-full flex justify-center flex-col items-center">
                <label for="usuario" class="text-white">Usuário</label>
                <br>
                <input type="text" name="usuario" autocomplete="off" class="rounded-xl px-2 w-2/3">
            </div>
            <div class="mb-5 w-full flex justify-center flex-col items-center">
                <label for="senha" class="text-white">Senha</label>
                <br>
                <div class="flex">
                    <input type="password" class="px-2 w-[270px] rounded-tl-2xl rounded-bl-2xl" id="senha" name="senha" autocomplete="off">
                    <button type="button" onclick="alterar()" class="w-[40px] px-2 bg-gray-900 rounded-tr-2xl rounded-br-2xl text-white flex justify-center items-center">
                        <img class="visi" src="img/visibility.png" alt="visibility">
                    </button>
                </div>

            </div>
            <input type="hidden" name="acao" value="insert">
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-xl">Enviar</button>
        </form>
    </div>
    <div class="h-full w-1/2 bg-gray-600 flex flex-col items-center">
        <?php
        foreach($_SESSION["perfis"] as $p)
        {
          include(__DIR__."/components/card.php");    
        }
        ?>
    </div>
   
</div>
<script src="js/funcao.js"></script>
<?php
include(__DIR__."/components/footer.php");
?>