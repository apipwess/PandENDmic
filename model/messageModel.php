<?php
class messageModel{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function getAllStory()
    {
        $link = $this->db->openDbConnection();

        $result = $link->query('SELECT story_id, from_who, substring(messages, 1, 123) as messages FROM story ORDER BY story_id DESC');

        $story = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $story[] = $row;
        }
        $this->db->closeDbConnection($link);

        
		return $story;
    }

    public function getstoryById($id)
    {
        $link = $this->db->openDbConnection();

        $query = 'SELECT * FROM story WHERE  story_id=:id';
        $result = $link->prepare($query);
        $result->bindValue(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $story = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $story[] = $row;
        }
        $this->db->closeDbConnection($link);

		return $story;
    }
	
    public function insert()
    {
        $link = $this->db->openDbConnection();

        $query = 'INSERT INTO story (from_who, messages) VALUES (:from_who, :messages)';
        $statement = $link->prepare($query);
        $statement->bindValue(':from_who', $_POST['from_who'], PDO::PARAM_STR);
        $statement->bindValue(':messages', $_POST['messages'], PDO::PARAM_STR);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function delete($id)
    {
        $link = $this->db->openDbConnection();

        $query = "DELETE FROM story WHERE story_id = :id";
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function check()
    {
        $link = $this->db->openDbConnection();
        $query = "SELECT user_id, password FROM login_info WHERE userid=':user_id' AND password=':password'";
        $statement = $link->prepare($query);
        $statement->bindValue(':user_id', $_POST['user_id'], PDO::PARAM_INT);
        $statement->bindValue(':password', $_POST['password'], PDO::PARAM_INT);
        $statement->execute();
        $info = array();
        $count = 0;
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $info[] = $row;
        }
        foreach ($info as $row) {
            if ($row['user_id'] == $userid) {
                    if ($row['password'] == $password) {
                        $count = 1;
                        break;
                    }
                    else {
                        $count = 0;
                        break;
                    }
                }
                else {
                    $count = 0;
                }
        }
        $this->db->closeDbConnection($link);
        return $count;
    }
}