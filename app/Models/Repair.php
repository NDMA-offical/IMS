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
    protected $fillable = ['request_by', 'request_date', 'request_sheet_id', 'repair_cost', 'repair_date', 'repair_status', 'fundingsource_id'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return ['request_by' => 'string', 'request_date' => 'date:Y-m-d', 'request_sheet_id' => 'string', 'repair_cost' => 'string', 'repair_date' => 'date:Y-m-d', 'created_at' => 'datetime:Y-m-d H:i:s', 'updated_at' => 'datetime:Y-m-d H:i:s'];
    }
    
	
	public function fundingsource(): \Illuminate\Database\Eloquent\Relations\BelongsTo
	{
		return $this->belongsTo(\App\Models\Fundingsource::class);
	}

}
