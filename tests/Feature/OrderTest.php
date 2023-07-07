<?php

namespace Tests\Feature;

use App\Models\Gift;
use App\Models\Order;
use App\Models\User;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $this->admin();

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_orders_can_be_created()
    {
        $this->admin();

        $attributes = [
            'user_id' => User::factory()->create()->id,
            'gift_id' => Gift::factory()->create()->id
        ];

        $this->post('/api/orders', $attributes)
            ->assertStatus(200);

        $this->assertDatabaseHas('orders', $attributes);
    }

    public function test_orders_can_be_updated()
    {
        $this->withoutExceptionHandling();
        $this->admin();

        $order = Order::factory()->create();

        $this->patch('/orders/' . $order->id, ['status' => 'finished']);

        $this->assertDatabaseHas('orders', ['status' => 'finished']);
    }
}
