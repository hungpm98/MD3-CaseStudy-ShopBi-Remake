<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class ProductRepository extends BaseRepository {
    public function getTable(){
        return 'products';
    }

    public function create($request){
        $data = $request->except('_token');
        DB::table($this->table)->insert($data);
    }

    public function update($request,$id){
        $data = $request->except('_token');
        DB::table($this->table)->where('id',$id)->update($data);
    }

}

