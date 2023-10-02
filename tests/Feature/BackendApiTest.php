<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Http\Controllers\BackendApi;

class BackendApiTest extends TestCase
{
    /**
     * Test the "get" method for the "apexchart" API.
     */
    public function testGetApexChartApi()
    {
        $api = new BackendApi();
        $response = $api->get('apexchart');
        $this->assertArrayHasKey('series', $response);
        $this->assertArrayHasKey('xaxis', $response);
    }

    /**
     * Test the "get" method for the "datatable" API.
     */
    public function testGetDatatableApi()
    {
        $api = new BackendApi();
        $response = $api->get('datatable');
        $this->assertCount(50, $response);
        foreach (["id", "name", "position", "office", "age", "start_date", "salary"] as $key) {
            $this->assertArrayHasKey($key, $response[0]);
        }
    }

    /**
     * Test the "post" method for the "form" API.
     */
    public function testPostFormApi()
    {
        $api = new BackendApi();
        $response = $api->post('form', ["name" => "John Doe", "username" => "john@hon.com"]);

        $this->assertArrayHasKey("status", $response);
        $this->assertEquals("success", $response["status"]);
    }
}
