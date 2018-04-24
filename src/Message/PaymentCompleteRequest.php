<?php

namespace Omnipay\Zotapay\Message;

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Common\Exception\InvalidResponseException;


class PaymentCompleteRequest extends AbstractRequest
{
    public $liveEndpoint = 'https://gate.zotapay.com/paynet/api/v2/sale-form/';
    protected $sandboxEndpoint = 'https://sandbox.zotapay.com/paynet/api/v2/sale-form/';

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return ((bool)$this->getTestMode()) ? $this->sandboxEndpoint : $this->liveEndpoint;
    }

    /**
     * @return mixed
     */
    public function getClientOrderid()
    {
        return $this->getParameter('client_orderid');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setClientOrderid($value)
    {
        return $this->setParameter('client_orderid', $value);
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->getParameter('first_name');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setFirstName($value)
    {
        return $this->setParameter('first_name', $value);
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->getParameter('last_name');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setLastName($value)
    {
        return $this->setParameter('last_name', $value);
    }

    /**
     * @return mixed
     */
    public function getNotifyUrl()
    {
        return $this->getParameter('server_callback_url');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setServerCallbackUrl($value)
    {
        return $this->setParameter('server_callback_url', $value);
    }

    /**
     * @return mixed
     */
    public function getIpaddress()
    {
        return $this->getParameter('ipaddress');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setIpaddress($value)
    {
        return $this->setParameter('ipaddress', $value);
    }

    /**
     * @return mixed
     */
    public function getOrderDesc()
    {
        return $this->getParameter('order_desc');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setOrderDesc($value)
    {
        return $this->setParameter('order_desc', $value);
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->getParameter('address1');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setAddress1($value)
    {
        return $this->setParameter('address1', $value);
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->getParameter('description');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setDescription($value)
    {
        return $this->setParameter('description', $value);
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->getParameter('currency');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setCurrency($value)
    {
        return $this->setParameter('currency', $value);
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->getParameter('amount');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setAmount($value)
    {
        return $this->setParameter('amount', $value);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->getParameter('email');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->getParameter('city');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setCity($value)
    {
        return $this->setParameter('city', $value);
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->getParameter('zip_code');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setZipCode($value)
    {
        return $this->setParameter('zip_code', $value);
    }

    /**
     * @return mixed
     */
    public function getSuccessUrl()
    {
        return $this->getParameter('success_url');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setSuccessUrl($value)
    {
        return $this->setParameter('success_url', $value);
    }

    /**
     * @return mixed
     */
    public function getDeclineUrl()
    {
        return $this->getParameter('decline_url');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setDeclineUrl($value)
    {
        return $this->setParameter('decline_url', $value);
    }

    /**
     * @return mixed
     */
    public function getCancelUrl()
    {
        return $this->getParameter('cancel_url');
    }

    /**
     * @param $value
     * @return mixed.
     */
    public function setCancelUrl($value)
    {
        return $this->setParameter('cancel_url', $value);
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->getParameter('header');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setHeader($value)
    {
        return $this->setParameter('header', $value);
    }

    /**
     * @return mixed
     */
    public function getChannelCode()
    {
        return $this->getParameter('channelCode');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setChannelCode($value)
    {
        return $this->setParameter('channelCode', $value);
    }

    /**
     * @return mixed
     */
    public function getSecret()
    {
        return $this->getParameter('secret');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setSecret($value)
    {
        return $this->setParameter('secret', $value);
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setOrderTime($value)
    {
        return $this->setParameter('orderTime', $value);
    }

    /**
     * @return mixed
     */
    public function getOrderTime()
    {
        return $this->getParameter('orderTime');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setCountry($value)
    {
        return $this->setParameter('country', $value);
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->getParameter('country');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setPhone($value)
    {
        return $this->setParameter('phone', $value);
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->getParameter('phone');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setRedirectUrl($value)
    {
        return $this->setParameter('redirect_url', $value);
    }

    /**
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->getParameter('redirect_url');
    }

    /**
     * @return array
     */
    public function getToken()
    {
        return $this->getParameter('token');

    }


    /**
     * @param $value
     * @return mixed
     */
    public function setToken($value)
    {
        return $this->setParameter('token', $value);
    }

    /**
     * @return array
     */
    public function getZotaEndpoint()
    {
        return $this->getParameter('zota_endpoint');

    }


    /**
     * @param $value
     * @return mixed
     */
    public function setZotaEndpoint($value)
    {
        return $this->setParameter('zota_endpoint', $value);
    }

    /**
     * @return array
     */
    public function getData()
    {

        $concat = $this->getZotaEndpoint().$this->getClientOrderid().($this->getAmount() * 100).$this->getEmail().$this->getToken();
        $concat = sha1($concat);

        $sign = crypt($concat, $this->getSecret());
        $pos = mb_strpos($sign, $this->getSecret()) + mb_strlen($this->getSecret());
        $signature = mb_substr($sign, $pos);

        $input = array
        (

            "body" => array
            (
                "client_orderid" => $this->getClientOrderid(),
                "order_desc" => $this->getOrderDesc(),
                "first_name" => $this->getFirstName(),
                "last_name" => $this->getLastName(),
                "address1" => $this->getAddress1(),
                "city" => $this->getCity(),
                "zip_code" => $this->getZipCode(),
                "country" => $this->getCountry(),
                "phone" => $this->getPhone(),
                "email" => $this->getEmail(),
                "amount" => $this->getAmount(),
                "currency" => $this->getCurrency(),
                "ipaddress" => $this->getIpaddress(),
                "redirect_url" => $this->getRedirectUrl(),
                "server_callback_url" => $this->getNotifyUrl(),
                "control" => $concat
            )
        );

        $encoded = json_encode($input);

        return $input;
    }


    /**
     * Get HTTP Method.
     *
     * This is nearly always POST but can be over-ridden in sub classes.
     *
     * @return string
     */
    protected function getHttpMethod()
    {
        return 'POST';
    }

    protected function createResponse($data)
    {
        return $this->response = new PaymentResponse($this, $data, $data["redirect-url"]);
    }

    /**
     * @param int $options http://php.net/manual/en/json.constants.php
     * @return string
     */
    public function toJSON($data, $options = 0)
    {

        return $encoded = json_encode($data);

    }


    /**
     * @param $data
     * @return PaymentResponse
     */
    public function sendData($data)
    {
        // don't throw exceptions for 4xx errors
        $this->httpClient->getEventDispatcher()->addListener(
            'request.error',
            function ($event) {
                if ($event['response']->isClientError()) {
                    $event->stopPropagation();
                }
            }
        );

        // Guzzle HTTP Client createRequest does funny things when a GET request
        // has attached data, so don't send the data if the method is GET.
        if ($this->getHttpMethod() == 'GET') {
            $httpRequest = $this->httpClient->createRequest(
                $this->getHttpMethod(),
                $this->getEndpoint() . '?' . http_build_query($data),
                array(
                    'Content-type' => 'application/json',
                )
            );
        } else {

//            $httpRequest = $this->httpClient->createRequest(
//                $this->getHttpMethod(),
//                $this->getEndpoint().$this->getZotaEndpoint(),
//                array(
//                    '',
//                ),
//                http_build_query($data['body'])
//
//            );

            $curl = curl_init($this->getEndpoint().$this->getZotaEndpoint());
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data['body']));
        }

        try {

            $output = curl_exec($curl);
            curl_close($curl);

            $answer = array();
            parse_str($output, $answer);

//            $httpRequest->getCurlOptions()->set(CURLOPT_POSTFIELDS, http_build_query($data['body']) );
//            $httpRequest->getCurlOptions()->set(CURLOPT_POST, true);
//            $httpRequest->getCurlOptions()->set(CURLOPT_RETURNTRANSFER, true);
//
//            $httpResponse = $httpRequest->send();
//            // Empty response body should be parsed also as and empty array
//            $body = $httpResponse->getBody(true);
            return $this->response = $this->createResponse($answer);


        } catch (\Exception $e) {
            throw new InvalidResponseException(
                'Error communicating with payment gateway: ' . $e->getMessage(),
                $e->getCode()
            );

        }

    }
}
