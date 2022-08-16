# SYS Ecommerce

Teste para vaga de desenvolvedor PHP para empresa Blue Service.

## Installation

1. Rode GIT CLONE `git clone git@github.com:alanssant0s/teste_blue_service.git` 
2. Baixe o [Composer](https://getcomposer.org/doc/00-intro.md) ou atualize com `composer self-update`.
3. Entre dentro da pasta do projeto, caso seja a padrão `cd teste_blue_service`
4. Run `composer install`.
5. Edite o arquivo `config/app_local.php` na seção de Datasources e adicione as informações do servidor.

```
...
'Datasources' => [
        'default' => [
            'host' => '127.0.0.1',
            'port' => '5432',
            'username' => '[username]',
            'password' => '[password]]',
            'database' => '[database_name]',
            'url' => env('DATABASE_URL', null),
        ],
...
```

6. Utilize o arquivo `base.pgsql` para povoar o banco com dados de teste. 

```
psql -U [username] [database_name] < base.pgsql
```

Com as informações do banco de dados configurada, podemos rodas a aplicação:

```bash
bin/cake server -p 8765
```

Agora visite a aplicação pelo link `http://localhost:8765`.

Usuário Master Padrão

email: admin@mail.com <br>
senha: 12345678

