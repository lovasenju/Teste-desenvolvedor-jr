# Sistema de Gestão de Usuários

Este é um projeto desenvolvido em Laravel para avaliação técnica, contendo:

- Sistema de autenticação (login, registro, etc)
- Gestão de usuários e permissões (com Spatie Laravel Permission)
- Restrições de acesso por função (admin e comum)
- Telas fictícias de gestão de produtos, categorias e marcas

## Tecnologias

- PHP 8+
- Laravel 10+
- MySQL ou MariaDB
- Composer
- Node.js / NPM
- TailwindCSS
- Spatie/laravel-permission

---

1. Clonar o repositório

    ```bash
    git clone https://github.com/seu-usuario/seu-repositorio.git
    cd seu-repositorio 

2.  Instalar dependências
    bash
    composer install
    npm install
    npm run dev

3. Configurar o ambiente
    Crie um novo arquivo .env com base no .env.example:
    bash
    cp .env.example .env

    ere a chave da aplicação:
    bash
    php artisan key:generate

    Configure as variáveis de ambiente no arquivo .env, especialmente:
    makefile
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_do_banco
    DB_USERNAME=root
    DB_PASSWORD=

4. Rodar as migrations
    bash
    php artisan migrate

5. Rodar o servidor
    bash
    php artisan serve
    Depois, acesse: http://localhost:8000

6. Usuários e Acesso

A aplicação possui dois tipos de usuários:
admin: pode acessar a gestão de usuários e permissões.
comum: pode acessar apenas as páginas fictícias de produtos, categorias e marcas.
Você pode criar um novo usuário e atribuir o papel de admin ou comum manualmente no banco, ou via seed (se tiver sido implementado).

7. Observações

As telas de gestão de produtos, categorias e marcas são fictícias, com apenas um título visível.
O foco da aplicação está na gestão de usuários e permissões.
O admin não tem acesso às páginas de produtos, categorias e marcas.
O usuário comum não tem acesso às páginas de usuários e permissões.

8. Contato

Qualquer dúvida ou sugestão, entre em contato:

Nome: Ronyran Tavares

E-mail: Ronyran.tavares@gmail.com
