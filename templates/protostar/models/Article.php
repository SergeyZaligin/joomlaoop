<?php

namespace protostar\models;

use JFactory;

class Article
{

  public $db;

  public function __construct()
  {
      $this->db = JFactory::getDbo();
  }
  
  public function getAll() 
  {
      $sql = "SELECT * FROM phc6j_content";
      $this->db->setQuery($sql);
      $result = $this->db->loadAssocList();
      return $result;
  }

}
