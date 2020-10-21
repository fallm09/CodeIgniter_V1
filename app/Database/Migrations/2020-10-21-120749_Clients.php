<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clients extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'=>[
				'type' =>'INT',
				'auto_increment'=> true  

			],
			
			'nom'=> [
				'type'=>'varchar',
				'constraint' => 50
			],
			'prenom'=>[
				'type' => 'varchar',
				'constraint' => 50
			],
			'adresse' => [
				'type'=> 'varchar',
				'constraint'=>50
			],
			'telephone'=> [
				'type'=>'varchar',
				'constraint' => 50
			],
			'create_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			
			]);
			$this->forge->addPrimaryKey('id');
			$this->forge->createTable('Clients');
			

	  
	}
	

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('Clients');
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		//
	}
}
