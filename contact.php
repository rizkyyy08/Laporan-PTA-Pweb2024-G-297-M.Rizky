<?php
$kontak = [
    'instagram' => 'https://www.instagram.com/rizky_r4madhan?igsh=eHJteW1kbmE1bG9q',
    'youtube' => 'https://youtube.com/@rizkyy2144?si=aQHyPznBqWi1ffNK',
    'tiktok' => 'https://www.tiktok.com/@ikyyylagiii?_t=8mGB01iqQwU&_r=1',
    'whatsapp' => 'https://wa.me/6289522719323/'
];

foreach ($kontak as $platform => $link) {
    echo "<a href=\"$link\"><i class=\"fa-brands fa-$platform\"></i></a><br>";
}
?>
