<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;

class FileXMLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('uploadFile', ['name' => $_SERVER['REMOTE_ADDR']]);
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
        header("Content-type: text/xml");

        if (!$request->hasFile('fileXML')) {
            return json_encode('bad document');
        }

        $file = $request->file('fileXML');

        $extension = $request->file('fileXML')->extension();

        $file->move('uploads', 'file.'.$extension);

        $fileOpen = fopen('uploads/file.'.$extension, 'r');



        if ($extension === 'xlsx') {
            $collection = (new FastExcel)->import('uploads/file.'.$extension);
        }
        else{
            $collection = (new FastExcel)->configureCsv(',', '#', 'gbk')->import('uploads/file.'.$extension);
        }


        $products = array();
        $planeProducts = array();
        $count = 0;


        foreach ($collection as $s => $value) {
            array_push($planeProducts, $value);
        }


        foreach ($planeProducts as $key => $product) {
            $flagExist = false;
            $flagExit = in_array($product['product-id'], array_column($products, 'product-id'));
            if ($flagExit === false){
                $itemProduct = array('product-id' => $product['product-id'], 'images' => array());
                $viewTypeArray = array();
                $paths = array();
                foreach ($planeProducts as $w => $product2) {
                    $path = array ('path' => $product2['path']);
                    if ($product2['product-id'] === $product['product-id']) {
                        $existViewType = in_array($product2['view-type'], array_column($viewTypeArray, 'view-type'));
                        if ($existViewType === false) {
                            $paths = array();
                            foreach ($planeProducts as $s => $product3) {
                                if ($product2['product-id'] === $product3['product-id'] && $product2['view-type'] === $product3['view-type']) {
                                    array_push($paths, $product3['path']);
                                }
                            }
                            $viewType = array   (   'view-type' => $product2['view-type'],
                                                    'paths' => $paths
                                                );
                            array_push($viewTypeArray, $viewType);
                        }
                    }
                }
                array_push($itemProduct['images'], $viewTypeArray);
                array_push($products, $itemProduct);
            }
        }

        $productName = '${productname}';
        $title_size = 1;

        $xml = "<?xml version='1.0' encoding='utf-8'?><catalog xmlns='http://www.demandware.com/xml/impex/catalog/2006-10-31' catalog-id='storefront-catalog-m-en'><header><image-settings><internal-location base-path='/' /><view-types><view-type>large</view-type><view-type>medium</view-type><view-type>small</view-type><view-type>swatch</view-type></view-types><alt-pattern>".$productName."</alt-pattern><title-pattern>".$productName."</title-pattern></image-settings></header>";

        foreach ($products as $r => $product) {
            $xml .="<product product-id='".$product['product-id']."'>";
                $xml .="<images>";
                foreach ($product['images'][0] as $key => $images) {

                    $xml .= "<image-group view-type='".$images['view-type']."'>";
                    foreach ($images['paths'] as $s => $path) {
                        $xml .= "<image path='".$path."'/>";
                    }
                    $xml .= "</image-group>";
                }
                $xml .="</images>";
            $xml .="</product>";
        }
        $xml .= "</catalog>";


        $dom = new \DOMDocument('1.0');
        $dom->preserveWhiteSpace = true;
        $dom->formatOutput = true;
        $dom->loadXML($xml);
        $xml_pretty = $dom->saveXML();

        $fileXML = file_put_contents("uploads/file.xml", $xml_pretty);
        $fileResponse= public_path(). "/uploads/file.xml";

        return response()->download($fileResponse);

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


    public function oldFile(Request $request){
        header("Content-type: text/xml");

        if (!$request->hasFile('fileXML')) {
            return json_encode('bad document');
        }

        $file = $request->file('fileXML');

        $extension = $request->file('fileXML')->extension();

        $file->move('uploads', 'file.'.$extension);

        $fileOpen = fopen('uploads/file.'.$extension, 'r');



        if ($extension === 'xlsx') {
            $collection = (new FastExcel)->import('uploads/file.'.$extension);
        }
        else{
            $collection = (new FastExcel)->configureCsv(',', '#', 'gbk')->import('uploads/file.'.$extension);
        }


        $products = array();
        $planeProducts = array();
        $count = 0;


        foreach ($collection as $s => $value) {
            array_push($planeProducts, $value);
        }


        foreach ($planeProducts as $key => $product) {
            $flagExist = false;
            $flagExit = in_array($product['product-id'], array_column($products, 'product-id'));
            if ($flagExit === false){
                $itemProduct = array('product-id' => $product['product-id'], 'images' => array());
                $viewTypeArray = array();
                $paths = array();
                foreach ($planeProducts as $w => $product2) {
                    $path = array ('path' => $product2['path']);
                    if ($product2['product-id'] === $product['product-id']) {
                        $existViewType = in_array($product2['view-type'], array_column($viewTypeArray, 'view-type'));
                        if ($existViewType === false) {
                            $paths = array();
                            foreach ($planeProducts as $s => $product3) {
                                if ($product2['product-id'] === $product3['product-id'] && $product2['view-type'] === $product3['view-type']) {
                                    array_push($paths, $product3['path']);
                                }
                            }
                            $viewType = array   (   'view-type' => $product2['view-type'],
                                                    'paths' => $paths
                                                );
                            array_push($viewTypeArray, $viewType);
                        }
                    }
                }
                array_push($itemProduct['images'], $viewTypeArray);
                array_push($products, $itemProduct);
            }
        }

        $productName = '${productname}';
        $title_size = 1;

        $xml = "<?xml version='1.0' encoding='utf-8'?><catalog xmlns='http://www.demandware.com/xml/impex/catalog/2006-10-31' catalog-id='storefront-catalog-m-en'><header><image-settings><internal-location base-path='/' /><view-types><view-type>large</view-type><view-type>medium</view-type><view-type>small</view-type><view-type>swatch</view-type></view-types><alt-pattern>".$productName."</alt-pattern><title-pattern>".$productName."</title-pattern></image-settings></header>";

        foreach ($products as $r => $product) {
            $xml .="<product product-id='".$product['product-id']."'>";
                $xml .="<images>";
                foreach ($product['images'][0] as $key => $images) {

                    $xml .= "<image-group view-type='".$images['view-type']."'>";
                    foreach ($images['paths'] as $s => $path) {
                        $xml .= "<image path='".$path."'/>";
                    }
                    $xml .= "</image-group>";
                }
                $xml .="</images>";
            $xml .="</product>";
        }
        $xml .= "</catalog>";


        $dom = new \DOMDocument('1.0');
        $dom->preserveWhiteSpace = true;
        $dom->formatOutput = true;
        $dom->loadXML($xml);
        $xml_pretty = $dom->saveXML();

        $fileXML = file_put_contents("uploads/file.xml", $xml_pretty);
        $fileResponse= public_path(). "/uploads/file.xml";

        return response()->download($fileResponse);
    }
}
