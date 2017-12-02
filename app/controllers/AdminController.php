<?php
class Admincontroller extends Config {
    public function admin(){
        return ROUTER::show_view("admin/admin");
    }
}