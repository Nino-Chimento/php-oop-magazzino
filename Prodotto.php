<?php
  /**
   * classe prodotto generico
   */
  /**
   *
   */
  class ProdottoTech
  {

    public $marca;
    public $modello;
    public $prezzo;
    function __construct($_marca,$_modello,$_prezzo)
    {
       $this->marca = $_marca;
       $this->modello = $_modello;
       $this->prezzo = $_prezzo;
    }
    public function setPrice($_price)
    {
      if (is_Numeric($_price)) {
         $this->prezzo = $_price;
      }
    }
  }

$Telefono = new ProdottoTech("samsung","ni","23");
var_dump($Telefono);
$Telefono->setPrice(20);
var_dump($Telefono);
?>
