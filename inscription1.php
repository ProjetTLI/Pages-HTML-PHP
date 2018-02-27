<?php
if(isset($_POST['submit']))
{
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $pass_confirm = $_POST['pass_confirm'];
    $email = $_POST['email'];
 
    if($login && $pass && $pass_confirm && $email)
    {
        if($passe == $passe2)
        {
            try {
                try {
                $dbh = new PDO('mysql:host=localhost;dbname=user', 'root', '');
                array(PDO::ATTR_PERSISTENT => true);
                session_start();
    		if (!isset($_SESSION['login'])) {
    			header ('Location: mapage.tpl');
    		exit();
                }
                catch (Exception $e)
                {
                die("Impossible de se connecter: " . $e->getMessage());
                }
 
        }
        else print 'Les mots de passe ne sont pas identiques.';
    }
    else print 'Merci de remplir tous les champs';
}
 
?>
