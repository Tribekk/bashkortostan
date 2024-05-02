<?php

namespace App\Filters;

class StructureFilter extends QueryFilter
{
    public function id($id = null)
    {
        return $this->builder->when($id, function ($query) use ($id) {
            $query->where('id', $id);
        });

    }

    public function search_job($search_string = '')
    {
        return $this->builder->where('job_title', 'LIKE', '%' . $search_string . '%');
    }

    public function search_fio($search_string = '')
    {
        return $this->builder->where('FIO', 'LIKE', '%' . $search_string . '%');
    }
}
