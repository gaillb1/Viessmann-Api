<?php
/**
 * Created by PhpStorm.
 * User: clibois
 * Date: 15/10/18
 * Time: 13:43
 */

namespace test;


use Viessmann\Oauth\ViessmannOauthClient;

class ViessmannMockClient extends ViessmannOauthClient
{
    private $resourcesDir;

    public function __construct($resourcesDir = __DIR__ . "/resources/features/")
    {
        $this->resourcesDir = $resourcesDir;
    }

    function getToken($code)
    {
        return NULL;
    }

    public function getCode(): string
    {
        return NULL;
    }

    public function readData($resourceUrl): string
    {
        return file_get_contents(resourcesDir . $resourceUrl . "\.json");
    }

    public function setData($resourceUrl, $data)
    {
        return NULL;
    }


}