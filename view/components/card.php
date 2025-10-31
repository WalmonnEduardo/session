<div class="h-2/6 w-5/6 bg-gray mt-4 relative">
    <form action="<?=URL_BASE?>controller/Controller.php" method="post" class="w-full h-full bg-gray-700 rounded-xl flex flex-col justify-center items-center">
        <div class="mb-5 w-full flex justify-center flex-col items-center">
            <label for="usuario" class="text-white">Usuário</label>
            <br>
            <input type="text" name="usuario" autocomplete="off" class="rounded-xl px-2 w-2/3" value="<?=$p->getUsuario()?>">
        </div>
        <div class="mb-5 w-full flex justify-center flex-col items-center">
            <label for="senha" class="text-white">Senha</label>
            <br>
            <div class="flex">
                <input type="password" class="px-2 w-6/8 rounded-tl-2xl rounded-bl-2xl senha" name="senha" autocomplete="off" value="<?=$p->getSenha()?>">
                <button type="button" onclick="alterar(this)" class="w-1/6 px-2 bg-gray-900 rounded-tr-2xl rounded-br-2xl text-white flex justify-center items-center">
                    <img class="visi" src="img/visibility.png" alt="visibility">
                </button>
            </div>

        </div>
        <input type="hidden" name="id" value="<?=$p->getId()?>">
        <input type="hidden" name="acao" value="change">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-xl">Atualizar</button>
    </form>
  <form action="<?=URL_BASE?>controller/Controller.php" method="post" class="absolute top-4 right-4">
        <input type="hidden" name="id" value="<?=$p->getId()?>">
        <input type="hidden" name="acao" value="delete">
        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-xl text-sm">Excluir</button>
    </form>
</div>
