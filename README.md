<h1>Olá!</h1>

Esta é uma Api para armazenar Cidades de acordo com seus respectivos estados.
Para a criaçao do banco de dados temos uma migrate.

<h3>Rotas</h3>

Descreveremos um pouco sobre as rotas


    - Metodo GET -

        - .../api/cidades
            esta rota lista todas cidades ja cadastradas no bd

        - .../api/cidade/idcidade
            esta rota retorna o id da cidade, buscando pelo nome da cidade

        - .../api/cidade/verifica
            esta rota verifica se uma cidade ja esta cadastrada no bd, 
            retornando os dados da cidade caso encontre ou, 
            retornando 0 quando nao encontrar a cidade.
        
    - Metodo POST -

        - .../api/cidade
            esta rota cadastra uma nova cidade no bd
    
    - Metodo DELETE - 

        - .../api/cidade/{'id}
            esta rota deleta uma cidade recebendo o id como parametro
    
    - Metodo PUT -

        - .../api/cidade/{'id}
            esta rota edita as informações de uma cidade, recebendo o id como parametro


<h3>BD</h3>

Para criar o bd rodar o comando <strong>php artisan migrate</strong>
A migration disponivel cria duas tabelas no bd, sendo elas:

    - tb_cidades
        para armazenar os dados das cidades
    
    - tb_estados
        para armazenar dados dos estados
        

para a populaçao da tabela tb_estados executar o commando <strong>php artisan db:seed</strong>, temos uma unica seeder para popular,
Lembrete: rodar a seeder após rodar a migrate, para polular a tabela de forma correta
