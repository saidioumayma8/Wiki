<?php
include_once './app/models/connection.php';
include './app/controllers/userController.php';
include './app/controllers/categoryController.php';
include './app/controllers/wikiController.php';
include './app/controllers/tagController.php';
include './app/models/utilisateurDAO.php';
include './app/models/tagDAO.php';
include './app/models/categoryDAO.php';
include './app/models/wikiDAO.php'; 

$controllerFunctions = new UserController();
$tagController = new tagController();
$categoryController = new categoryController();
$wikiController = new wikiController();


if (isset($_GET['action'])){
    $action = $_GET['action'];
    switch($action){
        case 'rege':
            $controllerFunctions->regester_form();
        break;
        case 'regester':
                $controllerFunctions->addUser();
            break;
        case 'login':
            $controllerFunctions->login_form();
        break;
        case 'admin':
            $controllerFunctions->login();
        break;
        case 'tagManagment':
            $tagController->desplayAllTags();
        break;
        case 'insertTag':
            $tagController->AddTag();
        break;
        case 'gettagToUpdate':
            $tagController->getTagDataById();
        break;
        case 'updateTag':
            $tagController->updateTag();
        break;
        case 'categoryManagment':
            $categoryController->desplayAllCategorys();
        break;
        case 'insertCategory':
            $categoryController->addCategory();
        break;
        case 'getCategoryToUpdate':
            $categoryController->getCatygorysIdController();
        break;
        case 'updateCategory':
            $categoryController->updateCategoryById();
        break;
        case 'hideWiki':
            $wikiController->HideWiki();
        break;
        case 'wikisManagment':
            $wikiController->desplayAllwikis();
        break;

    }

}else {
        include 'views/homepage.php';    
}


