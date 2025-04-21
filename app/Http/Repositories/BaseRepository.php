<?php
namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository {
    protected $model;
    public function __construct(Model $model){
        $this->model = $model;
    }
    public function create(array $payload = []){
        $model =  $this->model->create($payload);
        return $model->fresh();
    }
    public function update(array $payload = [], int $id = 0){
        $model =  $this->findById($id);
        return $model->update($payload);
    }
    public function delete(int $id = 0){
        return $this->findById($id)->delete();
    }
    public function all(){
        return $this->model->all();
    }

    public function findById(int $modelId, array $column = ['*'], array $relation = []){
        return $this->model->select($column)->with($relation)->findOrFail($modelId);
    }
}
