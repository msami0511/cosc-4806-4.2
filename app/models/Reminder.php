<?php

class Reminder {

    public function __construct() {
        
    }

    public function get_all_reminders () {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM reminders;");
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function update_reminder ($remainder_id) {
    $db = db_connect();
}
?>