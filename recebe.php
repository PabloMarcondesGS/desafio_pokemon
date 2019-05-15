<?PHP
    ##dados para montar o request
    $cidade = $_POST['cidade'] ? $_POST['cidade'] : 'campinas';
    $idApi = 'd1e6ca2a8965e8fa5b858078444aa398';
    ##resquest usando os parametros recebidos
    $respostaApi = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=' .$cidade. '&appid='.$idApi) ;
    $respostaApi = json_decode($respostaApi);
    ##convertendo temperatura de Kelvin para Celsios
    $temperaturaKelvin = $respostaApi->main->temp;
    $temperaturaCelsios = ($temperaturaKelvin-273.15);

    ##condição de chuva
    ##Transformando a resposta da api em um array para pode acessar o obejeto
    $respostaApi = json_decode(json_encode($respostaApi),true);
    $chuva = ($respostaApi['weather'][0]['main']);

    ##Logica para sempre que estiver chovendo buscar pokemons eletricos
    if($chuva == 'rain'){
        $tipoPokemon='electric';
    }else{
        ##logica para buscar pokemons de acordo com o que foi pedido 
        if($temperaturaCelsios<5){
            $tipoPokemon='ice';
        }elseif(($temperaturaCelsios>=5) &&($temperaturaCelsios<10)){
            $tipoPokemon='water';
        }elseif(($temperaturaCelsios>=12) &&($temperaturaCelsios<15)){
            $tipoPokemon='grass';
        }elseif(($temperaturaCelsios>=15) &&($temperaturaCelsios<21)){
            $tipoPokemon='ground';
        }elseif(($temperaturaCelsios>=23) &&($temperaturaCelsios<27)){
            $tipoPokemon='bug';
        }elseif(($temperaturaCelsios>=27) &&($temperaturaCelsios<=33)){
            $tipoPokemon='rock';
        }elseif($temperaturaCelsios>33){
            $tipoPokemon='fire';
        }else{
            $tipoPokemon='normal';
        }
    }

    ##chamada da api que traz os nomes dos pokemons
    $pokemon = file_get_contents('https://pokeapi.co/api/v2/type/'.$tipoPokemon);
    $pokemon = json_decode($pokemon);
    $pokemon = $pokemon->pokemon;
    $pokemon = $pokemon[0];
    $pokemon = $pokemon->pokemon->name;
    if($chuva != 'rain'){
        echo "Hoje em ".$cidade." esta fazendo ".$temperaturaCelsios." graus e você encontrara muitos ".$pokemon;
    }else{
        echo "Hoje em ".$cidade." esta fazendo ".$temperaturaCelsios." graus com chuva e você encontrara muitos ".$pokemon;
    }


?>

