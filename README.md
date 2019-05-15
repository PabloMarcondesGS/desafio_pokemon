# desafio_pokemon
O objetivo é criar uma aplicação web seguindo os seguintes critérios:

Em uma página HTML deve ser possível informar uma cidade de qualquer lugar do mundo;
De acordo com as condições climáticas desta cidade deve-se exibir um Pokémon baseado em seu tipo (fogo, água, vento, elétrico, etc) seguindo as seguintes regras:
-Lugares onde a temperatura for menor (<) que 5ºC, deve-se retornar um pokémon de gelo (ice).
-Lugares onde a temperatura estiver entre (>=) 5ºC e (<) 10ºC, deve-se retornar um pokémon do tipo água (water).
-Lugares onde a temperatura estiver entre 12ºC e 15ºC, deve-se retornar um pokémon do tipo grama (grass).
-Lugares onde a temperatura estiver entre 15ºC e 21ºC, deve-se retornar um pokémon do tipo terra (ground).
-Lugares onde a temperatura estiver entre 23ºC e 27ºC, deve-se retornar um pokémon do tipo inseto (bug).
-Lugares onde a temperatura estiver entre 27ºC e 33ºC inclusive, deve-se retornar um pokémon do tipo pedra (rock).
-Lugares onde a temperatura for maior que 33ºC, deve-se retornar um pokémon do tipo fogo (fire).
-Para qualquer outra temperatura, deve-se retornar um pokémon do tipo normal.
-E, no caso em que esteja chovendo na região um pokémon elétrico (electric) deve ser retornado, independente da temperatura.
Após a consulta deve-se exibir na tela:
Temperatural atual da cidade em graus Celcius;
Se está chovendo ou não;
Nome do Pokémon seguindo as regras acima.


Para solucionar o problema proposto foi desenvolvida uma solução totalmente em php
-2 parametros são usados a cidade e o id para usar a API do clima , deixei o id da api como uma variavel pensando que mais de uma pessoa poderia solicitar e usar seu proprio id.
-O formulario so tem um campo com pedindo para colocar a cidade , que aceita cidades com acentuação, a unica tratativa que foi feita e para caso nao seja digitada uma cidade irá buscar de campinas.
-Os nomes das variaveis tendem a ser descritivo quanto ao que tem nelas.
-Para rodar o programar no linux basta baixar os arquivos em uma pasta, acessar a pasta via terminal , rodar o comando php -S localhost:*numero da porta* e depois acessar em um navegador localhost:*numero da porta*/formulario.php