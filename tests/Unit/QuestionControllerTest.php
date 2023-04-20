<?php

namespace Tests\Unit;

use Tests\TestCase;

class QuestionControllerTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testQuestionTwoEndpointOne(): void
    {

        $value = 1;

        for ($i = 1; $i <= $value; $i++) {
            $response = $this->get('/api/questions/two-endpoint-two');

            $response->assertStatus(200);

            sleep(1);
        }
    }
}
