<?php

session_start();
require 'connect.php';

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
//Проверка выполнения запроса в БД
function dbCheckError($query) {
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    } return true;
}
// Запрос на получение данных c одной таблицы
function selectALL($table, $params=[]){
    global $pdo;
    $sql = "SELECT * FROM $table ";
    if(!empty($params)) {
        $i=0;
        foreach ($params as $key=> $value) {
            if(!is_numeric($value)){
                $value = "'" .$value."'";

            }
            if($i === 0) {
                $sql = $sql . " WHERE $key= $value";
            } else {
                $sql = $sql . " AND $key= $value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);

    $query->execute();
    dbCheckError($query);

    return $query->fetchALL();
}

// Запрос на получение одной строки с выбранной таблицы
function selectONE($table, $params=[]){
    global $pdo;
    $sql = "SELECT * FROM $table ";
    if(!empty($params)) {
        $i=0;
        foreach ($params as $key=> $value) {
            if(!is_numeric($value)){
                $value = "'" .$value."'";

            }
            if($i === 0) {
                $sql = $sql . " WHERE $key= $value";
            } else {
                $sql = $sql . " AND $key= $value";
            }
            $i++;
        }
    }
    $sql = $sql . " LIMIT 1";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetch();
}



//Запись в таблицу БД

function insert($table, $params) {
    global $pdo;
//INSERT INTO `users` (admin, username, email, password) VALUES ('1', 'asdf', 'asd@mail.ru', '12345');
    $i=0;
    $coll = ' ';
    $mask = ' ';
foreach ($params as $key => $value) {
    if ($i === 0) {
        $coll = $coll . "$key";
        $mask = $mask . "'". "$value" . "'";
    } else {
        $coll = $coll . ", $key";
        $mask = $mask . ", '". "$value" . "'";
    }
        $i++;

}


    $sql = "INSERT INTO $table($coll) VALUES ( $mask)";
//tt($sql);
//exit();

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return ($pdo->lastInsertId());


}

//$arrData = [
//    'admin'=> '0',
//    'username' => 'd242',
//    'email'=> 're123d@rde.ru',
//    'password'=> '2022'
//
//];
//
//insert('users', $arrData);


// Обновление строки в таблицу
function update($table,$id, $params) {
    global $pdo;
//INSERT INTO `users` (admin, username, email, password) VALUES ('1', 'asdf', 'asd@mail.ru', '12345');
    $i=0;
    $str = '';

    foreach ($params as $key => $value) {
        if ($i === 0) {
            $str = $str . $key ." = '". $value . "'";
        } else {
            $str = $str . ", " . $key ." = '". $value . "'";
        }
        $i++;

    }
//UPDATE `users` SET username = 'test', password ='5555' WHERE id = 1

    $sql = "UPDATE $table SET $str WHERE id = $id ";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);


}

//$param = [
//    'admin'=> '0',
//'password' => '37733',
//    'email' => 'boti@mail.ru'
//];
//update('users', 1, $param );

// Обновление строки в таблицу
function delete($table,$id) {
    global $pdo;
    //DELETE FROM `users` WHERE id = 5
    $sql = "DELETE FROM $table WHERE id = $id ";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);


}
//delete('users', 6);


