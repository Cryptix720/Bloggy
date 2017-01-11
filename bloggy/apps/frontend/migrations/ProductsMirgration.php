<?php

use Phalcon\Db\Column as Column;
use Phalcon\Db\Index as Index;
use Phalcon\Db\Reference as Reference;


use Phalcon\Mvc\Model\Migration;

class ProductsMigration extends Migration
{
	
	//RollsBack your functions !
	
	public function down(){
	
	$this->morphTable(
	

	            "products",
            [
                "columns" => [
                    new Column(
                        "id",
                        [
                            "type"          => Column::TYPE_INTEGER,
                            "size"          => 10,
                            "unsigned"      => true,
                            "notNull"       => true,
                            "autoIncrement" => true,
                            "first"         => true,
                        ]
                    ),
	
	)
		
		
	}
	
	
    public function up()
    {
        $this->morphTable(
            "products",
            [
                "columns" => [
                    new Column(
                        "id",
                        [
                            "type"          => Column::TYPE_INTEGER,
                            "size"          => 10,
                            "unsigned"      => true,
                            "notNull"       => true,
                            "autoIncrement" => true,
                            "first"         => true,
                        ]
                    ),
                    new Column(
                        "product_types_id",
                        [
                            "type"     => Column::TYPE_INTEGER,
                            "size"     => 10,
                            "unsigned" => true,
                            "notNull"  => true,
                            "after"    => "id",
                        ]
                    ),
				 new Column(
                        "JSON",
                        [
                            "type"     => Column::TYPE_JSON,
                            "size"     => 100,
                            "unsigned" => true,
                            "notNull"  => true,
                            "after"    => "id",
							// With this attribute column will filled automatically with an auto-increment integer. 
							//Only one column in the table can have this attribute.
							"autoIncrement"  => true,
                        ]
                    ),
                    new Column(
                        "name",
                        [
                            "type"    => Column::TYPE_VARCHAR,
                            "size"    => 70,
                            "notNull" => true,
                            "after"   => "product_types_id",
                        ]
                    ),
                    new Column(
                        "price",
                        [
                            "type"    => Column::TYPE_DECIMAL,
                            "size"    => 16,
                            "scale"   => 2,
                            "notNull" => true,
                            "after"   => "name",
                        ]
                    ),
                ],
                "indexes" => [
                    new Index(
                        "PRIMARY",
                        [
                            "id",
                        ]
                    ),
                    new Index(
                        "product_types_id",
                        [
                            "product_types_id",
                        ],
                    ),
                ],
                "references" => [
                    new Reference(
                        "products_ibfk_1",
                        [
                            "referencedSchema"  => "invo",
                            "referencedTable"   => "product_types",
                            "columns"           => ["product_types_id"],
                            "referencedColumns" => ["id"],
                        ]
                    ),
                ],
                "options" => [
                    "TABLE_TYPE"      => "BASE TABLE",
                    "ENGINE"          => "InnoDB",
                    "TABLE_COLLATION" => "utf8_general_ci",
                ],
            ]
        );
    }
}