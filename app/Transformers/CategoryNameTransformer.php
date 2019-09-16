<<<<<<< HEAD
<?php

namespace CodeFlix\Transformers;

use Illuminate\Database\Eloquent\Collection;
use League\Fractal\TransformerAbstract;
use CodeFlix\Models\Category;

/**
 * Class CategoryTransformer
 * @package namespace CodeFlix\Transformers;
 */
class CategoryNameTransformer extends TransformerAbstract
{

    /**
     * Transform the \Category entity
     * @param Category $model
     *
     * @return array
     */
    public function transform(Collection $model)
    {
        return [
            'names'         => $model->pluck('name'),
        ];
    }
}
=======
<?php

namespace CodeFlix\Transformers;

use Illuminate\Database\Eloquent\Collection;
use League\Fractal\TransformerAbstract;
use CodeFlix\Models\Category;

/**
 * Class CategoryTransformer
 * @package namespace CodeFlix\Transformers;
 */
class CategoryNameTransformer extends TransformerAbstract
{

    /**
     * Transform the \Category entity
     * @param Category $model
     *
     * @return array
     */
    public function transform(Collection $model)
    {
        return [
            'names'         => $model->pluck('name'),
        ];
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
