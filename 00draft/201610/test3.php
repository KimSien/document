reference [pdo db access](http://qiita.com/mochizukikotaro/items/1a441d899af454e236e7)

html:5>h1{title}+form[method=post]>input[name=title]+input[name=contents]


pdo
$dsn =;
$user =;
$password=;


try{
$u_pdo = new PDO($dsn,$user,$password,[PDO::ERRMODE_EXCEPTION , ]);	

}catch(PDOException $e){
	print_r("error " . $e->getMesssage() );
	die();	
}

$query ="";
$stmt = $u_pdo->query($query);

while($result = $stmt->fetch(PDO::FETCH_ASSOC){
	
}


