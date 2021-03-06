<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('News', 'doctrine');

/**
 * BaseNews
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $announce
 * @property clob $description
 * @property string $image
 * @property boolean $is_active
 * 
 * @method string  getName()        Returns the current record's "name" value
 * @method string  getAnnounce()    Returns the current record's "announce" value
 * @method clob    getDescription() Returns the current record's "description" value
 * @method string  getImage()       Returns the current record's "image" value
 * @method boolean getIsActive()    Returns the current record's "is_active" value
 * @method News    setName()        Sets the current record's "name" value
 * @method News    setAnnounce()    Sets the current record's "announce" value
 * @method News    setDescription() Sets the current record's "description" value
 * @method News    setImage()       Sets the current record's "image" value
 * @method News    setIsActive()    Sets the current record's "is_active" value
 * 
 * @package    manymoney
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNews extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('news');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'comment' => 'Заголовок новости',
             'length' => 255,
             ));
        $this->hasColumn('announce', 'string', 1000, array(
             'type' => 'string',
             'notnull' => true,
             'comment' => 'Анонс',
             'length' => 1000,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             'comment' => 'Описание',
             ));
        $this->hasColumn('image', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'comment' => 'Изображение',
             'length' => 255,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => true,
             'comment' => 'Элемент активен',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $sortable0 = new Doctrine_Template_Sortable();
        $this->actAs($timestampable0);
        $this->actAs($sortable0);
    }
}