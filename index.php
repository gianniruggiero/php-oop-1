<?php

class User {
    public $name;
    public $lastname;
    public $age;
    public $nationality;
    public $genre;
    public $email;
    public $username;
    public $password;
    public $sconto;

    public function __construct ($_username, $_password, $_age) {
        $this->username = $_username;
        $this->password = $_password;
        $this->age = $_age;
    }

    public function setPersonalData ($_name, $_lastname, $_nationality, $_genre, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->nationality = $_nationality;
        $this->genre = $_genre;
        $this->email = $_email;
    }

    public function setSconto () {
        if ($this->age < 45) {
            if ($this->genre == "f") {
                $this->sconto = 50;
            } else {
                $this->sconto = 30;
            }
        } else {
            $this->sconto = 5;
        }
    }
}

$user1 = new User("gianni1", "dadadsada", 45);
$user1-> setPersonalData("Gianni", "Ruggiero", "Italian", "m", "gianni@getmail.com");
$user1->setSconto();

$user2 = new User("bloodymary", "m666", 19);
$user2-> setPersonalData("Maria", "Rossi", "Italian", "f", "mariar@getmail.com");
$user2->setSconto();

$user3 = new User("gheart34", "cqeqwewq", 23);
$user3-> setPersonalData("George", "Bridges", "English", "m", "george@getmail.com");
$user3->setSconto();

$user4 = new User("frank-43", "nnmrmmere", 13);
$user4-> setPersonalData("Franco", "Pazzini", "Italian", "m", "pazzfr@getmail.com");
$user4->setSconto();

$user5 = new User("carlapert", "crl234", 26);
$user5-> setPersonalData("Carla", "Pertica", "Italian", "f", "carla.pertica@getmail.com");
$user5->setSconto();

$user6 = new User("betty543", "btt14", 17);
$user6-> setPersonalData("Betty", "Love", "American", "f", "betty.love@getmail.com");
$user6->setSconto();

$utenti = [$user1, $user2, $user3, $user4, $user5, $user6];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>PHP-OOP-1</title>
</head>
<body>
    <main>
        <h1>App Users List</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Nationality</th>
                <th>Genre</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Sconto</th>
            </tr>
            <?php foreach ($utenti as $user) {?>
                <tr>
                    <td><?php echo $user->name ?></td>
                    <td><?php echo $user->lastname ?></td>
                    <td><?php echo $user->age ?></td>
                    <td><?php echo $user->nationality ?></td>
                    <td><?php echo $user->genre ?></td>
                    <td><?php echo $user->email ?></td>
                    <td><?php echo $user->username ?></td>
                    <td><?php echo $user->password ?></td>
                    <td><?php echo $user->sconto ?>%</td>
                </tr>
            <?php }; ?>
        </table>
    </main>
    
</body>
</html>