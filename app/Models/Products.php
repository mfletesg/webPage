<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    use HasFactory;


    public function getProductsGroup(){
        $query = DB::select("SELECT p.product_id, null as 'images-products'  FROM products p GROUP BY p.product_id ");
        $query = array_map(function ($value) {
            return (array)$value;
        }, $query);
        return $query;
    }

    public function getProductsById($productID){
        $query = DB::select("SELECT p.product_id FROM products p WHERE p.product_id = '{$productID}'");
        $query = array_map(function ($value) {
            return (array)$value;
        }, $query);
        return $query;
    }

    function getViewTypeProductByID($productID){
        $query = DB::select("SELECT p.view_type, null as 'images-products', d.product_color
                                FROM products p 
                             LEFT JOIN detail_products d on d.product_id = p.product_id
                             WHERE p.product_id = '{$productID}'
                             GROUP by p.view_type ORDER BY p.view_type asc");
        $query = array_map(function ($value) {
            return (array)$value;
        }, $query);
        return $query;
    }


    function getViewTypeProductByType($productID, $type){
        $query = DB::select("SELECT p.view_type, p.path  
                                FROM products p WHERE p.product_id = '{$productID}' AND p.view_type = '{$type}'");
        $query = array_map(function ($value) {
            return (array)$value;
        }, $query);
        return $query;
    }

    function getViewTypeSKuById($productID, $type){
        $query = DB::select("SELECT s.sku_id, s.path, d.product_color FROM detail_products d 
                                LEFT JOIN skus s ON s.sku_id = d.sku_id 
                             WHERE d.product_id = '{$productID}'
                                AND s.view_type = '{$type}'
                             GROUP BY s.sku_id, s.path ");
        $query = array_map(function ($value) {
            return (array)$value;
        }, $query);
        return $query;
    }
}
