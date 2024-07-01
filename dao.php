<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "erplib";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute a query
function query($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);
    return $result;
}

// Fetch a single row from the result set
function fetch($result)
{
    return mysqli_fetch_assoc($result);
}

// Fetch all rows from the result set
function fetchAll($result)
{
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Insert data into a table
function insert($table, $data)
{
    global $conn;
    $columns = implode(', ', array_keys($data));
    $values = implode("', '", array_values($data));
     $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

// Update data in a table
function update($table, $data, $condition)
{
    global $conn;
    $set = '';

    // $data=array("name"=>"user1","mobile"=>"8901164933");
    foreach ($data as $key => $value) {
        $set .= "$key = '$value', ";
    }
    $set = rtrim($set, ', ');
   $sql = "UPDATE $table SET $set WHERE $condition";
    // "update enquiry set name='user1', mobile='8901164933' where id=1"

    $result = mysqli_query($conn, $sql);
    return $result;
}

// Delete data from a table
function deleteRecord($table, $condition)
{
    global $conn;
    $sql = "DELETE FROM $table WHERE $condition";
    $result = mysqli_query($conn, $sql);
    return $result;
}

//select all data from table
function selectAll($table)
{
    $sql = "select * from $table";
    $result = query($sql);
    return $rows = fetchAll($result);
}

function selectById($table, $pk_name, $pk_value)
{
    $aql = "select * from $table where $pk_name=$pk_value";
    $result = query($aql);
    return $rows = fetch($result);
}

function selectByMaxGsn($query)
{
    $result = query($query);
    $gsn = -1;
    $gsnfromtable = fetch($result)['srno'];
    if ($gsnfromtable > 0) {
        $gsn = $gsnfromtable + 1;
    } else {
        $gsn = 1;
    }
    return $gsn;
}

// update single recored
// function updateById($table, $data, $pk_name)
// {
//     global $conn;
//     $columns = implode(', ', array_keys($data));
//     $values = implode("', '", array_values($data));

//     // $sql="update $table set name=$name, mobile=$mobile, email=$email, city=$city, state=$state, comment=$comment where id=$id";


//     $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
//     $result = mysqli_query($conn, $sql);
//     return $result;
// }


// Close the database connection
function close()
{
    global $conn;
    mysqli_close($conn);
}


function selectByCondition($table, $condition)
{
    global $conn;
    $sql = "select * from $table where $condition";
    $result = mysqli_query($conn, $sql);
    return $rows = fetchAll($result);
}

function runAnyQuery($query){    
    return $result = query($query);    
}
?>