<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/','welcomeController@index');

$router->get('/absen','AbsenController@index');
$router->get('/absen/{id}','AbsenController@show');
$router->post('/absen','AbsenController@store');
$router->put('/absen/{id}','AbsenController@update');
$router->delete('/absen/{id}','AbsenController@destroy');

$router->get('/absensubuh','AbsensubuhController@index');
$router->get('/absensubuh/{id}','AbsensubuhController@show');
$router->post('/absensubuh','AbsensubuhController@store');
$router->put('/absensubuh/{id}','AbsensubuhController@update');
$router->delete('/absensubuh/{id}','AbsensubuhController@destroy');


$router->get('/absen','AbsenController@index');
$router->get('/absen/{id}','AbsenController@show');
$router->post('/absen','AbsenController@store');
$router->put('/absen/{id}','AbsenController@update');
$router->delete('/absen/{id}','AbsenController@destroy');

$router->get('/acara','AcaraController@index');
$router->get('/acara/{id}','AcaraController@show');
$router->post('/acara','AcaraController@store');
$router->put('/acara/{id}','AcaraController@update');
$router->delete('/acara/{id}','AcaraController@destroy');

$router->get('/guru','GuruController@index');
$router->get('/guru/{id}','GuruController@show');
$router->post('/guru','GuruController@store');
$router->put('/guru/{id}','GuruController@update');
$router->delete('/guru/{id}','GuruController@destroy');

$router->get('/kalender','KalenderAkademikController@index');
$router->get('/kalender/{id}','KalenderAkademikController@show');
$router->post('/kalender','KalenderAkademikController@store');
$router->put('/kalender/{id}','KalenderAkademikController@update');
$router->delete('/kalender/{id}','KalenderAkademikController@destroy');

$router->get('/kas','KasController@index');
$router->get('/kas/{id}','KasController@show');
$router->post('/kas','KasController@store');
$router->put('/kas/{id}','KasController@update');
$router->delete('/kas/{id}','KasController@destroy');

$router->get('/kelas','KelasController@index');
$router->get('/kelas/{id}','KelasController@show');
$router->post('/kelas','KelasController@store');
$router->put('/kelas/{id}','KelasController@update');
$router->delete('/kelas/{id}','KelasController@destroy');

$router->get('/klmpsubuh','KlmpsubuhController@index');
$router->get('/klmpsubuh/{id}','KlmpsubuhController@show');
$router->post('/klmpsubuh','KlmpsubuhController@store');
$router->put('/klmpsubuh/{id}','KlmpsubuhController@update');
$router->delete('/klmpsubuh/{id}','KlmpsubuhController@destroy');

$router->get('/kriteralquran','KriteriaPenilaianquranController@index');
$router->get('/kriteralquran/{id}','KriteriaPenilaianquranController@show');
$router->post('/kriteralquran','KriteriaPenilaianquranController@store');
$router->put('/kriteralquran/{id}','KriteriaPenilaianquranController@update');
$router->delete('/kriteralquran/{id}','KriteriaPenilaianquranController@destroy');

$router->get('/nilai','NilaiController@index');
$router->get('/nilai/{id}','NilaiController@show');
$router->post('/nilai','NilaiController@store');
$router->put('/nilai/{id}','NilaiController@update');
$router->delete('/nilai/{id}','NilaiController@destroy');

$router->get('/nquran','NilaiquranController@index');
$router->get('/nquran/{id}','NilaiquranController@show');
$router->post('/nquran','NilaiquranController@store');
$router->put('/nquran/{id}','NilaiquranController@update');
$router->delete('/nquran/{id}','NilaiquranController@destroy');

$router->get('/klmpsubuh','KlmpsubuhController@index');
$router->get('/klmpsubuh/{id}','KlmpsubuhController@show');
$router->post('/klmpsubuh','KlmpsubuhController@store');
$router->put('/klmpsubuh/{id}','KlmpsubuhController@update');
$router->delete('/klmpsubuh/{id}','KlmpsubuhController@destroy');

$router->get('/ortu','OrtuController@index');
$router->get('/ortu/{id}','OrtuController@show');
$router->post('/ortu','OrtuController@store');
$router->put('/ortu/{id}','OrtuController@update');
$router->delete('/ortu/{id}','OrtuController@destroy');

$router->get('/pelajaran','PelajaranController@index');
$router->get('/pelajaran/{id}','PelajaranController@show');
$router->post('/pelajaran','PelajaranController@store');
$router->put('/pelajaran/{id}','PelajaranController@update');
$router->delete('/pelajaran/{id}','PelajaranController@destroy');

$router->get('/pelanggaran','PelanggaranController@index');
$router->get('/pelanggaran/{id}','PelanggaranController@show');
$router->post('/pelanggaran','PelanggaranController@store');
$router->put('/pelanggaran/{id}','PelanggaranController@update');
$router->delete('/pelanggaran/{id}','PelanggaranController@destroy');


$router->get('/photo','PhotoController@index');
$router->get('/photo/{id}','PhotoController@show');
$router->post('/photo','PhotoController@store');
$router->put('/photo/{id}','PhotoController@update');
$router->delete('/photo/{id}','PhotoController@destroy');


$router->get('/siswabaru','SiswabaruController@index');
$router->get('/siswabaru/{id}','SiswabaruController@show');
$router->post('/siswabaru','SiswabaruController@store');
$router->put('/siswabaru/{id}','SiswabaruController@update');
$router->delete('/siswabaru/{id}','SiswabaruController@destroy');


$router->get('/siswa','SiswaController@index');
$router->get('/siswa/{id}','SiswaController@show');
$router->post('/siswa','SiswaController@store');
$router->put('/siswa/{id}','SiswaController@update');
$router->delete('/siswa/{id}','SiswaController@destroy');


$router->get('/tunggakan','TunggakansiswaController@index');
$router->get('/tunggakan/{id}','TunggakansiswaController@show');
$router->post('/tunggakan','TunggakansiswaController@store');
$router->put('/tunggakan/{id}','TunggakansiswaController@update');
$router->delete('/tunggakan/{id}','TunggakansiswaController@destroy');


$router->get('/ukeluar','UangkeluarController@index');
$router->get('/ukeluar/{id}','UangkeluarController@show');
$router->post('/ukeluar','UangkeluarController@store');
$router->put('/ukeluar/{id}','UangkeluarController@update');
$router->delete('/ukeluar/{id}','UangkeluarController@destroy');


$router->get('/umasuk','UangmasukController@index');
$router->get('/umasuk/{id}','UangmasukController@show');
$router->post('/umasuk','UangmasukController@store');
$router->put('/umasuk/{id}','UangmasukController@update');
$router->delete('/umasuk/{id}','UangmasukController@destroy');

$router->post('/register','UserController@register');
$router->post('/login','UserController@login');