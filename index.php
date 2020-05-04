<?
echo 'php test<br>';

$dbinfo = parse_url(getenv('DATABASE_URL'));

$dsn = 'pgsql:host=' . $dbinfo['host'] . ';dbname=' . substr($dbinfo['path'], 1);

$pdo = new PDO($dsn, $dbinfo['user'], $dbinfo['pass']);
//var_dump($pdo->query('select sysdate from dual')));

//phpinfo();
var_dump($pdo->query('select sysdate from dual'));

echo '終わり<br>';
?>