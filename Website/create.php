<?php
if (isset($_REQUEST['ok'])) {
 $xml = new DOMDocument("1.0","UTF-8");
 $xml->load("create.xml");
 
 $rootTag = $xml->getElementsByTagName("document")->item(0);
 
 $dataTag = $xml->createElement("data");
 
 $aTag = $xml->createElement("a",$_REQUEST['a']);
 $bTag = $xml->createElement("b",$_REQUEST['b']);
 
 $dataTag->appendChild($aTag);
 $dataTag->appendChild($bTag);
 
 $rootTag->appendChild($dataTag);
 
 $xml->save("a.xml");
}
?>


<form action="test.php" method="post">
 <input type="text" name="a" />
 <input type="text" name="b" />
 <input type="submit" name="ok">
</form>
