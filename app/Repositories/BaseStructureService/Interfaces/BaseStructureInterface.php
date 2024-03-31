<?php

namespace App\Repositories\BaseStructureService\Interfaces;

interface BaseStructureInterface
{
    public function all();

    public function show($id);

    public function store($model);

    public function update($model);

    public function destroy($model);
}
