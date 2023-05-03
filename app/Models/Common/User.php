<?php namespace App\Models\Common;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class User extends Model
{
    protected $table      = 'utilisateurs_internes';
    protected $primaryKey = 'id_usr';
    protected $returnType = 'array';
    protected $allowedFields = ['usr_secret','pwd_modification_flag'];

   
    public function insert_in_db($data)
    {
        $builder = $this->builder();
        $builder = $this->db->table('utilisateurs_internes');
        $builder->insert($data);
        if($this->db->affectedRows()==1)
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function get_permissions($user_name,$password)
    {
        $builder = $this->builder();
        $builder = $this->db->table('utilisateurs_internes');
        $builder->select('usr_secret, full_name');
        $builder->where('usr_name', $user_name);
        $result = $builder->get();
        $row = $result->getRowArray();
        if(count($result->getResultArray())== 1)
        {
            return  $row['usr_secret']; 
        }
        else
        {
            return false;
        }
    }

    public function admin_permissions($user_name,$password)
    {
        $builder = $this->builder();
        $builder = $this->db->table('admin');
        $builder->select('adm_secret, adm_fullname');
        $builder->where('adm_name', $user_name);
        $result = $builder->get();
        $row = $result->getRowArray();
        if(count($result->getResultArray())== 1)
        {
            return  $row['adm_secret']; 
        }
        else
        {
            return false;
        }
    }

    public function verifyEmail($email){
        $builder = $this->db->table('utilisateurs_internes');
        $builder->select('id_usr,usr_name');
        $builder->where('email_address', $email);
        $result = $builder->get();
        $row = $result->getRowArray();
        if(count($result->getResultArray())== 1)
        {
            return $row['id_usr']; 
        }
        else
        {
            return false;
        }
    }

    public function updatetoken($token,$id,$code){
        $builder = $this ->db->table('utilisateurs_internes');
        $builder->where('id_usr', $id);
        $now = new Time('now');
        $formattedDate = $now->format('Y-m-d H:i:s');
        $builder->update(['token'=> $token]);
        $builder->update(['code'=> $code]);
        $builder->update(['updated_at'=> $formattedDate ]);
        if($this->db->affectedRows()==1)
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function verifyToken($token){
        $builder = $this->db->table('utilisateurs_internes');
        $builder->select('id_usr, usr_name, updated_at');
        $builder->where('token', $token);
        $result = $builder -> get();
        $row = $result->getRowArray();
        if(count($result->getResultArray())== 1)
        {
            return $row['updated_at']; 
        }
        else
        {
            return false;
        }
    }

    public function checkExpireDate($time){
        $update_time = strtotime($time);
        $current_time = time();
        $time_diff = (($current_time - $update_time) / 60);
        if ($time_diff < 10){
            return true;
        }
        else{
            return false;
        }
    }

   public function get_list()
   {
       $builder = $this->builder();
       $builder->select('id_usr,usr_name,full_name,subscription_date,email_address');
       $builder = $this ->db->table('utilisateurs_internes');
       $builder->orderBy('subscription_date', 'DESC');
       return $this->findAll();
   }
   


}
