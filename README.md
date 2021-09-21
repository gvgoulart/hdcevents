O sistema consiste em um website, onde se pode criar e participar de eventos, onde é necessário um autenticação.

<h1>Tecnologias utilizadas</h1>
<ul>
    <li>PHP</li>
    <li>Laravel</li>
        <ol> 
            <li>Laravel Jetstream(Autenticação)</li>
        </ol>
<li>Javascript</li>
    <ol>
        <li>Jquery</li>
     </ol>  
<li>Css</li>
    <ol>
        <li>Bootstrap</li>
     </ol>  
<li>HTML</li>
</ul>


<h1>Instruções para instalação:</h1>

Após a clonagem do repositório, fazer a instalação do composer na raíz do projeto:
```
composer install
```
Fazer a configuração do arquivo .env copiando o arquivo .env.example:
```
cp .env.example .env

Após a configuração do banco de dados em .env, executar as migrations:
```
php artisan migrate:fresh
```

Executar o localhost e ser feliz.
```
php artisan serve
