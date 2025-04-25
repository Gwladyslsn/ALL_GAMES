<?php 

function addUser(PDO $pdo, string $pseudo_user, string $email_user, string $mdp_user):bool
{
    $query = $pdo->prepare("INSERT INTO `user` (`email_user`, `mdp_user`, `pseudo_user`) VALUES (:email, :password, :pseudo) ");

    $password = password_hash($mdp_user, PASSWORD_DEFAULT);

    $query->bindValue(':email', $email_user);
    $query->bindValue(':username', $pseudo_user);
    $query->bindValue(':password', $mdp_user);

    return $query->execute();
}

function verifyUser(array $user):array
{
    $errors = [];

    if(isset($user["username"])) {
        if($user["username"] === ""){
            $errors["username"] = "Le champ Pseudo ne doit pas etre vide";
        }
    }else{
        $errors["username"] = "Il manque le champ Pseudo";
    }

    if(count($errors)){
        return $errors;
    }
    return $errors;
}