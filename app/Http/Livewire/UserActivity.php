<?php

namespace App\Http\Livewire;

use App\Models\UserActivity as ModelsUserActivity;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class UserActivity extends Component
{
    use WithPagination;

    public array $users = [];

    #[Url(except: null)]
    public $subject_type,
        $subject_event,
        $subject_id,
        $user_id= null;

    public function mount(): void
    {
        $this->users = ModelsUserActivity::groupBy('user_id')->get()->pluck('user.name', 'user_id')->toArray();
    }

    public function subjectTypes(): mixed
    {
        return ModelsUserActivity::where(function ($query) {
            if ($this->user_id) {
                $query->where('user_id', $this->user_id);
            }
        })->groupBy('subject_type')->select('subject_type')->get();
    }

    public function subjectEvents(): Collection
    {
        return ModelsUserActivity::where(function ($query) {
            if ($this->user_id) {
                $query->where('user_id', $this->user_id);
            }

            if ($this->subject_type) {
                $query->where('subject_type', $this->subject_type);
            }
        })->groupBy('subject_event')->select('subject_event')->get();
    }

    public function updatedSubjectType(): void
    {
        $this->subject_event = null;
        $this->subject_id = null;
    }

    public function render(): View
    {
        $activities = ModelsUserActivity::where(function ($query) {
                if ($this->user_id) {
                    $query->where('user_id', $this->user_id);
                }

                if ($this->subject_type) {
                    $query->where('subject_type', $this->subject_type);
                }

                if ($this->subject_event) {
                    $query->where('subject_event', $this->subject_event);
                }

                if ($this->subject_id) {
                    $query->where('subject_id', $this->subject_id);
                }
            })
            ->orderByDesc('created_at')
            ->paginate(100);

        return view('user-activity', compact('activities'))
            ->title(__('User Activity'));
    }
}
