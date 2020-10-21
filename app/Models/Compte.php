<?php  
namespace App\Models;

use CodeIgniter\Model;

class Compte extends Model
{
      protected $table = 'compte';
     
      protected $allowedFields = ['accountnumber','solde', 'clerib'];
  


    function __construct()
    {
        parent ::__construct();
        
    }
}























?>