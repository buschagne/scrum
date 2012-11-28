<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Player', 'scrum');

/**
 * Base_Player
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_player
 * @property string $name
 * @property Doctrine_Collection $Play
 * @property Doctrine_Collection $Shortplay
 * @property Doctrine_Collection $TeamHasPlayer
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Base_Player extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('player');
        $this->hasColumn('id_player', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Play', array(
             'local' => 'id_player',
             'foreign' => 'fk_id_player'));

        $this->hasMany('Shortplay', array(
             'local' => 'id_player',
             'foreign' => 'fk_id_player'));

        $this->hasMany('TeamHasPlayer', array(
             'local' => 'id_player',
             'foreign' => 'fk_id_player'));
    }
}