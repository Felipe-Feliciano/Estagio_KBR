<?php 
   $sql = "SELECT * FROM usuarios";

   $res = $conexao->query($sql);
   
   $qtd = $res->num_rows;

   if($qtd > 0){
        while($row = $res->fetch_object()){
            echo $row->id;
            echo $row->usuario;
            echo $row->email;
        }
   }

?>