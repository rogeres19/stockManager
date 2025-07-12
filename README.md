# Laravel Demo - Gestão de Estoque

Este projeto é uma aplicação demo em Laravel para gestão de estoque, totalmente editável e pronta para rodar via Docker.

## Funcionalidades
- Cadastro, edição, listagem e remoção de itens de estoque
- Interface web simples com Bootstrap
- Persistência em banco MySQL
- Ambiente pronto para desenvolvimento com Docker Compose

## Requisitos
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Como rodar o projeto

1. Clone este repositório:
   ```sh
   git clone https://github.com/seu-usuario/seu-repo.git
   cd seu-repo/laravel
   ```

2. Suba os containers:
   ```sh
   docker compose up -d --build
   ```

3. Instale as dependências do Laravel (se necessário):
   ```sh
   docker compose exec app composer install
   ```

4. Copie o arquivo de ambiente:
   ```sh
   cp .env.example .env
   # ou no Windows:
   # copy .env.example .env
   ```

5. Gere a chave da aplicação:
   ```sh
   docker compose exec app php artisan key:generate
   ```

6. Acesse no navegador:
   - [http://localhost:8080/stocks](http://localhost:8080/stocks)

## Estrutura do Docker
- **app**: Container PHP com Composer
- **nginx**: Servidor web
- **db**: MySQL

## Como contribuir
1. Faça um fork do projeto
2. Crie uma branch: `git checkout -b minha-feature`
3. Faça suas alterações e commit: `git commit -m 'Minha feature'`
4. Envie para seu fork: `git push origin minha-feature`
5. Abra um Pull Request

## Licença
Este projeto está sob a licença MIT.
