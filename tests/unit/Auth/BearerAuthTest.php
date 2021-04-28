<?php

use Snorlax\Auth\BearerAuth;

/**
 * Tests for the auth option on Snorlax
 */
class BearerAuthTest extends SnorlaxTestCase
{
    public function testBearerAuth()
    {
        $token = base64_encode('this is secret');

        $auth = new BearerAuth($token);

        $this->assertSame($token, $auth->getCredentials());
        $this->assertSame('Bearer', $auth->getAuthType());
    }
}
