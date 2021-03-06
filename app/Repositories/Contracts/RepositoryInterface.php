<?php

namespace Kenswitch\Repositories\Contracts;

interface RepositoryInterface
{
    public function paginate($perPage = 15, $columns = ['*']);

    public function update(array $data, $id);

    public function delete($id);
}