<?php
/**
 * Created by PhpStorm.
 * User: Farhad
 * Date: 1/9/2019
 * Time: 1:19 PM
 */

namespace Trez;

use GuzzleHttp\Client as HttpClient;

class RayganSms
{

    /** @var HttpClient */
    protected $client;

    /** @var string */
    protected $endpoint;

    /** @var string */
    protected $login;

    /** @var string */
    protected $secret;

    /** @var string */
    protected $sender;

    public function __construct(array $config)
    {
        $this->login = $config['user_name'];
        $this->secret = $config['password'];
        $this->endpoint = 'http://smspanel.trez.ir/api/smsAPI/GetCredit';

        $this->client = new HttpClient([
            'timeout' => 5,
            'connect_timeout' => 5,
        ]);
    }

    public function getCredit()
    {
        $base = [
            'Username'   => $this->login,
            'Password'     => $this->secret,
        ];

//        $params = \array_merge($base, \array_filter($params));

//        try {
        $response = $this->client->request('POST', $this->endpoint, ['form_params' => $base]);

        $response = \json_decode((string) $response->getBody(), true);

        if (isset($response['error'])) {
            throw new \DomainException($response['error'], $response['error_code']);
        }

        echo $response;
//        } catch (\DomainException $exception) {
//            throw CouldNotSendNotification::smsRespondedWithAnError($exception);
//        } catch (\Exception $exception) {
//            throw CouldNotSendNotification::couldNotCommunicateWithSms($exception);
//        }
    }
}