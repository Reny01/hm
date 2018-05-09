<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'StaticPagesController@homepage');

Route::get('/hm', 'StaticPagesController@hm');
Route::get('/bm', 'StaticPagesController@bm');
Route::get('/kamienie', 'StaticPagesController@kamienie');

Route::get('/karty', 'StaticPagesController@karty');

Route::get('/merlinka', 'MerlinkaController@main');

Route::get('/merlinka/edycje', 'MerlinkaController@edycje');

Route::get('/mol', 'MolController@main');

Route::get('/mol/edycje', 'MolController@edycje');

Route::get('/pod', 'PodController@main');

// BIALA MAGIA

Route::get('/pod/bm/kamienie', 'PodController@kamienie');
Route::get('/pod/bm/praktykakamienie', 'PodController@praktykakamienie');
Route::get('/pod/bm/czary', 'PodController@czary');
Route::get('/pod/bm/zaklecia', 'PodController@zaklecia');
Route::get('/pod/bm/kolory', 'PodController@kolory');

// PODRECZNIK
Route::get('/pod/wprowadzenie', 'PodController@wprowadzenie');
Route::get('/pod/pochodzenie', 'PodController@pochodzenie');
Route::get('/pod/dziedziczenie', 'PodController@dziedziczenie');
Route::get('/pod/mbc', 'PodController@mbc');
Route::get('/pod/mnw', 'PodController@mnw');
Route::get('/pod/mrs', 'PodController@mrs');
Route::get('/pod/mrn', 'PodController@mrn');

Route::get('/pod/prehistoria', 'PodController@prehistoria');
Route::get('/pod/legenda', 'PodController@legenda');
Route::get('/pod/mch', 'PodController@mch');
Route::get('/pod/animag', 'PodController@animag');

Route::get('/pod/starozytnosc', 'PodController@starozytnosc');
Route::get('/pod/egipt', 'PodController@egipt');
Route::get('/pod/grecja', 'PodController@grecja');
Route::get('/pod/rzym', 'PodController@rzym');
Route::get('/pod/inneludy', 'PodController@inneludy');
Route::get('/pod/illyius', 'PodController@illyius');
Route::get('/pod/starozytnimagowie', 'PodController@starozytnimagowie');

Route::get('/pod/sredniowiecze', 'PodController@sredniowiecze');
Route::get('/pod/polowania', 'PodController@polowania');
Route::get('/pod/merlin', 'PodController@merlin');
Route::get('/pod/cadogan', 'PodController@cadogan');
Route::get('/pod/hogwart', 'PodController@hogwart');
Route::get('/pod/komnata', 'PodController@komnata');
Route::get('/pod/black', 'PodController@black');
Route::get('/pod/malfoy', 'PodController@malfoy');
Route::get('/pod/sredniowiecznimagowie', 'PodController@sredniowiecznimagowie');

Route::get('/pod/rada', 'PodController@rada');
Route::get('/pod/stworzenia', 'PodController@stworzenia');
Route::get('/pod/konfederacja', 'PodController@konfederacja');
Route::get('/pod/kodeks', 'PodController@kodeks');
Route::get('/pod/mm', 'PodController@mm');
Route::get('/pod/ministrowie', 'PodController@ministrowie');
Route::get('/pod/gobliny', 'PodController@gobliny');
Route::get('/pod/bank', 'PodController@bank');
Route::get('/pod/azkaban', 'PodController@azkaban');
Route::get('/pod/wizengamot', 'PodController@wizengamot');
Route::get('/pod/macusa', 'PodController@macusa');
Route::get('/pod/rappaport', 'PodController@rappaport');
Route::get('/pod/wynalazki', 'PodController@wynalazki');
Route::get('/pod/czarodziejenowozytnosci', 'PodController@czarodziejenowozytnosci');

Route::get('/pod/iwojna', 'PodController@iwojna');
Route::get('/pod/iiwojna', 'PodController@iiwojna');
Route::get('/pod/albus', 'PodController@albus');
Route::get('/pod/voldemort', 'PodController@voldemort');
Route::get('/pod/rozrywka', 'PodController@rozrywka');
Route::get('/pod/ordery', 'PodController@ordery');
Route::get('/pod/przedmioty', 'PodController@przedmioty');
Route::get('/pod/ow', 'PodController@ow');
Route::get('/pod/prawo', 'PodController@prawo');
Route::get('/pod/prawomagii', 'PodController@prawomagii');

Route::get('/pod/beauxbatons', 'PodController@beauxbatons');
Route::get('/pod/durmstrang', 'PodController@durmstrang');
Route::get('/pod/mahoutokoro', 'PodController@mahoutokoro');
Route::get('/pod/uagadou', 'PodController@uagadou');
Route::get('/pod/koldovstoretz', 'PodController@koldovstoretz');
Route::get('/pod/castelobruxo', 'PodController@castelobruxo');
Route::get('/pod/ilvermorny', 'PodController@ilvermorny');
Route::get('/pod/akademiateatralna', 'PodController@akademiateatralna');
Route::get('/pod/wmigurok', 'PodController@wmigurok');

Route::get('/pod/accio', 'PodController@accio');
Route::get('/pod/alohomora', 'PodController@alohomora');
Route::get('/pod/diffindo', 'PodController@diffindo');
Route::get('/pod/wingardiumleviosa', 'PodController@wingardiumleviosa');
Route::get('/pod/lumos', 'PodController@lumos');
Route::get('/pod/reparo', 'PodController@reparo');
Route::get('/pod/protego', 'PodController@protego');
Route::get('/pod/expelliarmus', 'PodController@expelliarmus');

Route::get('/pod/legendystworzenia', 'PodController@legendystworzenia');
Route::get('/pod/quidditch', 'PodController@quidditch');
Route::get('/pod/charlak', 'PodController@charlak');
Route::get('/pod/flamel', 'PodController@flamel');
