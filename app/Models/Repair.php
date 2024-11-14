<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'repairs';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'item_id',
        'repair_init_date',
        'expected_return_date',
        'actual_returned_date',
        'repair_status',
        'repair_cost',
        'request_by',
        'request_sheet_id',
        'fundingsource_id',
        'vendor_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'item_id' => 'integer',
        'repair_init_date' => 'date:Y-m-d',
        'expected_return_date' => 'date:Y-m-d',
        'actual_returned_date' => 'date:Y-m-d',
        'repair_status' => 'string',
        'repair_cost' => 'string',
        'request_by' => 'string',
        'request_sheet_id' => 'string',
        'fundingsource_id' => 'integer',
        'vendor_id' => 'integer',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s'
    ];
    
    /**
     * Get the item associated with the repair.
     */
    public function item(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Item::class, 'item_id');
    }

    /**
     * Get the employee who requested the repair.
     */
    public function requestedBy(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Employee::class, 'request_by');
    }

    /**
     * Get the funding source that owns the repair.
     */
    public function fundingsource(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Fundingsource::class);
    }

    /**
     * Get the vendor that owns the repair.
     */
    public function vendor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Vendor::class);
    }
}
