# omnipay-zotapay
php driver for zotapay wallet

## Installation

Zotapay is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "antonis0490/omnipay-zotapay": "dev-master"
    }
}
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update

## Basic Usage

To make a request:

    use Omnipay\Omnipay;
    use Omnipay\Zotapay\Message\StatusCallback;

    $gateway = Omnipay::create('Zotapay');
    
    $options = array
    (
        "client_orderid" => "merchant reference no",
        "order_desc" => "description",
        "first_name" => "user's first name",
        "last_name" => "user's last name",
        "address1" => "user's address",
        "city" => "user's city",
        "zip_code" => "user's city",
        "country" => "user's country",
        "phone" => "user's phone",
        "email" => "user's email",
        "amount" => "user's amount",
        "currency" => "currency code",
        "ipaddress" => "ip addr",
        "redirect_url" => "url to be redirected after finish payment",
        "server_callback_url" => "url where payment status is to be notified",
        "token" => "zotapay control",
        "zota_endpoint" => "zotapay endpoint")
    );
    
    //change testmode to 0 when live
    $response = $gateway->completePurchase($options)->setTestMode(1)->send();

    if ($response->isRedirect()) {
        //redirect
    } else {
       //error
    }
  
    
Notify function:

    $status = new StatusCallback($_REQUEST);

    if($status->orderidFilled()){
        $signature = $status->ValidChecksum("zotapay control"));
        if($signature && $status->isSuccessful()){
            //do whats needed
        }   
    }

    
The following gateways are provided by this package:

* Zotapay

For general usage instructions, please see the main [Omnipay](https://omnipay.thephpleague.com/)
site.
