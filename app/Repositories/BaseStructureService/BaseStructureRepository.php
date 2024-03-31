<?php

namespace App\Repositories\BaseStructureService;

use App\Repositories\BaseStructureService\Interfaces\BaseStructureInterface;
use Carbon\Carbon;
class BaseStructureRepository implements BaseStructureInterface
{
    public $model;
    public function __construct($model){
        $this->model = $model;
    }
    public function all(){
        return $this->model->all();
    }
    public function show($id){
        return $this->model->find($id);
    }
    public function store($model){
        $model->created_at = Carbon::now();
        return $model->save();
    }
    public function update($model){
        $model->updated_at = Carbon::now();
        return $model->save();
    }
    public function destroy($model){
        return $model->delete();
    }
}
