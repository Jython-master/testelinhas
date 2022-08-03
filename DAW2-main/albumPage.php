
<!DOCTYPE html>
<?php
require_once "logininin.php";
require_once "genredb.php";
require_once "albumdb.php";
require_once "artistdb.php";
$aa = new albumdb();
$artis = new Artistdb();
$aa = $aa->selectOne($_GET['id']);
foreach($aa as $albummm){
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<?php require_once "header.php"; ?>


                            <h1 data-animate="fadeInDown"><?php echo $albummm->getName(); ?></h1>
                            <p  class="message" data-animate="fadeInUp">By <?php echo $artis->selectname($albummm->getArtist()); ?>| Release Year: <?php echo $albummm->getRelease(); ?>| Genre: <?php 
                         $ge = new genredb();
                         echo $ge->selectOne($albummm->getGenre()); ?></p>
                            <div class="col-md-6 col-md-offset-3" data-animate="fadeInUp">
                                <form action="" method="get" id="frm-landingPage1" class="form">
                                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                    <div class="input-group">
                                        
                        <h2 class="title" data-animate="fadeInDown"><?php echo $albummm->getName();?></h2>

<?php
                            require_once "musicdb.php";
                                $c = new musicdb();
                            $a = new albumdb();
                            if(isset($_GET['email']) && $_GET['email'] !== ""){
                                $nameee = $c->selectAlbumMusic($_GET['id'], $_GET['email']);
                            }
                            else{
                                $nameee = $c->selectAlbumMusic($_GET['id']);
                            }
                                 
                         
                            ?>
                        
                             <?php foreach($nameee as $artist){ ?>
                             <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><img src="img/<?php echo $artist->getPhoto(); ?>" class="fa albumimg" alt="profile picture">
                                </div>
                                <h3 class="heading"><?php echo $artist->getNome(); ?></h3>Album: <?php echo $artist->getAn(); ?>
                            <audio controls id="music<?php echo $artist->getId(); ?>">
                                <source src="music/<?php echo $artist->getArquivo(); ?>" type="audio/mpeg"> 
                            </audio>
                                 </div>
                               <?php }
                            ?>
                            <?php } ?>