<?php 
 namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;



  class Comptefilter implements FilterInterface 
{

    public function  before(RequestInterface $request, $arguments = null)
    {
    
    }
    public function after(RequestInterface $req, ResponseInterface $res,$arguments = null)
    {
        $res->setStatusCode(404 ,'Due to filters.');   
    }




}
