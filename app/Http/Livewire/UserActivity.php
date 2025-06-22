<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserActivity extends Component
{
    use WithPagination;

    public User|null $user = null;

    public $subjects = null;

    public $subject = null;

    public function mount()
    {
        if (!$this->user) {
            $this->user = auth()->user();
        }

        $this->subjects = $this->user->activities()->groupBy('subject')->select('subject')->get();
    }

    public function render()
    {
        $this->subjects = $this->user->activities()->groupBy('subject')->select('subject')->get();

        $subject = $this->subject;

        $activities = $this->user->activities()->where(function ($query) use ($subject) {
            if ($subject) {
                $query->where('subject', $subject);
            }
        })->orderByDesc('created_at')->paginate(100);


        return view('user-activity', compact('activities'))
            ->title(__('User Activity'));
    }
}
