<?php
include(__DIR__."/view/components/header.php");
?>
<div class="h-[80dvh] bg-gray-700 flex justify-center items-center flex-col">
    <p class="p-4 text-gray-1000 text-3xl">
        O sistema foi feito para guardar usuários e senhas na session
    </p>
    <form action="controller/Controller.php" method="post">
        <input type="hidden" name="acao" value="iniciar">
        <button type="submit" class="bg-white hover:bg-green-900 p-4 rounded-2xl text-green-900 hover:text-white">Começar</button>
    </form>
</div>
<?php
include(__DIR__."/view/components/footer.php");
?>