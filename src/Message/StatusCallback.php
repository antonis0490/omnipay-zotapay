<?php
namespace Omnipay\Zotapay\Message;

use Omnipay\Common\Message\AbstractResponse;


class StatusCallback extends AbstractResponse
{
    const STATUS_SUCCESSFUL = 'approved';
    const STATUS_DECLINED = 'declined';
    const STATUS_ERROR = 'error';
    const STATUS_PENDING = 'pending';
    const STATUS_FILTERED = 'filtered';

    public function __construct(array $post)
    {
        $this->data = $post;
    }

    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return (mb_strtolower($this->getStatus()) == self::STATUS_SUCCESSFUL ? true : false);
    }

    /**
     * @return bool
     */
    public function isDeclined()
    {
        return (mb_strtolower($this->getStatus()) == self::STATUS_DECLINED ? true : false);
    }

    /**
     * @return bool
     */
    public function isError()
    {
        return (mb_strtolower($this->getError()) == 1 ? true : false);
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return (mb_strtolower($this->getStatus()) == self::STATUS_PENDING ? true : false);
    }

    /**
     * @return bool
     */
    public function isExpired()
    {
        return (mb_strtolower($this->getStatus()) == self::STATUS_EXPIRED ? true : false);
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->data['error'];
    }

    public function getComment()
    {
        return $this->data['comment'];
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->getComment();
    }

    /**
     * @return mixed
     */
    public function getCommand()
    {
        return $this->data['command'];
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->data['status'];
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->data['amount'];
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->data['ccy'];
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->data['user'];
    }

    /**
     * @return mixed
     */
    public function getTransactionId()
    {
        return $this->data['bill_id'];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->data['name'];
    }

    /**
     * @return bool
     */
    public function orderidFilled()
    {
        return ($this->data['orderid'] != '' ? true : false);
    }


    /**
     * @return string
     */
    public function getResponseChecksum($secret_word)
    {
        $concat = $this->data["status"].$this->data["orderid"].$this->data["merchant_order"].$secret_word;
        return $concat;
    }

    /**
     * @param $hex
     * @return string
     */
    public function HexToStr($hex)
    {
        $string = "";
        for ($i = 0; $i < mb_strlen($hex) - 1; $i += 2)
            $string .= chr(hexdec($hex[$i].$hex[$i+1]));
        return($string);
    }

    /**
     * @param $secret_word
     * @param $concat
     * @return string
     */
    public function CalculateChecksum($secret_word, $concat){

        $signature = sha1($concat);
        return $signature;
    }

    /**
     * @param $secret_word
     * @return bool
     */
    public function ValidChecksum($secret_word){
        $concat = $this->getResponseChecksum($secret_word);
        $checkSum = $this->CalculateChecksum($secret_word, $concat);
        if (mb_strtolower($checkSum) == mb_strtolower($this->data['control'])){
            return true;
        }
        return false;
    }
}
