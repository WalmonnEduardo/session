function alterar(botao) {
    if (botao) {
        // Caso venha de um card (passa o botão como argumento)
        const input = botao.parentElement.querySelector('.senha');
        if (input) input.type = input.type === 'password' ? 'text' : 'password';
    } else {
        // Caso venha do form principal (usa o id padrão)
        const tipo = document.getElementById("senha");
        if (!tipo) return;
        tipo.type = tipo.type === "password" ? "text" : "password";
    }
}
