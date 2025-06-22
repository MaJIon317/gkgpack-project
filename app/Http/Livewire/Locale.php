<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Locale extends Component
{
    public function changeLocale($locale)
    {
        if (in_array($locale, config('app.available_locales'))) {
            Session::put('locale', $locale);
        }

        $this->redirect(request()->header('Referer'), navigate: true);
    }

    public function render()
    {
        return view('components.locale');
    }
}
