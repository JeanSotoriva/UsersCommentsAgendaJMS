### Passo a passo

* Suba os containers do projeto
> docker-compose up -d


* Acesse o container app com o bash
> docker-compose exec -it -u root app sh


* Instale as dependências do projeto
> composer install


* Gere a key do projeto Laravel
> php artisan key:generate


* Acesse o projeto
> http://localhost:8989
