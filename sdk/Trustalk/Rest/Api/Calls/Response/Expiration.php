<?php

namespace Trustalk\Rest\Api\Calls\Response;

use Trustalk\Util;
use Trustalk\Rest\Client;
use Trustalk\Http\CurlClient;

class Expiration extends Client
{
    /**
     * メンバ変数
     * @var $client
     * @var $curl
     * @var $uri
     */
    protected $client;
    protected $curl;
    protected $uri = '/calls/response/expiration';

    /**
     * Construct the Account
     * @return Trustalk\Rest\Api\Calls\Response\Expiration
     */
    public function __construct(Client $client) {
        $this->curl = new CurlClient($client->credentials);
    }

    /**
     * GET
     * @return json
     */
    public function get($data = null, $timeout = null) {
        return $this->curl->request(__FUNCTION__, $this->uri, $data, $timeout);
    }

    /**
     * PUT
     * @return json
     */
    public function put($id, $data = null, $timeout = null) {
        $this->uri = Util::pathParamId($this->uri, $id);
        return $this->curl->request(__FUNCTION__, $this->uri, $data, $timeout);
    }

}
