<?php

namespace SmartCollectionScoreSimulacion\Client;


use \GuzzleHttp\Client;
use \SmartCollectionScoreSimulacion\Client\Configuration;
use \SmartCollectionScoreSimulacion\Client\ApiException;
use \SmartCollectionScoreSimulacion\Client\ObjectSerializer;

use \SmartCollectionScoreSimulacion\Client\Api\SMARTCOLLECTIONSCORESimulacionApi as Instance;

use \SmartCollectionScoreSimulacion\Client\Model\Peticion;

use \SmartCollectionScoreSimulacion\Client\Model\CatalogoTipoContrato;
use \SmartCollectionScoreSimulacion\Client\Model\CatalogoTipoCuenta;
use \SmartCollectionScoreSimulacion\Client\Model\CatalogoTipoFrecuencia;
use \SmartCollectionScoreSimulacion\Client\Model\CatalogoVentanaTiempo;
use \SmartCollectionScoreSimulacion\Client\Model\CatalogoFronteraDeImpago;

use \SmartCollectionScoreSimulacion\Client\Model\CatalogoPeriodosVencidos;

class SMARTCOLLECTIONSCORESimulacionApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $config = new Configuration();
        $config->setHost('the_url');
        $this->x_api_key = "your_x_api_key";

        $client = new Client();
        $this->apiInstance = new Instance($client,$config);
    }
    
    public function testGetReporte()
    {
        try {

            $body = new Peticion();
            $catalogoTipoContrato = new CatalogoTipoContrato();
            $catalogoTipoCuenta = new CatalogoTipoCuenta();
            $catalogoTipoFrecuencia = new CatalogoTipoFrecuencia();
            $catalogoVentanaTiempo = new CatalogoVentanaTiempo();
            $catalogoFronteraDeImpago = new CatalogoFronteraDeImpago();
            $catalogoPeriodosVencidos = new CatalogoPeriodosVencidos();

            $body->setfolioOtorgante("folioOtorgante");
            $body->setnumeroCuenta("numeroCuenta");
            $body->settipoContrato($catalogoTipoContrato::TC);
            $body->settipoCuenta($catalogoTipoCuenta::R);
            $body->settipoFrecuencia($catalogoTipoFrecuencia::M);
            $body->setfronteraDeImpago($catalogoVentanaTiempo::_1_M);
            $body->setperiodosVencidos($catalogoPeriodosVencidos::_1);
            $body->setsaldoVencido("saldoVencido");
            $body->setsaldoActual("saldoActual");


            $result = $this->apiInstance->getReporte($this->x_api_key, $body);
            print_r($result);
        } catch (ApiException | Exception $e) {
            echo 'Exception when calling ApiTest->testGetReporte: ', $e->getMessage(), PHP_EOL;
        }        
    }
}
