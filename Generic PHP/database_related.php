<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "gateway";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}
	
	function dbInsert($table_name, $form_data){
		//credit : http://www.evoluted.net/thinktank/web-development/time-saving-database-functions

		// retrieve the keys of the array (column titles)
	    $fields = array_keys($form_data);

	    // build the query
	    $sql = "INSERT INTO ".$table_name."
	    (`".implode('`,`', $fields)."`)
	    VALUES('".implode("','", $form_data)."')";
	    //echo "sql: ".$sql;

	    return dbQuery($sql);
	}

	function dbSelect($table_name, $select_query, $where_query){
		
		$sql = "SELECT ".$select_query." FROM ".$table_name;
		if ($where_query != '') {
			$sql .= " WHERE ".$where_query;
		}
		//echo $sql;
		return dbQuery($sql);
		
	}

	function dbDelete($table_name, $column, $value){
	    $sql = "DELETE FROM ".$table_name." WHERE ".$column."='".$value."';";
	    return dbQuery($sql);
	}

	function dbQuery($sql){
		$result = mysqli_query($conn, $sql);
	    mysqli_close($conn);
	    return $result;
	}
?>