# SYS Ecommerce

Teste para vaga de desenvolvedor PHP para empresa Blue Service.

## Installation

1. Rode GIT CLONE `git clone git@github.com:alanssant0s/teste_blue_service.git` 
2. Baixe o [Composer](https://getcomposer.org/doc/00-intro.md) ou atualize com `composer self-update`.
3. Entre dentro da pasta do projeto, caso seja a padrão `cd teste_blue_service`
4. Run `composer update`.
5. Edite o arquivo `config/app_local.php` na seção de Datasources e adicione as informações do servidor.

```
...
'Datasources' => [
        'default' => [
            'host' => '127.0.0.1',
            'port' => '5432',
            'username' => 'postgres',
            'password' => 'root',
            'database' => 'teste_blue_service',
            'url' => env('DATABASE_URL', null),
        ],
...
```

6. Utilize o arquivo `base.sql` para povoar o banco com dados de teste. 

Com as informações do banco de dados configurada, podemos rodas a aplicação:

```bash
bin/cake server -p 8765
```

Agora visite a aplicação pelo link `http://localhost:8765`.

Usuário Master Padrão

email: admin@mail.com <br>
senha: 12345678

