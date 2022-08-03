<!DOCTYPE html>
<?php
require_once "logininininin.php";
require_once "artistdb.php";
$b = new Artistdb();
$b = $b->selectOne($_SESSION['id']);
foreach($b as $bbbbb){
?>
        <style>
            #intro .item {
        background: url('img/<?php echo $bbbbb->getCover(); ?>') top center no-repeat;
            }
<?php require_once "headerArtist.php"; ?>

                            <h1 data-animate="fadeInDown">Welcome <?php echo $bbbbb->getName(); ?></h1>
                            
<?php
                            require_once "albumdb.php";
                        
                            require_once "musicdb.php";
                                $c = new musicdb();
                                
                            $a = new albumdb();
                            if(isset($_GET['email']) && $_GET['email'] !== ""){
                            $name = $a->selectAlbumFromArtist($_SESSION['id'], $_GET['email']);
                                $nameee = $c->selectMusicFromArtist($_SESSION['id'], $_GET['email']);
                            }
                            else{
                                $name = $a->selectAlbumFromArtist($_SESSION['id']);
                                $nameee = $c->selectMusicFromArtist($_SESSION['id']);
                            }
                                foreach($name as $artist){?>
                                     <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><img src="img/<?php echo $artist->getPhoto(); ?>" class="fa albumimg" alt="profile picture">
                                </div>
                                <h3 class="heading"><a id="album<?php echo $artist->getId();?>"><?php echo $artist->getName(); ?></a></h3>
                                         Release Year: <?php echo $artist->getRelease(); ?>
                                         <form action="AddSonglalb.php" method="get"><input type="hidden" name="id" value="<?php echo $artist->getId(); ?>"><input type="submit" value="Add another song"></form>
                                         <form method="post" action="UpdateAlbum.php"><input type="hidden" name="id" value="<?php echo $artist->getId(); ?>"><input type="submit" value="Update"></form><form method="post" action="deleteAlbum.php"><input type="hidden" name="id" value="<?php echo $artist->getId(); ?>"><input type="submit" value="Delete"></form><br/>
                            </div>
                               <?php }
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
                        
                <?php } ?>
        
    <?php } ?>