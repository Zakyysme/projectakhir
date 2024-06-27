<?php

namespace App\Controllers;

use App\Models\ProductTable;
use CodeIgniter\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $productTable = new ProductTable();
        $data['posts'] = $productTable->findAll();

        return view('posts/index', $data);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        $rules = [
            'title' => 'required',
            'body' => 'required',
            'image' => 'uploaded[image]|is_image[image]',
        ];

        if ($this->validate($rules)) {
            $image = $this->request->getFile('image');

            // Generate a random name
            $newName = $image->getRandomName();
            $image->move('./uploads', $newName);

            $productData = [
                'title' => $this->request->getVar('title'),
                'body' => $this->request->getVar('body'),
                'image' => $newName,
            ];

            $productTable = new ProductTable();
            $productTable->insert($productData);

            return redirect()->to('/posts');
        } else {
            $data['validation'] = $this->validator;
            return view('posts/create', $data);
        }
    }

    public function edit($id)
    {
        $productTable = new ProductTable();
        $data['post'] = $productTable->find($id);

        return view('posts/edit', $data);
    }


    public function update($id)
    {
        $rules = [
            'title' => 'required',
            'body' => 'required',
        ];

        // Validasi input
        if ($this->validate($rules)) {
            // Validasi sukses, lanjutkan dengan pembaruan data
            $productTable = new ProductTable(); // Inisialisasi model produk

            // Ambil data produk berdasarkan ID
            $productTable = $productTable->find($id);

            if (!$productTable) {
                return redirect()->to('/products'); // Redirect jika produk tidak ditemukan
            }

            // Update data produk
            $productData = [
                'title' => $this->request->getVar('title'),
                'body' => $this->request->getVar('body'),
            ];

            // Proses pengunggahan gambar baru jika ada
            if ($image = $this->request->getFile('image')) {
                // Hapus gambar lama jika ada
                if ($productTable['image'] && file_exists('./uploads/' . $productTable['image'])) {
                    unlink('./uploads/' . $productTable['image']);
                }

                // Generate a new name for the image file
                $newName = $image->getRandomName();

                // Move the uploaded file to the uploads directory
                $image->move('./uploads', $newName);

                // Update product data with the new image name
                $productData['image'] = $newName;
            }

            // Lakukan pembaruan data produk di database
            $productTable->update($id, $productData);

            // Redirect ke halaman produk setelah berhasil memperbarui
            return redirect()->to('/products');
        } 
        else {
            // Validasi gagal, kembalikan ke halaman edit dengan pesan validasi
            $data['validation'] = $this->validator;
            // $data['post'] = $productTable->find($id); // Ambil data produk untuk ditampilkan kembali
            return view('posts/edit', $data);
        }
    }



    public function delete($id)
    {
        $productTable = new ProductTable();
        $productTable->delete($id);

        return redirect()->to('/posts');
    }
}