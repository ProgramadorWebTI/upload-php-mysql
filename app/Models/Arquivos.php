<?php

namespace App\Models;

class Arquivos {
    private  $table = "arquivos";
    
    public function add($nome,$file) {
        $sql = "INSERT INTO $this->table (nome,files) VALUES (?,?)";
        $stmt = Database::conexao()->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $file);
        $stmt->execute();
        print_r($stmt);
        
        if(Database::conexao()->lastInsertId()){
            return TRUE;
        }else {
            return FALSE;
        }
        
    }
}
