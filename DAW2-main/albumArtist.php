
<!DOCTYPE html>
<?php
require_once "logininin.php";
require_once "albumdb.php";
                             require_once "artistdb.php";
                            require_once "musicdb.php";
                                $c = new musicdb();
                            $a = new albumdb();
                            if(isset($_GET['email']) && $_GET['email'] !== ""){
                                $nameee = $c->selectAlbumMusic($_GET['id'], $_GET['email']);
                            }
                            else{
                                $nameee = $c->selectAlbumtMusic($_GET['id']);
                            }
                         foreach($nameee as $artist){
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<?php require_once "header.php"; ?>

                             <?php foreach($nameee as $artist){ ?>
                             <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><img src="img/<?php echo $artist->getPhoto(); ?>" class="fa albumimg" alt="profile picture">
                                </div>
                                <h3 class="heading"><?php echo $artist->getNome(); ?></h3>Album: <?php echo $artist->getAn(); ?>
                            <audio controls id="music<?php echo $artist->getId(); ?>">
                                <source src="music/<?php echo $artist->getArquivo(); ?>" type="audio/mpeg"> 
                            x
                               <?php }
                            ?>