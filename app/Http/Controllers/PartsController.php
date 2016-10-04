<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Part;
use App\Producer;
use App\Group;
use DB;



class PartsController extends Controller
{
    public function index(Request $request)
    {
        $g=$p=$g_id=$p_id=[];
        foreach(Producer::all() as $producer) {
            $producer_arr[$producer->id] = $producer->name;
            $p[]=$producer->id;//массив ВСЕХ айди производителей для того, чтобы при стартовой загрузке
            //страницы (когда не выбран производитель в ниспадающем меню) можно было вывести все запчасти
            //от всех производителей
            //т.е. чтобы можно было выполнить whereIn('producer_id',$producer_id), где
            //$producer_id - обычный массив: [1,4,5,89]
        }

        foreach(Group::all() as $group) {//Цикл для заполнения ниспадающего списка в представлении
            $group_arr[$group->id] = $group->name;
            $g[]=$group->id;
        }

        if (!$request->get("weight_from")) {//Цикл для заполнения ниспадающего списка в представлении
            $min_weight = Part::all()->min('weight');
        }else {
            $min_weight=$request->get("weight_from");
        }

        if (!$request->get("weight_to"))  {
            $max_weight = Part::all()->max('weight');
        }else {
            $max_weight=$request->get("weight_to");
        }

        if(!$request->get("price_to")){
            $max_price = Part::all()->max('price');
        }else {
            $max_price=$request->get("price_to");
        }

        if (!$request->get("price_from")) {
            $min_price = Part::all()->min('price');
        }else {
            $min_price = $request->get("price_from");
        }

        if (!$request->get("groups_id")) {
            $groups_id = $g;
        }else {
            $groups_id[]=$g_id = $request->get("groups_id");
        }

        if (!$request->get("producer_id")) {
            $producer_id = $p;
        }else {
            $producer_id[]=$p_id = $request->get("producer_id");

        }


        //$part_arr = DB::table('parts')->whereIn('producer_id', $query)->get();

        $part_arr = Part::whereIn('groups_id',$groups_id)->
                        whereIn('producer_id',$producer_id)->
                        whereRaw("price >= $min_price and price <= $max_price")->
                        whereRaw("weight >= $min_weight and weight <= $max_weight")->
                        paginate(10);


        return view("parts.index", [
            'producer_arr' => $producer_arr,
            'p_id' => $p_id,
            'g_id' => $g_id,
            'groups_arr' => $group_arr,
            'part_arr' => $part_arr,
            'min_price' => $min_price,
            'max_price' => $max_price,
            'min_weight' => $min_weight,
            'max_weight' => $max_weight,
        ]);
    }
}
