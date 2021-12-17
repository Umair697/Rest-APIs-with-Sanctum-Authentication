<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return json_decode(products::all());
    }
    public function product($id){
        return products::where('id','=',$id)->get();
    }
    public function delete($id){
        $model=products::find($id);
        if(!$model){
         return "This Record not exists";
        }else{
            $model->delete();
            return "This Record Deleted Successfuly";
        }
    }
}
