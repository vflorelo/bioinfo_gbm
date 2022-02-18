<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="js/jquery-3.6.0.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap-icons.css  " type="text/css" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <title>.:Ejemplo de formatos de secuencias:.</title>
</head>
<body>
<?php
$format = $_GET['format'];
switch ($format){
  case "raw"   : $format_str = "raw"     ; $file_str = "KP255413.$format" ; $data_str = "secuencia"  ; $card_class = "card-header bg-danger  text-white text-center" ;  break ;
  case "fasta" : $format_str = "FastA"   ; $file_str = "KP255413.$format" ; $data_str = "secuencia"  ; $card_class = "card-header bg-warning text-white text-center" ;  break ;
  case "gbk"   : $format_str = "GenBank" ; $file_str = "KP255413.$format" ; $data_str = "secuencia"  ; $card_class = "card-header bg-info    text-white text-center" ;  break ;
  case "embl"  : $format_str = "EMBL"    ; $file_str = "KP255413.$format" ; $data_str = "secuencia"  ; $card_class = "card-header bg-primary text-white text-center" ;  break ;
  case "pdb"   : $format_str = "PDB"     ; $file_str = "3eu7.$format"     ; $data_str = "estructura" ; $card_class = "card-header bg-success text-white text-center" ;  break ;
  case "gff"   : $format_str = "GFF"     ; $file_str = "KP255413.$format" ; $data_str = "tabla"      ; $card_class = "card-header bg-secondary text-white text-center" ;  break ;
  }
$cont_str = file_get_contents($file_str);
$cont_str = htmlentities($cont_str);
echo "<div class=\"card\">\n".
     "  <div class=\"$card_class\">\n".
     "    <p class=\"fs-4\" >La siguiente $data_str está en formato $format_str</p>".
     "  </div>\n".
     "  <div class=\"card-body\">\n".
     "    <pre class=\"sequence\">$cont_str</pre>".
     "  </div>\n".
     "</div>";
?>
</body>
</html>
