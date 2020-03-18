<?php 

function job($arr, $s) 
{ 
    $counter = 0; 
    for ($j=0; $j<count($arr); $j++) 
    { 
        
        if ($s == ($arr[$j])) 
            $counter += 1; 
    } 
    return $counter; 
} 
function good($arr, $q) 
{ 
    for ($i=0; $i<count($q); $i++) 
    { 
        echo(job($arr, $q[$i])); 
        echo (" "); 
    } 
} 
  
$arr = array("aba", "baba", "aba", "xzxb"); 
$q = array("aba", "xzxb", "ab"); 
good($arr, $q); 
  

