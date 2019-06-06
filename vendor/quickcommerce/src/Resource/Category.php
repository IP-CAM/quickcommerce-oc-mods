<?php

namespace App\Resource;

use Doctrine\Common\Collections\Criteria;

use App\Resource;
use OcCategory as Entity;

class Category extends Resource
{
    protected static $format = array(
        'category' => array(
            'description' => null,
            'product' => array(
                'description' => null
            )
        )
    );

    protected static $exclude = array('language');

    public function getEntity($id, $serialize = true, $tableize = true, $format = array(), $exclude = array()) {
        return parent::getEntity($id, $serialize, $tableize, self::$format, self::$exclude);
    }

    public function find(Criteria $criteria, $serialize = true, $tableize = true, $format = array(), $exclude = array(), $limit = 10, $offset = 0, $order = array()) {
        return parent::find($criteria, $serialize, $tableize, self::$format, self::$exclude);
    }

    public function getCollection($serialize = true, $tableize = true, $format = array(), $exclude = array(), $limit = 150, $offset = 0, $order = array()) {
        return parent::getCollection($serialize, $tableize, self::$format, self::$exclude, $limit, $offset, $order);
    }
}