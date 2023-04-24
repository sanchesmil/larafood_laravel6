<?php

namespace App\Observers;

use App\Models\Plan;
use Illuminate\Support\Str;

class PlanObserver
{
    /**
     * Handle the plan "created" event.
     *
     * @param  \App\Models\Plan  $plan
     * @return void
     */
    public function creating(Plan $plan) // creating = antes de criar o plano seta a URL
    {
        $plan->url = Str::kebab($plan->name);
    }

    /**
     * Handle the plan "updated" event.
     *
     * @param  \App\Models\Plan  $plan
     * @return void
     */
    public function updating(Plan $plan) // updating = antes de atualizar o plano seta a URL
    {
        $plan->url = Str::kebab($plan->name);
    }


}
