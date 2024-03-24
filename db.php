<?PHP

$user = 'u67293';
$pass = '3126725';
$db = new PDO(
    'mysql:host=localhost;dbname=u67293',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

try {
    $stmt = $db->prepare("INSERT INTO forma_u67293 (full_name, phone,email,birth_date,gender,lange_name,bio,contract_agreed) VALUES (:full_name, :phone,:email,:birth_date,:gender,:lange_name,:bio,:contract_agreed)");
    $login = $_POST['login'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $date = $_POST['date'];
    $someGroupName = $_POST['someGroupName'];
    $bio = $_POST['bio'];
    $checkt = $_POST['checkt'];
    $lange = json_encode($_POST['lange']);
    $stmt->bindParam(':lange_name', $lange);
    $stmt->bindParam(':full_name', $login);
    $stmt->bindParam(':phone', $tel);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':birth_date', $date);
    $stmt->bindParam(':gender', $someGroupName);
    $stmt->bindParam(':bio', $bio);
    $stmt->bindParam(':contract_agreed', $checkt);
    $stmt->execute();
} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // В суперглобальном массиве $_GET PHP хранит все параметры, переданные в текущем запросе через URL.
    if (!empty($_GET['save'])) {
      // Если есть параметр save, то выводим сообщение пользователю.
      print('Спасибо, результаты сохранены.');
    }
    // Включаем содержимое файла form.php.
    include('index.php');
    // Завершаем работу скрипта.
    exit();
  }
  
  
  

?>