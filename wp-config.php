<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', '' );


/** Nama pengguna basis data MySQL */
define( 'DB_USER', '' );


/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', '' );


/** Nama host MySQL */
define( 'DB_HOST', '' );


/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n5^RwuVxmy`7rQ92TuRXB[PSKZgskDI4$d6qdV|(D$SM4Sxhq]_tcl05)he*#`2?' );

define( 'SECURE_AUTH_KEY',  '`,Z:sAGZ&I=@j-UrQ2UU@ehRQu)/ZrQEo+_iCi[32LMY1Uk08J0n-g4vq>>KD<}[' );

define( 'LOGGED_IN_KEY',    'DCx3hA5-9|g+f{HNraRGBtau;R6E#P8$Db9~aJVb>J@Bh*r$Yzt+Xr`%l$s>b1*+' );

define( 'NONCE_KEY',        '~)t)pScN`v};~C5W.Z54[Deq!-k;jN>+/(>2gpoX+Psh%;q5!*!;[9SH6d^%3pDa' );

define( 'AUTH_SALT',        ' ;`qZAN|m|K;Tsg+$<V^Uy@J?yj7y)H7Ts[Aj[UzLK_Rwh%,)T11[;Saufr`<_;i' );

define( 'SECURE_AUTH_SALT', 'g;G$y:uMW=%EPYiEN~9L}(YW=;XpjWW{S9pYW>vlS!eRtz4+<&`v!-<u9kK;e#}v' );

define( 'LOGGED_IN_SALT',   '.DxSn4jVL[,_3#8BB1-Ssh Ex/8Z l@oO9#}9O~xObjQP{6}x&R,rXWtZ?*uFsXz' );

define( 'NONCE_SALT',       '7L3.0U@]Hdq @V[w,I7Tl&N.xEf/@A?PHO;qx<DyPT+VT*hNN[vUj1%z3Tjr]cHz' );


/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';


/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
