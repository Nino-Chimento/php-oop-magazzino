<?php
  /**
   *
   */
  trait scontistica
  {
    public $sconto;
    public $prezzoScontato;
    function calcPrezzoScontato($_sconto,$_prezzo)
    {
      return $this->$prezzoScontato = ($_prezzo *$_sconto)/100;
    }
  }

 ?>
