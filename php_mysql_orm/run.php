require 'rb.php';
R::setup( 'mysql:host=bdm272724254.my3w.com;dbname=bdm272724254_db', 'bdm272724254', 'bdm272724254db' );
$post = R::dispense( 'post' );
$post->title = 'My holiday';
$id = R::store( $post );