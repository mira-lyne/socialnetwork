
<?php
include_once "PDO.php";

function GetOneUserFromId($id)
{
  global $PDO;
  $response = $PDO->query("SELECT * FROM user WHERE id = $id");
  return $response->fetch();
}

function GetAllUsers()
{
  global $PDO;
  $response = $PDO->query("SELECT * FROM user ORDER BY nickname ASC");
  return $response->fetchAll();
}

function GetUserIdFromUserAndPassword($username, $password)
{
  global $PDO;
  $res = $PDO->query("SELECT * FROM user WHERE nickname = '$username' AND password = 'password'");
  $users = $res->fetchAll();
  if (count($users) == 1) {
    $id = $users[0]['id'];
    return $id;
  } else {
    return -1;
  }
}
