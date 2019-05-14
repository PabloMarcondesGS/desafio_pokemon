<?PHP
 //dados para montar o request
 $cidade = $_POST['cidade'];
 $idApi = 'd1e6ca2a8965e8fa5b858078444aa398';
 //resquest usando os parametros recebidos
 $respostaApi = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=' .$cidade. '&appid='.$idApi) ;
 $respostaApi = json_decode($respostaApi);
 //convertendo temperatura de Kelvin para Celsios
 $temperaturaKelvin = $respostaApi->main->temp;
 $temperaturaCelsios = ($temperaturaKelvin-273.15);
 //condição de chuva
 $respostaApi = json_decode(json_encode($respostaApi),true);
 $chuva = ($respostaApi['weather'][0]['main']);

 print_r($chuva);

//  print_r($temperaturaCelsios);
?>

