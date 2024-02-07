<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditTrait;
use OwenIt\Auditing\Contracts\Auditable;

class Requisition extends Model
{
    use SoftDeletes, HasUuids, HasFactory;

    protected $guarded = [];

    // public function doctor(): BelongsTo
    // {
    //     return $this->belongsTo(Doctor::class);
    // }

    // public function patient(): BelongsTo
    // {
    //     return $this->belongsTo(Patient::class);
    // }

    // public function guarantor(): BelongsTo
    // {
    //     return $this->belongsTo(Patient::class, 'guarantor_id');
    // }

    // public function laboratory(): BelongsTo
    // {
    //     return $this->belongsTo(Laboratory::class);
    // }

    public function specimens(): HasMany
    {
        return $this->hasMany(Specimen::class);
    }
}
