<?php

namespace App\Observers;

use App\Events\UserEvent;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        UserEvent::dispatch($user, __FUNCTION__);
    }
 
    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        UserEvent::dispatch($user, __FUNCTION__);
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        UserEvent::dispatch($user, __FUNCTION__);
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        UserEvent::dispatch($user, __FUNCTION__);
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        UserEvent::dispatch($user, __FUNCTION__);
    }
}
