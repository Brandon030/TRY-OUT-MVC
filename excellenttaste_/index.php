<?php
require_once 'controller/Controller.php';

$controller = new Controller();
$controller->handleRequest();


/*

	Select concat(s.gerechtcode, "-", g.gerechtcode "-", s.gerechtcode);

*/