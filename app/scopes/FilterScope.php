<?php


namespace App\scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;


class FilterScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if ($companyId = request('company_id')) {
            $builder->where('company_id', $companyId);
        }

        if ($categoryId = request('category_id')) {
            $builder->where('category_id', $categoryId);
        }
        if ($cotmovieId = request('cotmovie_id')) {
            $builder->where('cotmovie_id', $cotmovieId);
        }
        if ($cityId = request('city_id')) {
            $builder->where('city_id', $cityId);
        }
    }
}
