<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = ['id'];

    // Scope
    public function scopeWhereHasReservation($query, $start, $end) {

        $query->where(function($q) use($start, $end) {

            $q->where('start_at', '>=', $start)
                ->where('start_at', '<', $end);

        })
        ->orWhere(function($q) use($start, $end) {

            $q->where('end_at', '>', $start)
                ->where('end_at', '<=', $end);

        })
        ->orWhere(function($q) use ($start, $end) {

            $q->where('start_at', '<', $start)
                ->where('end_at', '>', $end);

        });

    }
}
