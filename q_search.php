<?php
/*
Author: Timothy Malche
URL: https://owlcation.com/stem/How-to-search-for-multiple-keywords-and-long-text-in-MySql-Table-using-PHP
Feature: Awsome Search Functions Using PHP
Thanks: Timothy Malche
*/

$link = mysqli_connect("localhost", "root", "Bodhidhara", "tfb_bodhidhara");
$sub = $_REQUEST["search"];
$aKeyword = explode(" ", $sub);
    
     for($i = 0; $i < count($aKeyword); $i++) {
		if(!empty($aKeyword[$i])) {
			$query ="SELECT * FROM bodhi_news WHERE txt LIKE '%".$aKeyword[$i]."%' OR title LIKE '%".$aKeyword[$i]."%'";
		}
      }
	 
     $result = $link->query($query);
					
     if(mysqli_num_rows($result) > 0) {
		$row_count=0;
		While($row = $result->fetch_assoc()) {   
			$row_count++;						  
			echo '<p><a href="/'.$row['category'].'/article/'.$row['selNo'].'/'.$row['title'].'">'.$row['title'].'</a><p>';
		}
    }
?>