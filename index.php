<?
echo 'php test<br>';

$dbinfo = parse_url(getenv('DATABASE_URL'));

$dsn = 'pgsql:host=' . $dbinfo['host'] . ';dbname=' . substr($dbinfo['path'], 1);

$pdo = new PDO($dsn, $dbinfo['user'], $dbinfo['pass']);
//var_dump($pdo->query('select '1' from dual'));

//var_dump($pdo->query('select sysdate from dual'));

echo '修正<br>';

 $qry = $pdo->prepare('select 1 as a');
 $qry->execute();
 foreach($qry->fetchAll() as $q){
 // 取り出したデータの処理
 	echo '<tr>';
 	echo '<td>', $q, '</td>';
 	echo '</tr>';
 }

var_dump($pdo->getAttribute(PDO::ATTR_SERVER_VERSION));

//var_dump($pdo->query($sql));

//phpinfo();
?>