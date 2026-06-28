<?php

require_once __DIR__ . '/includes/header.inc.php';

get('/', 'views/index.php');

// abador.ru
get('/yandex_ab33478c60973e71.html', 'views/ywm/yandex_ab33478c60973e71.php');
// akabo.ru
get('/yandex_be6ce691ec64592f.html', 'views/ywm/yandex_be6ce691ec64592f.php');
// azomna.ru
get('/yandex_fd8f17dfd81c3fd8.html', 'views/ywm/yandex_fd8f17dfd81c3fd8.php');
// azurla.ru
get('/yandex_4f9dd0962d01e9f9.html', 'views/ywm/yandex_4f9dd0962d01e9f9.php');
// cambiz.ru
get('/yandex_62bb52cfc4a46bd0.html', 'views/ywm/yandex_62bb52cfc4a46bd0.php');
// ferdato.ru
get('/yandex_5262866961215b68.html', 'views/ywm/yandex_5262866961215b68.php');
// fotobombs.ru
get('/yandex_45b9d9f1d6743163.html', 'views/ywm/yandex_45b9d9f1d6743163.php');
// gavon.ru
get('/yandex_ed556b16a3700a0f.html', 'views/ywm/yandex_ed556b16a3700a0f.php');
// girron.ru
get('/yandex_2f6e0dbfe7a641d5.html', 'views/ywm/yandex_2f6e0dbfe7a641d5.php');
// gretest.ru
get('/yandex_3973c920f29c5ab3.html', 'views/ywm/yandex_3973c920f29c5ab3.php');
// lundor.ru
get('/yandex_ff31d2470c3c5d92.html', 'views/ywm/yandex_ff31d2470c3c5d92.php');
// maduga.ru
get('/yandex_15b0bcfd72199057.html', 'views/ywm/yandex_15b0bcfd72199057.php');
// makano.ru
get('/yandex_6afc93f1c637db97.html', 'views/ywm/yandex_6afc93f1c637db97.php');
// medouz.ru
get('/yandex_b29c3c274930a6c8.html', 'views/ywm/yandex_b29c3c274930a6c8.php');
// partuga.ru
get('/yandex_e1d66c48266f98f6.html', 'views/ywm/yandex_e1d66c48266f98f6.php');
// spisko.ru
get('/yandex_daf346f6aa4645c7.html', 'views/ywm/yandex_daf346f6aa4645c7.php');
// whathappensif.ru
get('/yandex_14deeef68ef3c65f.html', 'views/ywm/yandex_14deeef68ef3c65f.php');
// zanter.ru
get('/yandex_9aec904882b56748.html', 'views/ywm/yandex_9aec904882b56748.php');
// zurca.ru
get('/yandex_010e18de33bbe2f3.html', 'views/ywm/yandex_010e18de33bbe2f3.php');
// петродача.рф
get('/yandex_f34f2f449d230247.html', 'views/ywm/yandex_f34f2f449d230247.php');

get('/category/$category_id', 'views/index.php');
get('/articles/$published/$slug', 'views/index.php');
get('/articles/$published/$slug/images/$uid', 'https://contentor.online/images/$uid');

get('/$page', 'views/index.php');

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404', 'views/404.php');
