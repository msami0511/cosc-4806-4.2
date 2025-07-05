<?php

class Reminders extends Controller{
    public function index(){
      $R=$this->model('Reminder');
      $list_of_reminders=$R->get_all_reminders();
        $this->view('reminders/index',['reminders'=>$list_of_reminders]);
    }
}