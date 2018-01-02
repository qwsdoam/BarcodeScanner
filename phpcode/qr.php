<?php
  @header('Content-Type:image/png');
  require_once('vendor/autoload.php');
  
  $qr = new Endroid\QrCode\QrCode();
  $qr->setText($_GET['text']);
  $qr->setSize(500);
  $qr->setPadding(10);
  $qr->render();