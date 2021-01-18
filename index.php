<?php

class StanzaHotel
{
  public $piano;
  public $posti_letto;
  public $numero_bagni;

  public function __construct($piano, $bagni = 0, $letti = 0) //default bagni e posti letto = 0, se non lo specifico non ci sono bagni o posti letto
  {
    $this->piano = $piano;
    $this->posti_letto = $letti;
    $this->numero_bagni = $bagni;
  }


  public function to_string()
  {
    echo ("Piano: " . $this->piano . "; Numero letti: " . $this->posti_letto . "; Numero bagni: " . $this->numero_bagni . "; <br>");
  }
}

$stanza1 = new StanzaHotel('1');
$stanza2 = new StanzaHotel('2', 3, 8);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>php-oop-1</title>
</head>

<body>

  <?php

  $stanza1->to_string();
  $stanza2->to_string();

  ?>

</body>

</html>