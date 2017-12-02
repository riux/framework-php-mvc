<?php
class DemoController extends Config{
    public $layout = "layouts/demoLayout";

    public function index(){

        $conn = DB::connect($this->db['mysql']);
        $sql = "SELECT * FROM test";
        $query = $conn->prepare($sql);
        $query->execute();
        $model = array();

        while($filas = $query->fetch()){
            $model[] = $filas;
        }

        /*MAILER*/
        try {
            $mailer = new MAILER();
            $mailer->config($this->mailer['gmail']);
            $mailer->Subject = "Hola Mundo mundial";
            $mailer->addAddress("riux.mend@gmail.com", "Riuxxxxx");
            $mailer->msgHTML("Hola amigo ");
            $mailer->Send();
            $msg = "Mensaje enviado con éxito :)";
        } catch (Exception $e) {
            $msg = "Ocurrio un error :(   :";
            $msg .= "Mailer Error: ". $mailer->ErrorInfo;
        }


        return ROUTER::show_view('demo/index', array('model'=>$model,
                                  'mensaje'=>$msg));
    }
    public function login(){
        return ROUTER::show_view('demo/login');
    }
}