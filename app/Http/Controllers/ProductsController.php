<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;



class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->Products = new Products();
    }


    public function index()
    {
        header('Content-type: text/xml');
        $productName = '${productname}';
        $title_size = 1;

        $xml = "<?xml version='1.0' encoding='utf-8'?><catalog xmlns='http://www.demandware.com/xml/impex/catalog/2006-10-31' catalog-id='storefront-catalog-m-en'><header><image-settings><internal-location base-path='/'/><view-types><view-type>large</view-type><view-type>medium</view-type><view-type>small</view-type><view-type>swatch</view-type></view-types><alt-pattern>".$productName."</alt-pattern><title-pattern>".$productName."</title-pattern></image-settings></header>";


        $products = $this->Products->getProductsGroup();



        foreach ($products as $p => $product) {
            $xml .= '<product product-id="'.$product['product_id'].'">';
                $xml .="<images>";

                $viewTypeProducts = $this->Products->getViewTypeProductByID($product['product_id']);
                $products[$p]['images'] =  $viewTypeProducts;

                foreach ($viewTypeProducts as $v =>  $viewType ) {
                    $viewTypeProducts = $this->Products->getViewTypeProductByType($product['product_id'], $viewType['view_type']);
                    $products[$p]['images'][$v]['images-products'] = $viewTypeProducts;

                    $xml .= '<image-group view-type="'.$viewType['view_type'].'">';
                        foreach ($viewTypeProducts  as $s => $img) {
                            $xml .= '<image path="'.$img['path'].'"/>';
                        }
                    $xml .= '</image-group>';

                    if ($viewType['product_color'] === null) {
                        $products[$p]['images'][$v]['images-sku'] = array();
                    }
                    else{
                        $viewTypeSKU = $this->Products->getViewTypeSKuById($product['product_id'], $viewType['view_type']);
                        $products[$p]['images'][$v]['images-sku'] = $viewTypeSKU;



                        $xml .= '<image-group view-type="'.$viewType['view_type'].'">';
                            foreach ($viewTypeSKU  as $s => $img) {
                                if ($s === 0) {
                                    $xml .= '<variation attribute-id="color" value="'.$img['product_color'].'"/>';
                                }
                                $xml .= '<image path="'.$img['path'].'"/>';
                            }
                        $xml .= '</image-group>';
                    }
                }

                $xml .="</images>";  
            $xml .="</product>";
        }

        // $dom = new \DOMDocument('1.0');
        // $dom->preserveWhiteSpace = true;
        // $dom->formatOutput = true;
        // $dom->loadXML($xml);
        // $xml_pretty = $dom->saveXML();


        return response($xml, 200)->header('Content-Type', 'application/xml');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
