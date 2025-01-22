<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {

    }

    public function index(){
        return Product::all();
    }

    public function getById($id){
        $product = Product::findOrFail($id);
        return $product;
    }

    public function store(array $data){
        return Product::create($data);
    }

    public function update(array $data, $id){
        return Product::whereIn($id)->update($data);
    }

    public function delete($id){
        Product::destory($id);
    }
}
