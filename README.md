# Sistema de Gestão Empresarial

Este é um sistema de gestão empresarial desenvolvido utilizando Laravel e MySQL.

## Funcionalidades

O sistema possui as seguintes funcionalidades:

- Gerenciamento de Clientes
- Gerenciamento de Produtos
- Gerenciamento de Pedidos
- Gerenciamento de Funcionários

## Requisitos

- PHP >= 7.4
- Composer
- MySQL

## Instalação

1. Clone o repositório:

```bash
git clone https://github.com/RaphaelTW/SistemaGestaoEmpresarial.git
cd SistemaGestaoEmpresarial


## 1. Instale as dependências:

composer install

## 2.Configure o ambiente:
Crie um arquivo .env na raiz do projeto e configure o banco de dados e outras variáveis de ambiente.

env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

## 3. Gere a chave de aplicação:

php artisan key:generate

## 4. Execute as migrações e as seeders:

php artisan migrate --seed

## 5. Inicie o servidor:

php artisan serve

Acesse o sistema em http://localhost:8000.

## Personalização
Você pode personalizar o sistema conforme suas necessidades, adicionando novas funcionalidades, alterando o layout, ou implementando autenticação de usuários.

## Contribuições
Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou enviar um pull request.

## Licença
Este projeto está licenciado sob a Licença MIT.