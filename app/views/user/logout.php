<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/index.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/views/common/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/controllers/UserController.php";
$usermodel = new UserModel();
$user = new Authentication($usermodel);
$user->logout();

