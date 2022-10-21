<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Asantibanez\LivewireCalendar\LivewireCalendar;

class EventsCalendar extends LivewireCalendar
{
    public function events() : Collection
    {
        return Model::query()
        ->whereDate('scheduled_at', '>=', $this->gridStartsAt)
        ->whereDate('scheduled_at', '<=', $this->gridEndsAt)
        ->get()
        ->map(function (Model $model) {
            return [
                'id' => $model->id,
                'title' => $model->title,
                'description' => $model->notes,
                'date' => $model->scheduled_at,
            ];
        });
    }
}
