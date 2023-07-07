<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderCreateRequest;
use App\Http\Requests\OrderUpdateRequest;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Http\Response;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function index()
    {
        return Inertia::render('Orders/Index')->with([
            'orders' => Order::all()->map(fn($order) => [
                'id' => $order->id,
                'user' => $order->user->name,
                'gift' => $order->gift->name,
                'status' => $order->status,
            ]),
            'statuses' => [
                OrderStatus::NEW,
                OrderStatus::PROGRESS,
                OrderStatus::BRANCH,
                OrderStatus::GIVEN,
                OrderStatus::FINISHED,
            ]
        ]);
    }

    public function edit(Order $order)
    {
        return Inertia::render('Orders/Edit')->with([
            'order' => [
                'id' => $order->id,
                'user' => $order->user->name,
                'gift' => $order->gift->name,
                'status' => $order->status,
            ],
            'statuses' => [
                OrderStatus::NEW,
                OrderStatus::PROGRESS,
                OrderStatus::BRANCH,
                OrderStatus::GIVEN,
                OrderStatus::FINISHED,
            ]
        ]);
    }

    public function store(OrderCreateRequest $request)
    {
        Order::create($request->validated());

        return Response::HTTP_ACCEPTED;
    }

    public function update(OrderUpdateRequest $request, Order $order)
    {
        $order->update($request->validated());

        return back();
    }
}
