<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditTrait;
use OwenIt\Auditing\Contracts\Auditable;

class Specimen extends Model
{
    use SoftDeletes, HasUuids, HasFactory;

    protected $guarded = [];

    public function requisition(): BelongsTo
    {
        return $this->belongsTo(Requisition::class);
    }

    public function specimen_container(): HasOne
    {
        return $this->hasOne(SpecimenContainer::class);
    }
}
