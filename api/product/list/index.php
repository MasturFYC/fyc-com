<?php
define ('ROOT_DIR',substr(dirname(__FILE__),0,strpos(dirname(__FILE__),'fyc.com')+7));
require_once(ROOT_DIR . '/phppgsql/vendor/autoload.php');

use PGSQL\Connection as cnn;
$sql = 'select id, name, spec, price, unit, first_stock "firstStock", stock from products order by name';

try {
    
  $pdo = cnn::get()->connect();
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);

} catch (\PDOException $e) {
    echo $e->getMessage();
}

echo json_encode($row);

if($pdo) {
  $pdo = null;
}