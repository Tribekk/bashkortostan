<?php

namespace App\Filters;

class SettlementsFilter extends QueryFilter{
    public function id($id = null){
        return $this->builder->when($id, function($query) use ($id){
            $query->where('id', $id);
        });
        
    }

    public function search_fileld($search_string = ''){
        return $this->builder->where('name', 'LIKE', '%'.$search_string.'%');
    }
}