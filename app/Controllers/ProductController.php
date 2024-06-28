<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();

        echo view('products/shop', $data);
    }

    public function create()
    {
        echo view('products/create');
    }

    public function store()
    {
        $model = new ProductModel();

        // Handle file upload
        $img = $this->request->getFile('image');
        if ($img->isValid() && !$img->hasMoved()) {
            $imgName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads', $imgName);
        } else {
            $imgName = null;
        }

        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price'),
            'image'       => $imgName,
        ];

        $model->save($data);

        return redirect()->to('/products');
    }


    public function edit($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);

        echo view('products/edit', $data);
    }

    public function update($id)
    {
        $model = new ProductModel();

        // Handle file upload
        $img = $this->request->getFile('image');
        if ($img->isValid() && !$img->hasMoved()) {
            $imgName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads', $imgName);
        } else {
            $imgName = $this->request->getPost('old_image');
        }

        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price'),
            'image'       => $imgName,
        ];

        $model->update($id, $data);

        return redirect()->to('/products');
    }


    public function delete($id)
    {
        $model = new ProductModel();
        $model->delete($id);

        return redirect()->to('/products');
    }
}