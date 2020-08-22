<?php

class m200822_061441_create_popups_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('popups', array(
            'id'          => 'pk',
            'name'        => 'string',
            'description' => 'text',
            'count_show'  => 'integer',
            'status'      => 'boolean',

        ));

    }

    public function down()
    {
        $this->dropTable('popups');

		return true;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}