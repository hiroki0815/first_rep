<?

$dbinfo = parse_url(getenv('DATABASE_URL'));
$dsn = 'pgsql:host=' . $dbinfo['host'] . ';dbname=' . substr($dbinfo['path'], 1);
$pdo = new PDO($dsn, $dbinfo['user'], $dbinfo['pass']);

echo '<head>';
//    <meta charset="utf-8">
echo '<title>test page</title>';
echo '</head>';
echo '<body>';
 $qry = $pdo->prepare('select * from staff;');
 $qry->execute();
 foreach($qry->fetchAll() as $row){
 	// 取り出したデータの処理
 	echo '<tr>';
 	echo '<td>', $row['id'], '</td>';
 	echo '<td>', $row['name'], '</td>';
 	echo '</tr>';
 }

echo '</body>';
echo '修正6<br>';
//var_dump($row);

//pdo->getAttribute(PDO::ATTR_SERVER_VERSION));

//var_dump($pdo->query($sql));

phpinfo();
?>