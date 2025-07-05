<?php
class Reminders extends Controller {

    public function index() {
        if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 1) {
            header('Location: /login');
            exit;
        }

        $reminderModel = $this->model('Reminder');
        $reminders = $reminderModel->get_all_reminders();
        $this->view('reminders/index', ['reminders' => $reminders]);
    }
  public function create() {
      if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 1) {
          header('Location: /login');
          exit;
      }

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $subject = trim($_POST['subject']);
          $userId = $_SESSION['user_id'];

          $reminderModel = $this->model('Reminder');
          $reminderModel->create_reminder($userId, $subject);


      } else {
          $this->view('reminders/create');
      }
  }


  