<?php

namespace Koin\Response;

class Codes
{
    /**
     * @var array
     */
    public $codes;

    public function __construct()
    {
        $this->setCodes();
    }

    public function setCodes()
    {
        $codes = array(
            'xxx' =>
            'Erro não indentificado',

            '200' =>
            'Sua compra foi APROVADA! Obrigado por comprar com Koin Pós-Pago.',

            '300' =>
            'Infelizmente sua compra não foi aprovada. Por favor, utilize outra forma de pagamento.',

            '302' =>
            'Infelizmente sua compra não foi aprovada. Por favor, utilize outra forma de pagamento.',

            '304' =>
            'Infelizmente sua compra não foi aprovada. Para mais informações, entre em contato
            com o SAC KOIN (sac@koin.com.br).',

            '312' => 'Seu Pedido foi processado pela Koin e encontra-se em análise. Por favor,
            aguarde um novo contato por e-mail.',

            '314' => 'Seu Pedido foi processado pela Koin e encontra-se em análise.
            Por favor, aguarde um novo contato por e-mail.',

            '500' =>
            'Ocorreu um erro no processamento! Por favor, tente novamente.',

            '501' =>
            'Ocorreu um erro de autenticação. Por favor, entre em contato com a loja.',

            '601' =>
            'Erro no valor do pedido. Por favor, entre em contato com a loja.',

            '602' =>
            'Não encontramos nenhum produto no pedido. Por favor, entre em contato com a loja.',

            '603' =>
            'O número do pedido é inválido. Por favor, entre em contato com a loja.',

            '701' =>
            'Infelizmente sua compra não foi aprovada pois excede o seu limite de crédito com a Koin.
            Para mais informações, entre em contato com o SAC KOIN (sac@koin.com.br).',

            '704' =>
            'Infelizmente sua compra não foi aprovada. Para mais informações, entre em contato com o SAC
            KOIN (sac@koin.com.br).',

            '998' =>
            'O pedido já foi enviado para o Koin (Nesses casos o pedido não deverá ser considerado
            "Reprovado", o correto é utilizar a API de Consulta de Status para verificar o status
            do primeiro pedido).',

            '999' =>
            'Requisição Inválida (Será apresentado o parâmetro que está incorreto).',
        );

        foreach ($codes as $code => $message) {
            $this->codes[$code] = $message;
        }
    }

    public function getCode($code)
    {
        $code = (string) $code;

        if (isset($this->codes[$code])) {
            return $this->codes[$code];
        }
        return $this->codes['xxx'];

    }

    public function addCode($code, $message)
    {
        $this->codes[$code] = $message;
    }
}
