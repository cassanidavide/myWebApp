<?php
        $conn = @pg_connect("dbname=webapp288 user=postgres password=ajejebrazorf");
        
        if(!$conn) 
            die("Connessione fallita !<br />");
        echo("Connessione riuscita");
        exit;
 ?>