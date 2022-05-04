<?php
include "app/database/db.php";

$errMsg= '';

function userAuth($user) {
    $_SESSION['id']= $user['id'];
    $_SESSION['login']= $user['username'];
    $_SESSION['admin']= $user['admin'];
    if($_SESSION['admin']) {
        header('location:' . BASE_URL . "admin/posts/index.php");
    } else {
        header('location:' . BASE_URL );
    }
}

//Код для формы регистрации
if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['button-reg'])) {

    $admin = 0;
    $login =trim($_POST['login']) ;
    $email = trim($_POST['email']) ;
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);


    if($login === '' || $email === '' || $passS === '' ) {
       $errMsg = "Не все поля заполнены!";
    } elseif(mb_strlen($login, 'UTF-8')<2){
        $errMsg = "login have to be longer than 2 symbols";
    } elseif($passF !== $passS){
        $errMsg = " Passwords should be same";
    } else {
        $existence = selectONE('users',['email'=>$email]);
        if ( $existence['email']=== $email) {
            $errMsg = "login with this email exists, please enter other email";
        } else {
            $pass = password_hash($passS, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectONE('users', ['id'=>$id]);
          userAuth($user);
        }
    }


} else {
    $login ='' ;
    $email = '' ;
}
// Код для формы autorization
if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['button-log'])) {

    $email = trim($_POST['email']) ;
    $passF = trim($_POST['password']);

    if($email === '' || $passF === '' ) {
        $errMsg = "Не все поля заполнены!";

    } else {
        $existence = selectONE('users', ['email' => $email]);
        if($existence && password_verify($passF, $existence['password'])) {
           userAuth($existence);
        } else{
            $errMsg="Почта либо пароль введены неверно!";
        }

    }
} else {
    $email = '' ;
}
//    $pass =password_hash($_POST['password2'], PASSWORD_DEFAULT) ;