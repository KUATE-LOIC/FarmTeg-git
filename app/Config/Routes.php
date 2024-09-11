<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('login', 'Home::index1');
$routes->get('/', 'Home::index1');


// routes types
$routes->get('create_form_type', 'TypeController::createFormType');
$routes->post('insert_type', 'TypeController::createType');
$routes->get('list_type', 'TypeController::typeList');
$routes->get('update_form_type/(:num)', 'TypeController::updateFormType/$1');
$routes->get('edit_type', 'TypeController::updateType');
$routes->get('delete_type/(:num)', 'TypeController::deleteType/$1');

//routes Elevage
$routes->get('create_form_elevage', 'ElevageController::createFormElevage');
$routes->post('insert_elevage', 'ElevageController::createElevage');
$routes->get('list_elevage', 'ElevageController::elevageList');
$routes->get('update_form_elevage/(:num)', 'ElevageController::updateFormElevage/$1');
$routes->get('edit_elevage', 'ElevageController::updateElevage');
$routes->get('delete_elevage/(:num)', 'ElevageController::deleteElevage/$1');

//routes personnels
$routes->get('create_form_personnel', 'PersonnelController::createFormPersonnel');
$routes->get('dashboard', 'PersonnelController::dashboard');
$routes->post('insert_personnel', 'PersonnelController::createPersonnel');
$routes->get('list_personnel', 'PersonnelController::personnelList');
$routes->get('update_form_personnel/(:num)', 'PersonnelController::updateFormPersonnel/$1');
$routes->get('edit_personnel', 'PersonnelController::updatePersonnel');
$routes->get('delete_personnel/(:num)', 'PersonnelController::deletePersonnel/$1');
$routes->post('authentif', 'PersonnelController::authentification');


//routes ressources
$routes->post('create_form_ressource', 'RessourceController::createFormRessource');
$routes->get('create_form_ressource1', 'RessourceController::createFormRessource1');
$routes->get('create_form_ressource2', 'RessourceController::createFormRessource2');
$routes->get('create_form_move', 'RessourceController::createFormMove');
$routes->get('create_form_remove', 'RessourceController::createFormRemove');
$routes->get('show_form_ressource', 'RessourceController::showFormRessource');
$routes->post('insert_ressource', 'RessourceController::createRessource');
$routes->get('list_ressource', 'RessourceController::ressourceList');
$routes->get('update_form_ressource/(:num)', 'RessourceController::updateFormRessource/$1');
$routes->get('edit_ressource', 'RessourceController::updateRessource');
$routes->get('delete_ressource/(:num)', 'RessourceController::deleteRessource/$1');

//routes mouvements
$routes->get('dashboard2', 'MouvementController::dashboardMarket');
$routes->get('report1', 'MouvementController::reportBoard');
$routes->get('create_form_mouvement', 'MouvementController::createFormMouvement');
$routes->post('insert_mouvement', 'MouvementController::createMouvement');
$routes->get('list_mouvement', 'MouvementController::mouvementList');
$routes->get('update_form_mouvement/(:num)', 'MouvementController::updateFormMouvement/$1');
$routes->get('edit_mouvement', 'MouvementController::updateMouvement');
$routes->get('delete_mouvement/(:num)', 'MouvementController::deleteMouvement/$1');
$routes->post('choose_report', 'MouvementController::createReport');

// routes gestions
$routes->post('choose_reports', 'GestionController::createReports');
$routes->get('reportsPdf', 'GestionController::generatePdf');

//routes produits
$routes->get('create_form_produit', 'ProduitController::createFormProduit');
$routes->get('create_form_sell', 'ProduitController::createFormSell');
$routes->get('show_form_sale', 'ProduitController::showFormsale');
$routes->post('insert_produit', 'ProduitController::createProduit');
$routes->post('insert_dead', 'ProduitController::createDead');
$routes->get('list_dead', 'ProduitController::DeadList');
$routes->get('list_produit', 'ProduitController::SaleList');
$routes->get('list_produit2', 'ProduitController::ProduitList');
$routes->get('update_form_produit/(:num)', 'ProduitController::updateFormProduit/$1');
$routes->get('edit_produit', 'ProduitController::updateProduit');
$routes->get('delete_produit/(:num)', 'ProduitController::deleteProduit/$1');




