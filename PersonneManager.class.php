<?php
/**
 *
 */
class PersonneManager{

  private $_db;

  public function __construct($db)
  {
    $this->getDb($db);
  }
  public function getDb($db)
  {
    $this->_db = $db;
  }
  public function add(Personne $perso)
  {
    $q = $this->_db->prepare('INSERT INTO personne(nom, force, degat, niveau, experience) VALUES(?,?,?,?,?)');
    $q->execute(array($perso->nom(),
                      $perso->force(),
                      $perso->degat(),
                      $perso->niveau(),
                      $perso->experience()
    ));
    echo "ajout reussit !";
  }

}
?>
