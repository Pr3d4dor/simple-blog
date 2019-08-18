# Simple Blog

Um app simples que simula um blog com posts e categorias

Somente o administrador pode criar categorias

Somente o administrador pode ver todos os posts, caso contrario cada usuario pode
ver somente os seus posts

A listagem de posts e categorias (CRUDS) pode ser acessada menu no canto superior direito.

Alunos: Gianluca Bine e Alessandro Dias.

## Instalação

Clonar o repositório:

```sh
git clone https://github.com/Pr3d4dor/simple-blog.git simple-blog
cd simple-blog
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

Gerar chave dos tokens JWT (api)

```sh
php artisan jwt:secret
```

Crie um banco de dados SQLite. Você também pode usar outro banco de dados (MySQL, Postgres), basta atualizar sua configuração de acordo.

```sh
touch database/database.sqlite
```

Rodar migrations:

```sh
php artisan migrate
```

Rodar seeders:

```sh
php artisan db:seed
```

Iniciar aplicação:

```sh
php artisan serve
```

Visite a aplicação no navegador e pode ser feito o login com os usuarios:

- **Email:** admin@admin.com
- **Senha:** admin

- **Email:** normal@admin.com
- **Senha:** normal

## Rotas API

Fazer a autentição na rota de authenticacao da API para pegar o token
POST /api/auth/login
Resposta (200):
```json
{
  "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9zaW1wbGUtYmxvZy50ZXN0XC9hcGlcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNTY2MDkxMzAzLCJleHAiOjE1NjYwOTQ5MDMsIm5iZiI6MTU2NjA5MTMwMywianRpIjoidmpoaW1mMUFFYzhyY2w2dCIsInN1YiI6MiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.Mj1om79DdL0ppJI_hzzVuxFac1jD9rjO9I-5I9Vf4Xs",
  "token_type": "bearer",
  "expires_in": 3600
}
```

Usar o access_token para realizar as operacoes CRUD nas demais rotas com o header Bearer Token, exemplo:
```
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9zaW1wbGUtYmxvZy50ZXN0XC9hcGlcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNTY2MDkxMzAzLCJleHAiOjE1NjYwOTQ5MDMsIm5iZiI6MTU2NjA5MTMwMywianRpIjoidmpoaW1mMUFFYzhyY2w2dCIsInN1YiI6MiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.Mj1om79DdL0ppJI_hzzVuxFac1jD9rjO9I-5I9Vf4Xs
```

Posts:
- GET /api/posts
- GET /api/posts/{id}
- POST /api/posts
- PUT/PATCH /api/posts/{id}
- DELETE /api/posts/{id}

Corpo das requisicoes POST, PUT/PATCH:
```
{
  "title": "Titulo do post",
  "body": "Corpo do post",
  "categories": [1, 2, 3] // array de ids das categorias associadas ao post
}
```

Categorias:
- GET /api/categories
- GET /api/categories/{id}
- POST /api/categories
- PUT/PATCH /api/categories/{id}
- DELETE /api/categories/{id}

Corpo das requisicoes POST, PUT/PATCH:
```
{
  "name": "Nome da categoria",
  "color": "#fffff", // Cor da categoria em hexadecimal
}
```

## Testes

Para rodar os testes (Feature e Unitários) basta rodar:
```
/vendor/bin/phpunit ou composer test
```
