<?php
namespace App\Models;

use CodeIgniter\Model;

class StandardModel extends Model
{
    protected $returnType = 'array';

    public function set_table_name(string $table_name)
    {
        $this->table = $table_name;
    }

    public function set_primary_key(string $primary_key)
    {
        $this->primaryKey = $primary_key;
    }

    public function get_field($table, $field, $where)
    {
        $this->set_table_name($table);
        $result = $this->select($field)->getWhere($where)->getRowArray();
        return $result[$field] ?? '';
    }
}
