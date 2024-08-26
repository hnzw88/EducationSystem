<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Curriculum;

class DeliveryTime extends Model
{
    use HasFactory;

    protected $table = 'delivery_times';
    protected $primaryKey = "id";
    protected $fillable=[
        'curriculums_id',
        'delivery_from',
        'delivery_to',
        'created_at',
        'updated_at'
    ];

    public function Curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
