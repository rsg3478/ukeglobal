<?
/**
 * pdo 클래스 방식
 * 샘플예제 입니다. 대충 어떻게 동작되는지 공부하시기에 좋게 정리해놓았습니다.
 * 각각의 값을 변경하고 연결테스트 하기에도 좋습니다.
*/

//0. 설정
$mysql_hostname = 'luie12.cafe24.com';
$mysql_username = 'luie12';
$mysql_password = 'qazxsw1@';
$mysql_database = 'luie12';
$mysql_port = '3306';
$mysql_charset = 'utf8';


//1. DB 연결
$dsn = 'mysql:host='.$mysql_hostname.';dbname='.$mysql_database.';port='.$mysql_port.';charset='.$mysql_charset;
try
{
	$connect = new PDO( $dsn, $mysql_username, $mysql_password );
}
catch ( PDOException $e )
{
	echo 'Connect failed : ' . $e->getMessage() . '';
	return false;
}

//2. 쿼리 생성
$query = ' select \'complete\' as col from dual';

//3. 쿼리 실행
$result = $connect->query($query) or die($connect->errorInfo());

//4. 결과 처리
while($row = $result->fetch())
{
	echo $row['col'].'';
}

//5. 연결 종료
//pdo 는 자동 종료 됨. 구지 하고 싶다면, null 값을 준다.
$connect = null;
?>