<?php


function load_template($path,$template_vars){
    ob_start();
    extract($template_vars);
    require $path;
    return ob_get_clean();
}

function getall($pdo,$table_name){
    $stmt = $pdo->prepare('SELECT * FROM '.$table_name);
    $stmt->execute();
    return $stmt;
}

function get_specific($pdo,$table_name,$nrows){
    $stmt = $pdo->prepare('SELECT * FROM '. $table_name . ' LIMIT '. $nrows);
    $stmt->execute();
    return $stmt;
}

function get_conditional($pdo, $table_name, $column, $value){
    $stmt = $pdo->prepare('SELECT * FROM '. $table_name .' WHERE ' . $column . ' = :value');
    $v = ['value' => $value];
    $stmt->execute($v);
    return $stmt;
}

function get_pdo($schema,$server,$username,$password){
    $pdo = new PDO('mysql:dbname='. $schema. ';host=' . $server, $username, $password);
    return $pdo;
}


function insert_row($pdo, $table, $args){
    $vals = array_keys($args);
    $vals_seperated = implode(', ', $vals);
    $implodedString = implode(', :', $vals);
    $implodedString = ':' . $implodedString;
    $stmt = $pdo->prepare('INSERT INTO '.$table.'('.$vals_seperated.')'. ' VALUES ('.$implodedString.')');
    $stmt->execute($args);
}

function authenticator($pdo,$table_name, $username,$password){
    $stmt = $pdo->prepare('SELECT * FROM '. $table_name . ' WHERE username = :username' );
    $usnme = ['username' => $username];
    $stmt->execute($usnme);
    if ($stmt->rowCount()>0){
        $stmt2 = $pdo->prepare('SELECT * FROM '. $table_name . ' WHERE username = :username AND password = :password' );
        //var_dump($stmt2);
        $val2 = ['username' => $username, 'password' => $password];
        //var_dump($val2);
        $stmt2->execute($val2);
        //var_dump($stmt2);
        if ($stmt2->rowCount()>0){
            return 1;
        } else {
            return 0;
        }

    } else {
        return 0;
    }    
}

function query_resolver($query_string){
    $arr = explode('&',$query_string);
    $arr = implode('=',$arr);
    echo($arr);
    $arr = explode('=',$arr);
    $new_arr = [];
    for ($x = 0; $x <= count($arr); $x = $x+2){
        if ($x < count($arr)){
            $new_arr[$arr[$x]] = $arr[$x+1];
        }
    }
    return $new_arr;
}

?>