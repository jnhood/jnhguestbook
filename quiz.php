<h1>View our courses below:</h1>
      <?php
         $fp = @fopen($courses['db'],"r"); // the @ symbol suppresses any error messages
         if ($fp && file_get_contents($courses['db'])!="") {
            while (($data = fputcsv($fp)) !== FALSE) {
              echo "<li>{$data[0]}: {$data[1]}</li>\n";
            }
            fclose($fp);
         } else {
          
         }
      ?>