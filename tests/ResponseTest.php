<?php

namespace Tests;

use Illuminate\Http\JsonResponse;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_returns_a_response()
    {
        $response = json_response();

        $this->assertInstanceOf(JsonResponse::class, $response);
    }

    /** @test */
    public function it_returns_200_on_ok()
    {
        $response = ok();

        $this->assertEquals(200, $response->status());
    }

    /** @test */
    public function it_returns_201_on_created()
    {
        $response = created();

        $this->assertEquals(201, $response->status());
    }

    /** @test */
    public function it_returns_202_on_accepted()
    {
        $response = accepted();

        $this->assertEquals(202, $response->status());
    }

    /** @test */
    public function it_returns_204_on_no_content()
    {
        $response = no_content();

        $this->assertEquals(204, $response->status());
    }

    /** @test */
    public function it_returns_400_on_bad_request()
    {
        $response = bad_request();

        $this->assertEquals(400, $response->status());
    }

    /** @test */
    public function it_returns_401_on_unauthenticated()
    {
        $response = unauthenticated();

        $this->assertEquals(401, $response->status());
    }

    /** @test */
    public function it_returns_403_on_not_found()
    {
        $response = not_found();

        $this->assertEquals(404, $response->status());
    }

    /** @test */
    public function it_returns_404_on_forbidden()
    {
        $response = forbidden();

        $this->assertEquals(403, $response->status());
    }

    /** @test */
    public function it_returns_405_on_method_not_allowed()
    {
        $response = method_not_allowed();

        $this->assertEquals(405, $response->status());
    }

    /** @test */
    public function it_returns_406_on_not_acceptable()
    {
        $response = not_acceptable();

        $this->assertEquals(406, $response->status());
    }

    /** @test */
    public function it_returns_418_on_teapot()
    {
        $response = teapot();

        $this->assertEquals(418, $response->status());
    }

    /** @test */
    public function it_returns_422_on_unprocessable_entity()
    {
        $response = unprocessable_entity();

        $this->assertEquals(422, $response->status());
    }

    /** @test */
    public function it_returns_a_correct_format_on_errors_message()
    {
        $response = bad_request('User not found');

        $data = (array) $response->getData();

        $this->assertArraySubset([
            'message' => 'User not found',
            'errors' => [],
        ], $data);
    }
}
