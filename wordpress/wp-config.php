<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'cms' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(W;@OYj9L$-7LSUIsoof`Zh5AoB_|CQ`xT[3=k;_KQP_J=o/!Yr?MGew07<<gw9]' );
define( 'SECURE_AUTH_KEY',  'Er&1,^MkRUs;S]`.Z;xABzL6*{W:Oz0}.y~e2?e_sBJ]uvK9Z{9Iy-DsL(/_14=,' );
define( 'LOGGED_IN_KEY',    'dcX02F*3hzBXZeq/_rg/a9DiArfaXNqU}#*0vF:E007sgbptq??Gd]QPVq(z#Lls' );
define( 'NONCE_KEY',        '-,d%f,t*wWPa?8SOhvU-*Sv_w.hyG2jCU24#DzCwRUfw4Mlv&QlS$)&qgQ|W0eO^' );
define( 'AUTH_SALT',        ';=n=7=~{4>qzr*6ro!O#STu|kr(=zMm<Fj8v:>2?O0%).K>[PYbMvk[[D=fUfK~E' );
define( 'SECURE_AUTH_SALT', 'Qy_Ikry=LkX4;R(8FC.0v!W=+]L8|7Yf+<b`j/@{M9,~|Uv0VIycp%Ev0dTO)$[q' );
define( 'LOGGED_IN_SALT',   '5t,~Lrm{tLcV<R*8:,wLVwtB&|C-wM(5d?DVv>Mw`CAz|D8gg5w0#h[`aDUAfuk5' );
define( 'NONCE_SALT',       ' ]%RSJL`+i5,74d]VR/]@:Y(+xe9!o[,~2I`n8&6,%0w%0uGL!ylokw6!2S]{ne ' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
