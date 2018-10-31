<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportTest extends TestCase
{
    /**
     *
     * @return void
     */
    public function test_api_customersにGETメソッドでアクセスできる()
    {
        $response = $this->get('api/customers');
        $response->assertStatus(200);
    }

    /**
     *
     * @return void
     */
    public function test_api_customersにPOSTメソッドでアクセスできる()
    {
        $response = $this->post('api/customers');
        $response->assertStatus(200);
    }

    /**
     *
     * @return void
     */
    public function test_api_customers_customer_idにGETメソッドでアクセスできる()
    {
        $response = $this->get('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     *
     * @return void
     */
    public function test_api_customers_customer_idにPUTメソッドでアクセスできる()
    {
        $response = $this->put('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     *
     * @return void
     */
    public function test_api_customers_customer_idにDELETEメソッドでアクセスできる()
    {
        $response = $this->delete('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     *
     * @return void
     */
    public function test_api_reportsにGETメソッドでアクセスできる()
    {
        $response = $this->get('api/reports');
        $response->assertStatus(200);
    }

    /**
     *
     * @return void
     */
    public function test_api_reportsにPOSTメソッドでアクセスできる()
    {
        $response = $this->post('api/reports');
        $response->assertStatus(200);
    }

    /**
     *
     * @return void
     */
    public function test_api_reports_report_idにGETメソッドでアクセスできる()
    {
        $response = $this->get('api/reports/1');
        $response->assertStatus(200);
    }

    /**
     *
     * @return void
     */
    public function test_api_reports_report_idにputメソッドでアクセスできる()
    {
        $response = $this->put('api/reports/1');
        $response->assertStatus(200);
    }

    /**
     *
     * @return void
     */
    public function test_api_reports_report_idにdeleteメソッドでアクセスできる()
    {
        $response = $this->delete('api/reports/1');
        $response->assertStatus(200);
    }
}
