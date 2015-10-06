<?php

namespace Koin\Response;

class Curl
{
    const HTTP_PRODUCTION = "http://api.qa.koin.in/V1/TransactionService.svc/Request";
    const HTTP_SANDBOX    = "https://api.koin.com.br/V1/TransactionService.svc/Request";
    const JS_PRODUCTION   = "https://resources.koin.com.br/scripts/koin.min.js";
    const JS_SANDBOX      = "http://resources.qa.koin.in/scripts/koin.min.js";
    const TERMS           = "https://www.koin.com.br/home/termos";

    /**
     * @var string
     */
    private $consumerKey;

    /**
     * @var string
     */
    private $secretKey;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $url;

    /**
     * @var [type]
     */
    public $js;

    public function __construct($consumerKey, $secretKey, $environment)
    {
        $this->setConsumerKey($consumerKey);
        $this->setSecretKey($secretKey);
        $this->setEnvironment($environment);
    }

    public function getTerms()
    {
        return self::TERMS;
    }

    public function getTermsAsHtml()
    {
        return file_get_contents(self::TERMS);
    }

    /**
     * Gets the value of consumerKey.
     *
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     * Sets the value of consumerKey.
     *
     * @param string $consumerKey the consumer key
     *
     * @return self
     */
    private function setConsumerKey($consumerKey)
    {
        $this->consumerKey = $consumerKey;

        return $this;
    }

    /**
     * Gets the value of secretKey.
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * Sets the value of secretKey.
     *
     * @param string $secretKey the secret key
     *
     * @return self
     */
    private function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;

        return $this;
    }

    /**
     * Gets the value of time.
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets the value of time.
     *
     * @param string $time the time
     *
     * @return self
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    public function setEnvironment($environment)
    {
        if ($environment == 'production') {
            $this->url = self::HTTP_PRODUCTION;
            $this->js  = self::JS_PRODUCTION;
            return $this;
        }

        $this->url = self::HTTP_SANDBOX;
        $this->js  = self::JS_SANDBOX;

        return $this;
    }

    public function getHash()
    {
        $this->setTime(time());

        $binaryHash = hash_hmac('sha512', $this->url . $this->getTime(), $this->getSecretKey(), true);

        return base64_encode($binaryHash);
    }

    public function sendPost($order)
    {
        $json = json_encode($order);

        $headers = array(
            "Content-Type:application/json; charset=utf-8",
            "Content-Length:" . strlen($json),
            "Authorization: " . $this->getConsumerKey() . ", " . $this->getHash() . ", " . $this->getTime(),
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        try {
            $response = curl_exec($ch);
            curl_close($ch);
            $output = $response;
        } catch (Exception $e) {
            $output = $e->getMessage();
        }

        return $output;
    }
}
