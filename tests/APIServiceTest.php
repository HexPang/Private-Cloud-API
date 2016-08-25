<?php
require_once "../CloudAPIClient.php";
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class APIServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testDataInsert(){
        $client = new CloudAPIClient('10000');
        $result = $client->Request('test',['page'=>1,'msg'=>'hahaha']);
        var_dump($result);
    }
}
