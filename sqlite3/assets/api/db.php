<?php 

	// Database Import

		if (file_exists('assets/db/data.db')) {
			$__2590w3fh23 = new SQLite3('assets/db/data.db');


			function sql_query($sql_query) {
				global $__2590w3fh23;
				return $__2590w3fh23->query($sql_query);
				$__2590w3fh23->close();
			}

			function escape_string($string) {
				return SQLITE3::escapeString($string);
			}
		}
		else {
			die('<h1 style="text-align: center ; margin: 0 ; font-family: segoe ui ; font-weight: lighter ; color: #212121; font-size: 40px; position: absolute; top: 50%; left: 50%; transform: translateY(-50%) translateX(-50%);">Database File is Missing . Pls Reinstall the Program</h1>');
		}