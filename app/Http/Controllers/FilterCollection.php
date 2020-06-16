<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class FilterCollection
{
    const fieldDefs = [
               'color' =>
                [
                    'operator'=> '=',
                    'column' => 'productcolor',
                    'escape' => 'all',
                ],

                'type' =>
                [
                    'operator'=> '=',
                    'column' => 'producttype',
                    'escape' => 'all',
                ],

                'SmallD' =>
                [
                    'operator'=> '>=',
                    'column' => 'productdiameter',
                    'escape' => null,
                ],
                'LargeD' =>
                [
                    'operator'=> '<=',
                    'column' => 'productdiameter',
                    'escape' => null,
                ],

                'cheap' =>
                [
                    'operator'=> '>=',
                    'column' => 'productprice',
                    'escape' => null,
                ],
                'exp' =>
                [
                    'operator'=> '<=',
                    'column' => 'productprice',
                    'escape' => null,
                ]

    ];

    public static function getFromRequest(Request $request)
    {
        $filters = [];
        foreach(self::fieldDefs as $filterName => $filterFieldDef){
            $value = $request->input($filterName);
            $operator  = $filterFieldDef['operator'];
            $column  = $filterFieldDef['column'];
            if($value == $filterFieldDef['escape']) {
                continue;
            }
            $filters[]= new Filter($column,$operator,$value);
        }

        return $filters;

    }

    public static function applyFilters($filters = [])
    {
        $prods = DB::table('products');
        foreach($filters as $filter){
            $prods->where($filter->column, $filter->operator, $filter->value);
        }

        return $prods->get();
    }
}
