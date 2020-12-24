<?php
/*

      ./app/routeur.php

 */

 
/*
ROUTE PAR DEFAUT 
PATTERN : /
CTRL : PostsControleur
ACTION : SHOWACTION
*/ 

$ctrl = new App\Controleurs\PostsControleur();
$ctrl->indexAction([
      'limit'  => 5,
      'orderByField' => 'created_at',
      'orderBySens' => 'desc'
   ]); 

