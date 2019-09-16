<<<<<<< HEAD
<?php

namespace CodeFlix\Models;

use Bootstrapper\Interfaces\TableInterface;
use CodeFlix\Media\SeriePaths;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Serie extends Model implements Transformable, TableInterface
{
    use TransformableTrait;
    use SeriePaths;
    use SoftDeletes;

    protected $fillable = ['title', 'description','thumb'];

    public function getTableHeaders()
    {
        return ['#'];
    }

    public function getValueForHeader($header)
    {
        switch ($header) {
            case '#':
                return $this->id;
        }
    }
}
=======
<?php

namespace CodeFlix\Models;

use Bootstrapper\Interfaces\TableInterface;
use CodeFlix\Media\SeriePaths;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Serie extends Model implements Transformable, TableInterface
{
    use TransformableTrait;
    use SeriePaths;
    use SoftDeletes;

    protected $fillable = ['title', 'description','thumb'];

    public function getTableHeaders()
    {
        return ['#'];
    }

    public function getValueForHeader($header)
    {
        switch ($header) {
            case '#':
                return $this->id;
        }
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
