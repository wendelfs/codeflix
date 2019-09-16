<<<<<<< HEAD
<?php

namespace CodeFlix\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Order extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'user_id',
        'code',
        'value'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
=======
<?php

namespace CodeFlix\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Order extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'user_id',
        'code',
        'value'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
