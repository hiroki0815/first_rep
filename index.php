<?
echo 'php test<br>';

$dbinfo = parse_url(getenv('DATABASE_URL'));

$dsn = 'pgsql:host=' . $dbinfo['host'] . ';dbname=' . substr($dbinfo['path'], 1);

$pdo = new PDO($dsn, $dbinfo['user'], $dbinfo['pass']);
//var_dump($pdo->query('select '1' from dual'));

//var_dump($pdo->query('select sysdate from dual'));

echo '修正<br>';

var_dump($dbinfo['user']);

/*
 $qry = $pdo->prepare('select * from staff;');
 $qry->execute();
 foreach($qry->fetchAll() as $row){
 // 取り出したデータの処理
 echo '<tr>';
 echo '<td>', $row['id'], '</td>';
 echo '</tr>';
 }
*/
echo '修正3<br>';
//var_dump($row);

//pdo->getAttribute(PDO::ATTR_SERVER_VERSION));

//var_dump($pdo->query($sql));

//phpinfo();
?>