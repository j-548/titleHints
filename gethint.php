
<?php
// Array with names
$a = array("fireheart", "boss baby", "sonic the hedgehog", "horton hears a who!", "grown ups", "you again", "hustlers", "kid 90", "dirty grandpa", "the other guys");

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);//make all characters lowercase
  $len=strlen($q);//get string length
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {//case sensitive, Find the first occurrence of a string
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
