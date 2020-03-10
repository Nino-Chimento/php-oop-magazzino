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
      return $this->marca = $_marca;
      return $this->modello = $_modello;
      return $this->prezzo = $_prezzo;
    }
  }

$Telefono = new ProdottoTech("samsung","ni","23");
$Telefono->modello = "random";
$telefono->prezzo = "34";
var_dump($Telefono);
?>
