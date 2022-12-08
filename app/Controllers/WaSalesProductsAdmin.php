<?php 
namespace App\Controllers;

use \App\Models\WaSalesProductsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class WaSalesProductsAdmin extends BaseController
{
	public function index()
	{
        $wa_sales_products = new WaSalesProductsModel();
        $data['wa_sales_products'] = $wa_sales_products->findAll();
		echo view('admin/wa-sales-products/admin_list_wa_sales_product', $data);
    }

    //--------------------------------------------------------------------------
    
    public function preview($id)
	{
		$wa_sales_products = new WaSalesProductsModel();
		$data['wa_sales_products'] = $wa_sales_products->where('id', $id)->first();
		
		if(!$data['wa_sales_products']){
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('wa_sales_products_detail', $data);
    }

    //--------------------------------------------------------------------------
    
    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'country' => 'required',
            'order_method_type' => 'required',
            'retailer_type' => 'required',
            'product_line' => 'required',
            'item_type' => 'required',
            'product' => 'required',
            'year' => 'required',
            'quarter' => 'required',
            'total_revenue' => 'required',
            'unit_sold' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $wa_sales_products = new WaSalesProductsModel();
            $wa_sales_products->insert([
                "country" => $this->request->getPost('country'),
                "order_method_type" => $this->request->getPost('order_method_type'),
                "retailer_type" => $this->request->getPost('retailer_type'),
                "product_line" => $this->request->getPost('product_line'),
                "item_type" => $this->request->getPost('item_type'),
                "product" => $this->request->getPost('product'),
                "year" => $this->request->getPost('year'),
                "quarter" => $this->request->getPost('quarter'),
                "total_revenue" => $this->request->getPost('total_revenue'),
                "unit_sold" => $this->request->getPost('unit_sold'),
            ]);
            return redirect('admin/wa-sales-products');
        }
		
        // tampilkan form create
        echo view('admin/wa-sales-products/admin_create_wa_sales_products');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $wa_sales_products = new WaSalesProductsModel();
        $data['wa_sales_products'] = $wa_sales_products->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'country' => 'required',
            'order_method_type' => 'required',
            'retailer_type' => 'required',
            'product_line' => 'required',
            'item_type' => 'required',
            'product' => 'required',
            'year' => 'required',
            'quarter' => 'required',
            'total_revenue' => 'required',
            'unit_sold' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $wa_sales_products->update($id, [
                "country" => $this->request->getPost('country'),
                "order_method_type" => $this->request->getPost('order_method_type'),
                "retailer_type" => $this->request->getPost('retailer_type'),
                "product_line" => $this->request->getPost('product_line'),
                "item_type" => $this->request->getPost('item_type'),
                "product" => $this->request->getPost('product'),
                "year" => $this->request->getPost('year'),
                "quarter" => $this->request->getPost('quarter'),
                "total_revenue" => $this->request->getPost('total_revenue'),
                "unit_sold" => $this->request->getPost('unit_sold'),
            ]);
            return redirect('admin/wa-sales-products');
        }

        // tampilkan form edit
        echo view('admin/wa-sales-products/admin_edit_wa_sales_products', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $wa_sales_products = new WaSalesProductsModel();
        $wa_sales_products->delete($id);
        return redirect('admin/wa-sales-products');
    }
}