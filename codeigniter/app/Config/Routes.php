<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->match(['get', 'post'], '/login', 'AdminController::login'); // GET: Mostra pagina di login - POST: valida ed eventualmente reindirezza a /pagina_admin
$routes->match(['get', 'post'], '/pagina_admin', 'AdminController::pagina_admin'); // GET: mostra la dashboard responsabile/amministratore in lettura
																				// POST: mostra la dashboard amministratore in modifica
$routes->post('/pagina_admin/modifica', 'AdminController::Modifica'); // modifica un responsabile o una tipologia di segnalazione
$routes->post('/pagina_admin/aggiungi', 'AdminController::Aggiungi'); // aggiunge un servizio o un responsabile o una tipologia di segnalazione
$routes->post('/pagina_admin/elimina', 'AdminController::Elimina'); // elimina un servizio o un responsabile o una tipologia di segnalazione

$routes->get('/logout', 'AdminController::logout'); // cancella la sessione di login e porta alla home page

$routes->match(['get', 'post'],'/servizio/(:num)', 'ServizioController::Mostra/$1'); // GET: mostra i dettagli di un servizio (per responsabile o amministratore)
																					// POST: permette di modificare un servizio
$routes->post('/servizio_modifica/(:num)', 'ServizioController::Modifica/$1'); // modifica un servizio


$routes->match(['get', 'post'], '/invia_segnalazione/(:num)', 'SegnalazioneController::invia/$1'); // GET: mostra form per segnalazione - POST: registra la segnalazione nel database e mostra la pagina di successo
$routes->get('/dettagli_segnalazione/(:num)','SegnalazioneController::dettagli/$1'); // mostra i dettagli di una segnalazione


$routes->get('/contatti','HomeController::contatti'); // Contatti
$routes->get('/about','HomeController::about'); // About
$routes->post('(:any)','HomeController::viewSegnalazioneFromID'); // Ricerca: Visualizza una segnalazione tramite l'ID inserito
$routes->get('(:any)','HomeController::index'); // Home page
/*

 
$routes->match(['get', 'post'], 'news/create', 'News::create'); //quando viene usato get o post, chiama news->create
// però in realtà con get chiamerà semplicemente il form, in caso di post quelle altre righe per riempire il database
// Il get lo usa la prima volta che scrivo localhost/codeigniter/news/create, e poi quando riempio il form e faccio submit fa il post
$routes->get('/', 'Home::index');

$routes->get('news/(:segment)', 'News::view/$1');
$routes->get('news', 'News::index');
$routes->get('pages', 'Pages::index');

$routes->get('pages', 'Pages::index'); // se dopo lo / scrive pages, allora chiama il controller Pages con metodo index
$routes->get('(:any)', 'Pages::view/$1'); // se dopo lo / c'è una qualsiasi cosa, passa il controller Pages con metodo view, utilizzando il parametro che è quello che abbiamo scritto dopo lo /

//$routes->get('(:any)', 'Pages::view/$1'); // può dare problemi con l'altro any


*/

