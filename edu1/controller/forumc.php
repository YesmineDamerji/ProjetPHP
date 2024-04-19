<?php
  require_once (__DIR__."/../config.php");
    function showForum($id)
    {
        $sql = "SELECT * from projetphp.forums where idF = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
class ForumController {
    public static function showforum() {
        $db = config::getConnexion();
        $sql = "SELECT * from projetphp.forums";
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $result = $query->fetchAll();
        }
        catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }

        return $result;
    }

    public function deleteForum($id)
    {
        $sql = "DELETE FROM projetphp.forums WHERE idF= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addForum($forum)
    {
        $sql = "INSERT INTO projetphp.forums (idF, username, content, title, created_at,updated_at)
        VALUES (:idF, :username, :content, :title, :created_at, :updated_at)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'idF' => $forum->getidF(),
                'username' => $forum->getusername(),
                'content' => $forum->getcontent(),
                'title' => $forum->gettitle(),
                'created_at' => $forum->getcreated_at(),
                'updated_at' => $forum->getupdated_at()

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateForum($forum, $id)
    {
        $sql = "UPDATE projetphp.forums
                SET 
                    username = :username, 
                    content = :content, 
                    title = :title, 
                    created_at = :created_at,
                    updated_at = :updated_at
                WHERE idF = :id";
    
        $db = config::getConnexion();
    
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id'=>$id,
                'username' => $forum->getusername(),
                'content' => $forum->getcontent(),
                'title' => $forum->gettitle(),
                'created_at' => $forum->getcreated_at(),
                'updated_at' => $forum->getupdated_at()
            ]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>