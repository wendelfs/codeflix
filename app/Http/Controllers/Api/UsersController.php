<<<<<<< HEAD
<?php

namespace CodeFlix\Http\Controllers\Api;

use CodeFlix\Http\Controllers\Controller;
use CodeFlix\Http\Requests\AddCpfRequest;
use CodeFlix\Http\Requests\UserSettingRequest;
use CodeFlix\Repositories\Interfaces\UserRepository;

class UsersController extends Controller
{
    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function updateSettings(UserSettingRequest $request)
    {
        $data = $request->only('password');
        $this->repository->update($data, $request->user('api')->id);

        return $request->user('api');
    }

    public function addCpf(AddCpfRequest $request)
    {
        $user = $this->repository->update([
            'cpf' => $request->input('cpf')
        ],$request->user('api')->id);
        return $user;
    }
}
=======
<?php

namespace CodeFlix\Http\Controllers\Api;

use CodeFlix\Http\Controllers\Controller;
use CodeFlix\Http\Requests\AddCpfRequest;
use CodeFlix\Http\Requests\UserSettingRequest;
use CodeFlix\Repositories\Interfaces\UserRepository;

class UsersController extends Controller
{
    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function updateSettings(UserSettingRequest $request)
    {
        $data = $request->only('password');
        $this->repository->update($data, $request->user('api')->id);

        return $request->user('api');
    }

    public function addCpf(AddCpfRequest $request)
    {
        $user = $this->repository->update([
            'cpf' => $request->input('cpf')
        ],$request->user('api')->id);
        return $user;
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
