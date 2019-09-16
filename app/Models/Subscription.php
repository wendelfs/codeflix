<<<<<<< HEAD
<?php

namespace CodeFlix\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Subscription extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'expires_at',
        'canceled_at',
        'plan_id',
        'order_id',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function isExpired()
    {
        $expiresAt = new Carbon($this->expires_at);
        return $expiresAt->lt(new Carbon()) ? true : false;
    }
}
=======
<?php

namespace CodeFlix\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Subscription extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'expires_at',
        'canceled_at',
        'plan_id',
        'order_id',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function isExpired()
    {
        $expiresAt = new Carbon($this->expires_at);
        return $expiresAt->lt(new Carbon()) ? true : false;
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
