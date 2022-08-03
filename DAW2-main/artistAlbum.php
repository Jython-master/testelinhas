
<!DOCTYPE html>
<?php
require_once "logininininin.php";
require_once "genredb.php";
require_once "albumdb.php";
require_once "artistdb.php";
$aa = new albumdb();
$artis = new Artistdb();
$aa = $aa->selectOne($_GET['id']);
foreach($aa as $albummm){
?>

<?php require_once "headerArtist.php"; ?>

                            <h1 data-animate="fadeInDown"><?php echo $albummm->getName(); ?></h1>
                             <p class="lead"><a href="UpdateAlbum.php?id=<?php echo $albummm->getId(); ?>">Update</a> <?php echo $albummm->getName(); ?></p>
                            <p  class="message" data-animate="fadeInUp">By <?php echo $artis->selectname($albummm->getArtist()); ?>| Release Year: <?php echo $albummm->getRelease(); ?>| Genre: <?php 
                         $ge = new genredb();
                         echo $ge->selectOne($albummm->getGenre()); ?></p>
                            <div class="col-md-6 col-md-offset-3" data-animate="fadeInUp">
                                <form action="" method="get" id="frm-landingPage1" class="form">
                                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                    
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
                                         <form method="post" action="UpdateSong.php"><input type="hidden" name="id" value="<?php echo $artist->getId(); ?>"><input type="submit" value="Update"></form><form method="post" action="deleteSong.php"><input type="hidden" name="id" value="<?php echo $artist->getId(); ?>"><input type="submit" value="Delete"></form><br/>
                                 <audio controls id="music<?php echo $artist->getId(); ?>">
                                <source src="music/<?php echo $artist->getArquivo(); ?>" type="audio/mpeg"> 
                            </audio>
                            </div>
                               <?php }
                            ?>
                                
            <script>
            
                <?php } ?>
            });

<?php } ?>