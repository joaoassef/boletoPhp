<?php

include_once('vendor/autoload.php');

use OpenBoleto\Banco\Sicredi;
use OpenBoleto\Agente;

$sacado = new Agente('João Assef Jorge Melo', '276.240.608-09', 'Av. Agostinho domingues, 691, Jardim Universitário', '14784-350', 'Barretos', 'Sp');
$cedente = new Agente('Grêmio Cultural de Colina', '79.052.122/0001-81', 'R. Dr. Oscár Pinheiro Barcelos, 291', '14770-000', 'Colina', 'Sp');

$boleto = new Sicredi;
$boleto->setDataVencimento(new DateTime(date("Y-m-d")));
$boleto->setValor(23.00);
$boleto->setSequencial(0000011);//NOSSO NUMERO
$boleto->setSacado($sacado);
$boleto->setCedente($cedente);
$boleto->setAgencia(715); //CODIGO DA COOPERATIVA
$boleto->setPosto(30);
$boleto->setCarteira(1);
$boleto->setConta(74494); //CONTA CORRENTE SEM O DIGITO
$boleto->setInstrucoes("Aqui vai as instruções");
$boleto->setEspecieDoc("DMI"); //Duplicata Mercantil por Indicação
$boleto->setLogoPath("/boletoPhp/assets/images/logo_220x65.png");


echo $boleto->getOutput();

