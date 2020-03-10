<?php
  require_once "Prodotto.php";
  /**
   *
   */
  class Television extends ProdottoTech
  {
    public $schermo;
    public $risoluzione;
    public $pollici;
    public function calcScreen($_pollici)
    {
      if (is_Numeric($_pollici)) {
       $this->schermo = $_pollici * 2;
      }
      else {
        return "Non hai inserito un numero";
      }
    }
  }
  $Televisione = new Television("philips","nino",34);
  var_dump($Televisione);
  $Televisione->calcScreen(20);
  var_dump($Televisione);
 ?>
