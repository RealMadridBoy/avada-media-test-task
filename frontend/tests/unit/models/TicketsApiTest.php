<?php
/**
 * Created by PhpStorm.
 * User: Жека
 * Date: 30.07.2019
 * Time: 17:10
 */

namespace frontend\tests\unit\models;

use common\fixtures\UserFixture;
use GuzzleHttp\Client;
use common\models\Tickets;

class TicketsApiTest extends \Codeception\Test\Unit
{
    protected $tester;

    public function testGET()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://am.loc/tickets');

        $this->assertEquals(200, $response->getStatusCode());

        $client2 = new Client();
        $response2 = $client2->request('GET', 'http://am.loc/tickets/1');

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testPOST()
    {
        //$lastTicket = Tickets::find()->orderBy('`id` DESC')->limit(1)->one();
        /*
        $data = [
            'row' => $lastTicket->row,
            'place' => $lastTicket->place + 1,
            'status' => 'free',
        ];
        */

        $data = [
            'row' => 10,
            'place' => 27,
            'status' => 'free',
        ];

        $client = new Client();
        $response = $client->request('POST', 'http://am.loc/tickets', [
            'form_params' => $data,
        ]);
        $this->assertEquals(201, $response->getStatusCode());
    }

    public function testPUT()
    {
        $data = [
            'row' => 10,
            'place' => 27,
            'status' => 'booked',
        ];

        $client = new Client();
        $response = $client->request('PUT', 'http://am.loc/tickets/154', [
            'form_params' => $data,
        ]);
        $this->assertEquals(200, $response->getStatusCode());

        $data2 = [
            'row' => 10,
            'place' => 27,
            'status' => 'bought',
        ];

        $client2 = new Client();
        $response2 = $client2->request('PUT', 'http://am.loc/tickets/154', [
            'form_params' => $data2,
        ]);
        $this->assertEquals(200, $response2->getStatusCode());

        $data3 = [
            'row' => 10,
            'place' => 27,
            'status' => 'booked',
        ];

        $client3 = new Client();
        $response3 = $client3->request('PUT', 'http://am.loc/tickets/154', [
            'form_params' => $data3,
        ]);
        $this->assertEquals(500, $response3->getStatusCode());
    }

    public function testDELETE()
    {
        $client = new Client();
        $response = $client->request('DELETE', 'http://am.loc/tickets/154');
        $this->assertEquals(200, $response->getStatusCode());

        $client2 = new Client();
        $response2 = $client2->request('DELETE', 'http://am.loc/tickets/154');
        $this->assertEquals(204, $response2->getStatusCode());
    }
}