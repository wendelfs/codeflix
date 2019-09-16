<<<<<<< HEAD
<?php

namespace CodeFlix\Http\Controllers\Api;

use CodeFlix\Http\Controllers\Controller;
use CodeFlix\Repositories\Interfaces\PlanRepository;

class PlansController extends Controller
{
    /**
     * @var PlanRepository
     */
    private $repository;

    public function __construct(PlanRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->all();
    }
}
=======
<?php

namespace CodeFlix\Http\Controllers\Api;

use CodeFlix\Http\Controllers\Controller;
use CodeFlix\Repositories\Interfaces\PlanRepository;

class PlansController extends Controller
{
    /**
     * @var PlanRepository
     */
    private $repository;

    public function __construct(PlanRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->all();
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
