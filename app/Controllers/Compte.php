<?php
 namespace App\Controllers;
 use CodeIgniter\Controller;
 

class Compte extends Controller
{
	public function index()
	{
		
		return view('compte');
		
	

	}
	public function create ()
	{	helper(['form'],'url');
		$db=\config\Database::connect();
		$builder=$db->table('compte');

		
		$data =[
			  'accountnumber' =>$this->request->getVar('accountnumber'),
			  'solde' =>$this->request->getVar('solde'),
			  'clerib' =>$this->request->getVar('clerib'),
			   ];
			
			  $save = $builder->insert($data);

			return view ('compte');



			







		
			

		}
}




