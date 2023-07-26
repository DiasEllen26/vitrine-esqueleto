# Painel de Administração Adidas - Esqueleto

👟📊 Bem-vindo ao Painel de Administração da Adidas! 👟📊

![Logo da Adidas](https://i.pinimg.com/736x/44/6c/b7/446cb72989d51b889be6812d3fcf7247.jpg)

## Sumário

- [Introdução](#introdução)
- [Recursos](#recursos)
- [Pré-requisitos](#pré-requisitos)
- [Instalação](#instalação)
- [Uso](#uso)
- [Projeto Universitário](#projeto-universitário)
- [Configuração do Banco de Dados](#configuração-do-banco-de-dados)
- [Contribuições](#contribuições)
- [Licença](#licença)

## Introdução

Este é um Painel de Administração desenvolvido em PHP e MySQL para a marca Adidas. O painel permite aos administradores gerenciar produtos.

## Recursos

- 👟 Gerenciar produtos da Adidas.
- 📈 Visualizar e atualizar o estoque.
- 🛒 Ver detalhes dos pedidos realizados.
- 👤 Gerenciar contas de usuários e permissões de acesso.

## Pré-requisitos

Antes de executar o Painel de Administração da Adidas, você precisará ter o seguinte instalado em seu sistema:

- PHP (versão 7 ou superior)
- Banco de dados MySQL
- Servidor web (por exemplo, Apache ou Nginx)
- Navegador web moderno

## Instalação

1. Clone o repositório do GitHub:

```
git clone https://github.com/DiasEllen26/vitrine-esqueleto/
```

2. Mova os arquivos do projeto para o diretório raiz do seu servidor web.

## Uso

1. Abra o navegador web e acesse o Painel de Administração da Adidas.

2. Faça login usando suas credenciais de administrador.

## Projeto Universitário

Este projeto foi realizado como parte do trabalho acadêmico do terceiro período da faculdade. O objetivo era desenvolver um Painel de Administração para uma empresa fictícia, e a escolha da marca Adidas foi feita como exemplo para este projeto.

O projeto envolveu o desenvolvimento de recursos de gerenciamento de produtos, estoque, pedidos e usuários.

## Configuração do Banco de Dados

1. Crie um novo banco de dados MySQL para o Painel de Administração da Adidas.

2. Importe o arquivo `vitrine3.sql` localizado no diretório principal para configurar as tabelas necessárias.

3. Atualize as configurações de conexão com o banco de dados no arquivo `config.php` com suas credenciais do MySQL.

```php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'adidas_db';
```

4. O Painel de Administração da Adidas agora está conectado ao seu banco de dados MySQL.

## Contribuições

Agradecemos as contribuições para melhorar o Painel de Administração da Adidas. Se você deseja contribuir, siga os passos abaixo:

1. Faça um fork do repositório.

2. Crie um novo branch para sua funcionalidade ou correção de bug.

3. Faça as alterações e as confirme.

4. Envie as alterações para o seu repositório forkado.

5. Crie uma pull request no repositório original.

## Licença

O Painel de Administração da Adidas possui a Licença MIT. Você pode encontrar o texto completo da licença no arquivo `LICENSE`.

👟 Aproveite o Painel de Administração Adidas! 👟

Este projeto foi criado com esforço acadêmico, e esperamos que ele seja útil para suas necessidades de gerenciamento. Se encontrar algum problema ou tiver sugestões, sinta-se à vontade para abrir uma issue no GitHub. Obrigado por usar nosso painel! 😊
