<?php

namespace Tests\Feature;

use Tests\TestCase;

class MembershipPolicyPageTest extends TestCase
{
    public function test_membership_policy_page_is_publicly_available()
    {
        $response = $this->get('/pro-1-membership-policy');

        $response->assertOk();
        $response->assertSee('PRO 1 Membership Policy');
        $response->assertSee('Privacy and Protection');
        $response->assertSee('PRO 1 Global Home Center');
    }
}
