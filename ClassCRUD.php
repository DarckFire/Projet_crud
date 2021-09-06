<?php

/**
 * class create
 */
class create{

    /**
    * getDatadaseConnexion
    *
    * 
    */
    public function getDatadaseConnexion (){
        try{
            $user = "root";
            $pass = "";
            $pdo = new PDO('mysql:host=localhost;dbname=crud',
            $user, $pass);
            $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 
            PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch (PDOException $e){
            echo "Erreur !:" . $e->getMessage() ."<br/>";
            die();
        }
    }

    /**
    * getNewUser
    *
    * 
    */
    public function getNewUser() {
        $user['id'] = "";
        $user['nom'] = "";
        $user['prenom'] = "";
        $user['age'] = "";
        $user['sexe'] = "";
        $user['adresse'] = "";
    }


    /**
    * getAllUser
    *
    * @return $rows
    */
    public function getAllUser (){
        $con = $this->getDatadaseConnexion();
        $requete = 'SELECT * FROM utilisateur';
        $rows = $con->query($requete);
        return $rows;
        
    }


    /**
    * createUser
    *
    * @param  string $nom
    * @param  string $prenom
    * @param  int $age
    * @param  string $sexe
    * @param  mixed $adresse
    * 
    */
    public function createUser ($nom, $prenom, $age, $sexe, $adresse){
        try{
            $con = $this->getDatadaseConnexion();
            $sql = 'INSERT INTO utilisateur (nom, prenom, age, sexe, adresse)';
            $sql.= ' VALUES ( "'.$nom.'", "'.$prenom.'", "'.$age.'", "'.$sexe.'", "'.$adresse.'")';
            $con->exec($sql);
            
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

}
/**
 * class read
 */
class read extends create {


    /**
    * readUser
    *
    * @param  int $id
    * @return $row
    */
    public function readUser ($id){
        
        $con = $this->getDatadaseConnexion();
        $requete = "SELECT * FROM utilisateur where id =".$id;
        $stmt = $con->query($requete);
        $rows = $stmt->fetchAll();
        if (!empty($rows))
        return $rows[0];

     
    }



}

/**
 *class update
 */
class update extends create {

    /**
     * updateUser
    *
    * @param  int $id
    * @param  string $nom
    * @param  string $prenom
    * @param  int $age
    * @param  string $sexe
    * @param  mixed $adresse
    * @return void
    */
    public function updateUser ($id, $nom, $prenom, $age, $sexe, $adresse){
        try {
            $con = $this->getDatadaseConnexion();
            $requete = "UPDATE utilisateur SET
            nom = '$nom',
            prenom = '$prenom',
            age = '$age',
            sexe = '$sexe',
            adresse = '$adresse'
            WHERE id = '$id' ";
            $stmt = $con->query($requete);
            } 
        catch(PDOException $e) {
            echo $requete . "<br>" . $e->getMessage();
        }


        
    }

}


/**
 *class delete
 */
class delete extends create {

    /**
    * deleteUser
    *
    * @param int $id
    * 
    */
    public function deleteUser ($id){
        try {
            $con = $this->getDatadaseConnexion();
            $requete ="DELETE FROM utilisateur WHERE id ='$id' ";
            $stmt = $con->query($requete);
        } 
        catch (PDOException $e) {
            echo $requete . "<br>" . $e->getMessage();
         }
    
    }

    
}

?>