# Projeto-Cadastro-PHP
Este é meu primeiro projeto no GitHub, é um projeto simples feito para criar um formulario de cadastro usando HTML e PHP

Este projeto é composto por dois arquivos: O arquivo HTML responsável por coletar dados do usuário e um arquivo PHP responsável por processar e validar essas informações.


# 1. index.html (Formulário de Cadastro)

Este arquivo HTML exibe um formulário de cadastro com os seguintes campos:

* **Nome**
* **Nome da Mãe**
* **Idade**
* **Curso**
* **Checkbox para aceitar os termos**

Ao enviar o formulário, os dados são enviados para `boasvindas.php` utilizando o método `GET`.

# Os Principais Pontos são:

* O formulário envia os dados para um script PHP (`boasvindas.php`).
* Os campos de texto permitem entrada de dados livre.
* O campo de idade aceita apenas números.
* O usuário deve aceitar os termos para concluir o cadastro.

# 2. boasvindas.php (Validação e Boas-Vindas)

Este script PHP processa os dados enviados pelo formulário. Ele realiza as seguintes ações:

#### Validações:

* Verifica se **todos os campos foram preenchidos**.
* Verifica se **o checkbox dos termos foi marcado**.
* Exibe mensagens de erro em vermelho caso alguma validação falhe.

# Se tudo funcionar corretamente:

* Exibe uma mensagem de **boas-vindas** com os dados fornecidos.
* Utiliza `htmlspecialchars()` para evitar ataques de **XSS (Cross-site scripting)** escapando caracteres especiais.
