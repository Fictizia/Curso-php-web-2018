<?php
require_once ('autoload.php');
require_once ('./vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use \GuzzleHttp\Client;

final class GuzzleTest extends TestCase
{
    public function testGuzzle() {

        $client = new Client();
        $res = $client->request('GET', 'http://localhost:80');
        $statusCode = $res->getStatusCode();

        $this->assertEquals ($statusCode, 200);
    }

}