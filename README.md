# XML Process

Sistema Web para importar XML People e ShipOrdes e gravar seus dados no banco.
API para retornar esses dados do banco. Foi criado até o momento apenas controle para os dados do People e da Order

## Instalação

Clonar o repositório:

```sh
git clone https://github.com/vissini/invilla_test.git
cd invilla_Test
```

Instalar dependências do composer:

```sh
composer install
```

Instalar dependências do npm:

```sh
npm install ou yarn install
```

Compilar assets:

```sh
npm run dev ou yarn dev
```

Configuração do env:

```sh
cp .env.example .env
```

Gerar chave da aplicação:

```sh
php artisan key:generate
```

Crie um banco de dados MySql e alterar a configuração de acordo no .env. Você também pode usar outro banco de dados (Sqlite, Postgres), basta atualizar sua configuração de acordo.


Rodar migrations:

```sh
php artisan migrate
```

Iniciar aplicação:

```sh
php artisan serve
```

Gerar documentação automática da API:
```sh
php artisan apidoc:generate
```

## Rotas API

People:
- GET /api/people
- GET /api/people/{id}
- GET /api/people/phones/{id}
- GET /api/people/orders/{id}
- POST /api/people
- PUT/PATCH /api/people/{id}
- DELETE /api/people/{id}

Orders:
- GET /api/orders
- GET /api/orders/{id}
- GET /api/orders/orderItems/{id}
- GET /api/orders/ships/{id}
- POST /api/orders
- PUT/PATCH /api/orders/{id}
- DELETE /api/orders/{id}

## Rotas WEB Bonus

People:
- GET /people
- GET /people/{id}
- POST /people
- PUT/PATCH /people/{id}
- DELETE /people/{id}


## Implementações Futuras

- Implementar Tests Unitários com PHPUnit
- Implementar Authenticação da API por JWT ou/e OAuth2
- Implementar Gerênciamento completo das informações salvas no banco, via API
- Desenvolver área administrativa para Gerenciar dados salvos no banco via WEB.
```
/vendor/bin/phpunit ou composer test
```