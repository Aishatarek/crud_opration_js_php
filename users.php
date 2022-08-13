<?php
class Users
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    public function getData()
    {
        $result = $this->db->con->query("SELECT * FROM users");
        return $result;
    }
    public function deleteUser($item_id = null)
    {
        if ($item_id != null) {
            $result = $this->db->con->query("DELETE FROM users WHERE id={$item_id}");
            return $result;
        }
    }
    public function addUser($name, $email, $designation)
    {
        if (isset($name) && isset($email) && isset($designation)) {
            $this->db->con->query("INSERT INTO users(name, email, designation) VALUES('$name', '$email', '$designation')");
        }
    }
    public function getUser($user_id)
    {
        if ($user_id != null) {
            $result = $this->db->con->query("SELECT * FROM users WHERE id={$user_id}");
            return $result;
        }
    }
    public function updateUser($item_id = null, $name, $email, $designation)
    {
        if ($item_id != null) {
            $result = $this->db->con->query("UPDATE users SET name='{$name}',email='{$email}', designation='{$designation}' WHERE id={$item_id}");
            return $result;
        }
    }
}
