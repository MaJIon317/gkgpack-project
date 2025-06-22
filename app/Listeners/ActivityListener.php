<?php

namespace App\Listeners;

use App\Events\OrderEvent;
use App\Events\OrderProductEvent;
use App\Events\ProductEvent;
use App\Events\UserEvent;
use App\Events\WarehouseEvent;
use App\Events\WarehouseMovingEvent;
use App\Events\WarehouseRegistrationEvent;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Events\Dispatcher;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ActivityListener
{
    public function setActivity($subject, $event)
    {
        if ($event) {
            $user = auth()->user();

            if ($user) {
                $base = $event->getFillable() ?? [];

                $object = $event->getChanges() ?: ($event->getAttributes() ?? []);

                // Deleting the service fields
                foreach(['created_at', 'updated_at', 'deleted_at', 'email_verified_at', 'remember_token', 'password'] as $value) {
                    if (!array_key_exists($value, $base) && array_key_exists($value, $object)) {
                        unset($object[$value]);
                    }
                }

                $user->activities()->create([
                    'subject' => $subject,
                    'object' => $object,
                ]);
            }
        }
    }

    public function handleUserLogin(Login $event): void
    {
        $this->setActivity('login', $event->user);
    }

    public function handleUserLogout(Logout $event): void
    {
        $this->setActivity('logout', $event->user);
    }

    public function handleUserEvent(UserEvent $event): void
    {
        $this->setActivity("user-{$event->resource}", $event->user);
    }

    public function handleProductEvent(ProductEvent $event): void
    {
        $this->setActivity("product-{$event->resource}", $event->product);
    }

    public function handleWarehouseEvent(WarehouseEvent $event): void
    {
        $this->setActivity("warehouse-{$event->resource}", $event->warehouse);
    }

    public function handleWarehouseRegistrationEvent(WarehouseRegistrationEvent $event): void
    {
        $this->setActivity("warehouseRegistration-{$event->resource}", $event->warehouseRegistration);
    }

    public function handleWarehouseMovingEvent(WarehouseMovingEvent $event): void
    {
        $this->setActivity("warehouseMoving-{$event->resource}", $event->warehouseMoving);
    }

    public function handleOrderEvent(OrderEvent $event): void
    {
        $this->setActivity("order-{$event->resource}", $event->order);
    }

    public function handleOrderProductEvent(OrderProductEvent $event): void
    {
        $this->setActivity("orderProduct-{$event->resource}", $event->orderProduct);
    }

    public function subscribe(Dispatcher $events): array
    {
        return [
            Login::class => 'handleUserLogin',
            Logout::class => 'handleUserLogout',
            UserEvent::class => 'handleUserEvent',
            ProductEvent::class => 'handleProductEvent',
            WarehouseEvent::class => 'handleWarehouseEvent',
            WarehouseRegistrationEvent::class => 'handleWarehouseRegistrationEvent',
            WarehouseMovingEvent::class => 'handleWarehouseMovingEvent',
            OrderEvent::class => 'handleOrderEvent',
            OrderProductEvent::class => 'handleOrderProductEvent',
        ];
    }
}
