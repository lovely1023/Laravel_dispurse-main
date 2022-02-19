<?php

namespace Tests\Feature\Notifications;

use App\Models\User;
use App\Notifications\UserRegistered;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Notification;

class UserRegisteredTest extends TestCase
{
    use LazilyRefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_mail_is_sent()
    {
        Notification::fake();
        $user = User::factory()->create();
        Notification::assertSentTo($user, UserRegistered::class, function(UserRegistered $notification, $channels) {
            return in_array('mail', $channels);
        });
    }
}
