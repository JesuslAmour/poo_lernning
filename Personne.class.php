<?php
/**
 *
 */
class Personne{
  private $_nom,
          $_force,
          $_degat,
          $_niveau,
          $_experience;
  public function __construct($perso)
  {
    $this->hydrate($perso);
  }
##################################################
  public function nom()
  {
    return $this->_nom;
  }
  public function force()
  {
    return $this->_force;
  }
  public function degat()
  {
    return $this->_degat;
  }
  public function niveau()
  {
    return $this->_niveau;
  }
  public function experience()
  {
    return $this->_experience;
  }
#########################################################
  public function setNom($nom)
  {
    $this->_nom = $nom;
  }
  public function setForce($force)
  {
    $this->_force = $force;
  }
  public function setDegat($degat)
  {
    $this->_degat = $degat;
  }
  public function setNiveau($niveau)
  {
    $this->_niveau = $niveau;
  }
  public function setExperience($experience)
  {
    $this->_experience = $experience;
  }

##################################################################
  public function hydrate($data)
  {
    foreach ($data as $key => $value) {
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

}
?>
