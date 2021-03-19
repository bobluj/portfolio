<?php ob_start();
include('../utile/format.php'); ?>

<?php if(isset($_POST['valider'])){
    $to="julesjudoka@gmail.com";
    $from=$_POST['mail'];
    $object=$_POST['objet'];
    $message = $_POST['message'];
    mail($to,$object,$message,$from);
    echo'<div class="alert alert-success" role="alert">Message envoyé</div>';
}

?>
<h1>Page de contact</h1>
<div class="container text-center">
    <?= formatTitle("Mes informations de contact"); ?>
    <table class="table table-borderless">
        <thead>
            <tr>
                <td><img src="img/tel.png" width= "100px" alt=""></td>
                <td><img src="img/yt.png" width= "100px" alt=""></td>
                <td><img src="img/fb.png" width= "100px"alt=""></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>06 00 00 00 00</td>
                <td><a href="">WebDev Channel</a></td>
                <td><a href="">@Brian</a></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="container text-center">
    <h2 class="m-5 perso_colorBlueLight">Formulaire de contact</h2>
    <div class="row justify-content-center">
        <form method ="post" action="" class="col md-6 mb-5" >
            <div class="form-group mb-3">
                <label for="exampleInputEmail1"  class="form-label">Adresse mail</label>
                <input type="email" placeholder ="Adresse mail" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group mb-3">
                <label for="sel1">Objet</label>
                <select name="objet" class="form-control" id="sel1">
                    <option>Prise de rendez-vous</option>
                    <option>Proposition</option>
                    <option>Autre</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">Message</label>
                <textarea name="message"type="textarea" placeholder ="Message" rows="3" class="form-control" id="exampleInputPassword1"></textarea>
            </div>
                <button name="valider"type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
</div>

<?php 
$content = ob_get_clean();
require "commons/template.php";
?>