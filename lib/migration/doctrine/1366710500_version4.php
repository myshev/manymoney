<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version4 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('news', 'is_active', 'boolean', '25', array(
             'notnull' => '1',
             'default' => '1',
             'comment' => 'Элемент активен',
             ));
    }

    public function down()
    {
        $this->removeColumn('news', 'is_active');
    }
}