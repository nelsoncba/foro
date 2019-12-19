<?php

class ExampleTest extends FeatureTestCase
{

    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Nelson Zabala',
            'email' => 'nelson_nnn@outlook.net',
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Nelson Zabala')
            ->see('nelson_nnn@outlook.net');
    }
}
