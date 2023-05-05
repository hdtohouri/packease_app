<?php namespace App\Models\Common;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        'name', 'price',
        'image', 'description',
        'created_at', 'status'
        ];

    public function getProductById($id)
    {
        return $this->find($id);
    }
        
        public function insert_in_db($data)
    {
        $builder = $this->builder();
        $builder = $this->db->table('products');
        $builder->insert($data);
        if($this->db->affectedRows()==1)
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function get_product_list()
    {
        $builder = $this->builder();
        $builder = $this ->db->table('products');
        $builder->select('image,description,price,statut');
        $builder->orderBy('created_at', 'asc');
        return $this->findAll();
    }

}