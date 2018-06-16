<?php

require"vendor/autoload.php";

use \Rain\Tpl;
use \Slim\Slim;
use \CenterSeg\Page;
//use \CenterSeg\Db\Sql;
use \CenterSeg\PageLinks;
//use \CenterSeg\Model\User;
//use \CenterSeg\Model;


$app = new Slim();

$app->config('debug', true);


$app->get('/', function() {

  $page = new Page();

  $page->setTpl("index");

});

$app->get('/home', function(){

  $page = new Page();
  $page->setTpl("index");
});


$app->get('/quemSomos', function(){

  $page = new Page();
  $page->setTpl("quemSomos");
});


$app->get('/servicos', function(){

  $page = new Page();
  $page->setTpl("servicos");
});

$app->get('/produtos', function(){

  $page = new Page();
  $page->setTpl("produtos");
});

$app->get('/parceiros', function(){

  $page = new Page();
  $page->setTpl("parceiros");
});

$app->get('/contato', function(){

  $page = new Page();
  $page->setTpl("contato");
});

//#######################
//   Página Links
//#######################

$app->get('/alarme', function(){

	$page = new PageLinks();

	$page->setTpl("links/alarme");
});

$app->get('/camera', function(){

	$page = new PageLinks();
	$page->setTpl("links/camera");
});


$app->get('/cercaEletrica', function(){

	$page = new PageLinks();
	$page->setTpl("cercaEletrica");
});

$app->get('/monitoramentoEletronico', function(){

	$page = new PageLinks();
	$page->setTpl("monitoramentoEletronico");
});

$app->run();