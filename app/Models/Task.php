<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    /** @var bool */
    public $timestamps = false;

    /** @var string */
    protected $table = 'task';

    /** @var string */
    protected $primaryKey = 'task_id';

    /** @var string[] */
    protected $fillable = [
        'title',
        'status',        
    ]; 
     
}
