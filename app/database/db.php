<?php

require('koneksi.php');

function dd($value) 
{
    // echo "<pre>", print_r($value, true),"</pre>";
}

function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table, $conditions = []) 
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        // return records that match conditions
        // $sql = " SELECT * FROM $table WHERE username='brelaaww' AND admin_id=1";
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ( $i === 0) {
                $sql = $sql . " WHERE  $key=?";
            } else {
                $sql = $sql . " AND  $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}

function selectOne($table, $conditions) 
{
    global $conn;
    $sql = "SELECT * FROM $table";
    
    $i = 0;
    foreach ($conditions as $key => $value) {
        if ( $i === 0) {
            $sql = $sql . " WHERE  $key=?";
        } else {
            $sql = $sql . " AND  $key=?";
        }
        $i++;
    }

    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}

function createArticle($data) {
    global $conn;
    if ($data['image']) {

        
        
            $file = $data['image']['tmp_name'];
                $file_contents = file_get_contents($file);
                // $file_contents = addslashes($file_contents);
        
            $data['image'] = $file_contents;
    }


    $columns = implode(', ', array_keys($data));
    $placeholders = implode(', ', array_fill(0, count($data), '?'));
    $values = array_values($data);

    $sql = "INSERT INTO artikel ($columns) VALUES ($placeholders)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $types = str_repeat('s', count($values)); // Assuming all values are strings; adjust as needed
    $stmt->bind_param($types, ...$values);

    // Print the prepared SQL statement for debugging
    // Remove this line in production
    echo "Executing SQL: $sql with values " . implode(', ', $values);

    // Execute the statement
    $stmt->execute();

    if ($stmt->error) {
        die("Error creating article: " . $stmt->error);
    }
}

function editArticle($data) {
    global $conn;
    if ($data['image']) {

        
        
            $file = $data['image']['tmp_name'];
                $file_contents = file_get_contents($file);
                // $file_contents = addslashes($file_contents);
        
            $data['image'] = $file_contents;
    }


    $columns = implode(', ', array_keys($data));
    $placeholders = implode(', ', array_fill(0, count($data), '?'));
    $values = array_values($data);

    // $sql = "UPDATE artikel SET name='".$data['name']."', title='".$data["title"]."', content='".$$data["content"]."',image='".$data["image"]."' WHERE article_id=".$data["article_id"];
    
    
    // $stmt = $conn->prepare($sql);

    // // Bind parameters
    // $types = str_repeat('s', count($values)); // Assuming all values are strings; adjust as needed
    // $stmt->bind_param($types, ...$values);

    $sql = "UPDATE artikel SET name=?, title=?, content=?, image=? WHERE article_id=?";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param('ssssi', $data['name'], $data['title'], $data['content'], $data['image'], $data['article_id']);
        // Print the prepared SQL statement for debugging
    // Remove this line in production
    // echo "Executing SQL: $sql with values " . implode(', ', $values);

    // Execute the statement
    $stmt->execute();

    if ($stmt->error) {
        die("Error creating article: " . $stmt->error);
    }
}

function deleteArticle($articleId)
{
    global $conn;

    // Perform the deletion
    $sql = "DELETE FROM artikel WHERE article_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $articleId); // Assuming article_id is an integer; adjust if needed
    $stmt->execute();

    if ($stmt->error) {
        die("Error deleting article: " . $stmt->error);
    }
}

function getAllArticles() {
    global $conn;
    $sql = "SELECT * FROM artikel";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getArticle($articleId)
{
    global $conn;

    $sql = "SELECT * FROM artikel WHERE article_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $articleId); // Assuming article_id is an integer; adjust if needed
    $stmt->execute();
    if ($stmt->error) {
        die("Error deleting article: " . $stmt->error);
    }
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}


$conditions = [
    'admin_id' => 1,
    'username' => 'brelaaww'
];

$admin = selectOne('admin', $conditions);
dd($admin);