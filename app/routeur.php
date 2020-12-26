<?php
/*

      ./app/routeur.php

 */

 
/* ROUTE AJAX  ------------------------------------------------------------------------------------------------- */ 
/*
ROUTE DES MORE_POSTS 
PATTERN : /?more-posts
CTRL : PostsControleur
ACTION : INDEXACTION
*/ if(isset($_GET['ajax']) and $_GET['ajax']==='more-posts'):
      $ctrl = new App\Controleurs\PostsControleur();
      $ctrl->indexAction([
         'view' => 'liste',
         'orderByField' => 'created_at',
         'orderBySens' => 'desc',
         'limit' => 5,
         'offset' => $_GET['offset']
      ]);



/* ROUTE STANDARDS  -------------------------------------------------------------------------------------------- */ 
/*
ROUTE PAR DEFAUT 
PATTERN : /posts
CTRL : PostsControleur
ACTION : INDEXACTION
*/ 
else:
$ctrl = new App\Controleurs\PostsControleur();
$ctrl->indexAction([
      'limit'  => 5,
      'orderByField' => 'created_at',
      'orderBySens' => 'desc'
   ]); 

endif;