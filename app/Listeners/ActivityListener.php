<?php

namespace App\Listeners;

use App\Events;
use Illuminate\Auth\Events\Login;
use Illuminate\Events\Dispatcher;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ActivityListener
{
    public function setActivity($event, string|null $resource = null): void
    {
        $changes = $event->getDirty() ?? [];

        if ($resource === 'deleted' && !$changes) {
            $changes = $event->getAttributes();
        }

        unset(
            $changes[$event->getKeyName()],
            $changes['created_at'],
            $changes['updated_at'],
            $changes['deleted_at'],
            $changes['email_verified_at'],
            $changes['remember_token'],
            $changes['password'],
            $changes['resource'],
        );

        if ($changes) {
            $user = auth()->user();

            $user?->activities()->create([
                'user_id' => $user->id,
                'subject_type' => $event->getMorphClass(),
                'subject_event' => $resource,
                'subject_id' => $event->{$event->getKeyName()},
                'properties' => $changes,
            ]);
        }
    }

    public function handleLogin(Login $event): void
    {
        $event->user->ip = '-';

        $this->setActivity($event->user, 'login');
    }

    public function handleUserEvent(Events\UserEvent $event): void
    {
        $this->setActivity($event->user, $event->resource);
    }

    public function handleProductEvent(Events\ProductEvent $event): void
    {
        $this->setActivity($event->product, $event->resource);
    }

    public function handleWarehouseEvent(Events\WarehouseEvent $event): void
    {
        $this->setActivity($event->warehouse, $event->resource);
    }

    public function handleWarehouseRegistrationEvent(Events\WarehouseRegistrationEvent $event): void
    {
        $this->setActivity($event->warehouseRegistration, $event->resource);
    }

    public function handleWarehouseMovingEvent(Events\WarehouseMovingEvent $event): void
    {
        $this->setActivity($event->warehouseMoving, $event->resource);
    }

    public function handleOrderEvent(Events\OrderEvent $event): void
    {
        $this->setActivity($event->order, $event->resource);
    }

    public function handleOrderProductEvent(Events\OrderProductEvent $event): void
    {
        $this->setActivity($event->orderProduct, $event->resource);
    }

    public function subscribe(Dispatcher $events): array
    {
        return [
            Login::class => 'handleLogin',
            Events\UserEvent::class => 'handleUserEvent',
            Events\ProductEvent::class => 'handleProductEvent',
            Events\WarehouseEvent::class => 'handleWarehouseEvent',
            Events\WarehouseRegistrationEvent::class => 'handleWarehouseRegistrationEvent',
            Events\WarehouseMovingEvent::class => 'handleWarehouseMovingEvent',
            Events\OrderEvent::class => 'handleOrderEvent',
            Events\OrderProductEvent::class => 'handleOrderProductEvent',
        ];
    }
}
