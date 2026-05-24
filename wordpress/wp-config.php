<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'bdgkgzk2j41cf5nlaalzqezvd0xn4aml3zfr1vnsczml64msbf1520qlnv0m6892' );
define( 'SECURE_AUTH_KEY',  'n2wz5bsaahg7tj0na7bs6nncpavhndohcsss4c9c6i3d9nctlg1vl9bzw5od5laf' );
define( 'LOGGED_IN_KEY',    'ekluz3azk5eee48bj6sxiouxa9batm80b8rlmi56jjdpr96z734ne206c7uay5p0' );
define( 'NONCE_KEY',        '13mmh42zbpfietjr19ydkbs3ebcrw6zy4gbpcvwy5d19mkv0eymqq3o6bkj6cjfv' );
define( 'AUTH_SALT',        's4nsvv66bnb9bse9w2fmzn9x2g2c28nwx07b9vpn6omyavjj6q4ssi66et1xqr2i' );
define( 'SECURE_AUTH_SALT', '85gr9sjv39lwv99masj8r9sxg5l659wolrdsnzs9vaqb6r9gu85dvmb85bqp8qdp' );
define( 'LOGGED_IN_SALT',   'j55fuclxiw4hjjvdqnreildvipmc1lic5lrdyrfll9jja65qhz6k4zqve9hdoqa0' );
define( 'NONCE_SALT',       'ybt7gzmlyy2ysfobon0ddyhad3p4wgqmshvkd7a85epqa5e8mxdis1yt3googdve' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-0c2f046e-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-0c2f046e-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
