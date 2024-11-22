<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait TracksChanges
{
    public static function bootTracksChanges(): void
    {
        static::creating(function ($model) {
            $model->created_by = Auth::id() ?? null;
        });

        static::updating(function ($model) {
            $model->updated_by = Auth::id() ?? null;
        });
    }
}
