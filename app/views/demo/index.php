<?php foreach ($model as  $value)
    print $value['id']."  ".$value['test']."<br>";
 ?>

 <?=$mensaje ?>
 <br>
 <a href="<?=ROUTER::create_action_url('demo/login', array('id'=>1, 'id2'=>2)); ?>">Login</a>
<br>
<?php ROUTER::load_view("demo/login") ?>

<?=HTML::br(4) ?>
<?=HTML::a("demo/login", "Ir al login", "title='Holaaaa'"); ?>
