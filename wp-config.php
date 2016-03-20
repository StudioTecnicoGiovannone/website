<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'u355416720_wp');

/** Nome utente del database MySQL */
define('DB_USER', 'u355416720_wp');

/** Password del database MySQL */
define('DB_PASSWORD', 'u355416720_wp');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']g65R5G-2#t?s#MB$ u<08[t/C|Rx.<tl|?b0eyvL^hjR!~^l<q<,Z`*Tm}jOv-]');
define('SECURE_AUTH_KEY',  'NoVkITnKo?6-$[^dG7A{:_lJ0v(53%+=)|Q),]}i?2V><AjYy;:x31oIa}{]A_XY');
define('LOGGED_IN_KEY',    'YP=$eQtkv)P;V2zwSK%Orro`E?>%~@:SGCW0wKG(N9{j{vNA+e.D,D410j}gP,pp');
define('NONCE_KEY',        'SM+2BU;jkM~{5o0lr9DHYmD`{Qce<OK(s~bO>tIhqK~|+}H^4f~+j4+[Htm>q%/J');
define('AUTH_SALT',        '^9dw($MM__*omitK)[CImY*zCc1s4`g#5hJ7w}?mB_U[29|y|hDxI,a-&a/]`[pS');
define('SECURE_AUTH_SALT', 'fU_R2M1{FO?A ex@8g{-bT SC48*cO;jO8^},Uktsb+~O@.Hd*#5Ct+bO:H,+m-f');
define('LOGGED_IN_SALT',   'BT7fCM>`K#OxN,dts*HJ[VD-M3U-ElJ=1KQ`8T/3O=-%A0BNwCOFgSdv2&o$:<Kr');
define('NONCE_SALT',       'l0SK]}b5/9!+3b0AwT#6D1d]|-QXg1,|?yg4]D^z|{6+uqL4dfR@__3n4Oxx;N(U');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');