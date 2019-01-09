<?php

namespace Trez\RayganSms;

use GuzzleHttp\Client as HttpClient;

class Sms
{
    /** @var HttpClient */
    protected $client;

    /** @var string */
    protected $endpoint;

    /** @var string */
    protected $user_name;

    /** @var string */
    protected $password;

    /** @var string */
    protected $phone_number;

    /** @var string */
    protected $sender;

    public function __construct(array $config)
    {
        $this->user_name = $config['user_name'];
        $this->password = $config['password'];
        $this->phone_number = $config['phone_number'];
        $this->endpoint = 'https://RayganSMS.com/SendMessageWithPost.ashx';
        
        $this->client = new HttpClient([
            'timeout' => 5,
            'connect_timeout' => 5,
        ]);
    }

    public function sendMessage($message_config)
    {
        $base = [
            'UserName' => $this->user_name,
            'Password' => $this->password,
            'PhoneNumber' => $this->phone_number,
            'Smsclass' => '1',
        ];

        $params = [
            'MessageBody'=> $message_config['message'],
            'RecNumber'=> $message_config['recive_number']
        ];

        $params = \array_merge($base, \array_filter($params));
        $response = $this->client->request('POST', $this->endpoint, ['form_params' => $params]);
        $response = \json_decode((string)$response->getBody(), true);
        return $response;
    }
}
