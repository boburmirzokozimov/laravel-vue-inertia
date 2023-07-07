<?php

namespace Tests\Unit;

use App\Models\Gift;
use App\Models\Order;
use App\Models\User;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_order_can_have_user()
    {
        $order = Order::factory()->create();

        $this->assertInstanceOf(User::class, $order->user);
    }

    public function test_order_can_have_gift()
    {
        $order = Order::factory()->create();

        $this->assertInstanceOf(Gift::class, $order->gift);
    }
}
