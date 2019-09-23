<?php
/**
try{
    $db = new PDO('mysql:host=localhost;dbname=blog','root','mysql');
} catch (\PDOException $e){
    echo 'hi';
    throw new \PDOException($e->getMessage(), $e->getCode());
}
*/
/**
 * bold, underline and italic text for titles
 * @param string $html any text
 * @return string bold, underline and italic text
 */
function title(string $html): string{
    return '<b><u><i>'.$html.'</i></u></b>'; 
}

/**
 * italic text for topics
 * @param string $html any text
 * @return string italic text
 */
function topic(string $html): string{
    return '<i>'.$html.'</i>';
}

function bolded(string $html): string{
    return '<b><i>'.$html.'</i></b>';
}   
    
/**
 * add userId # to get userName from users table
 * @global PDO object $db blog database
 * @param int $userId value from users table
 * @return string of the userName from users table
 */
function getAuthor(int $userId): string{
    global $db;
    return $db->query('SELECT `userName` FROM blog.users WHERE `idUsers` = '.$userId.';')->fetch(PDO::FETCH_COLUMN);
    
}