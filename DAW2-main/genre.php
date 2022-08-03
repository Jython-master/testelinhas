
<!DOCTYPE html>
<?php
require_once "logininin.php";
require_once "genredb.php";
$aa = new genredb();
$aa = $aa->selectOne($_GET['id']);

?>

<?php require_once "header.php"; ?>

                            <h1 data-animate="fadeInDown">Search your favorite <?php echo $aa; ?> songs</h1>
                            <p  class="message" data-animate="fadeInUp">Countless <?php echo $aa; ?> songs are here, just type their name or the name of their album.</p>


                            <div class="col-md-6 col-md-offset-3" data-animate="fadeInUp">
                                <form action="" method="get" id="frm-landingPage1" class="form">
                                    <div class="input-group">
                                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                        
                       
<?php
                            require_once "albumdb.php";
                            require_once "musicdb.php";
                                $c = new musicdb();
                            $a = new albumdb();
                            if(isset($_GET['email']) && $_GET['email'] !== ""){
                                $nameee = $c->selectGenreMusic($_GET['id'], $_GET['email']);
                            $name = $a->selectGenreAlbum($_GET['id'],$_GET['email']);
                            }
                            else{
                                $name = $a->selectGenreAlbum($_GET['id']);
                                $nameee = $c->selectGenreMusic($_GET['id']);
                            }
                            ?>
                         <div class="row services">
                            <h1 class="lead"><?php echo $aa;?> Albuns</h1>
                            <?php foreach($name as $artist){?>
                                     <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><img src="img/<?php echo $artist->getPhoto(); ?>" class="fa albumimg" alt="profile picture">
                                </div>
                                <h3 class="heading"><a id="album<?php echo $artist->getId();?>"><?php echo $artist->getName(); ?></a></h3>
                                         Release Year: <?php echo $artist->getRelease(); ?>
                                        
                            </div>
                               <?php }
                            ?>
                             </div>
                        <div class="row services">
                            <h1 class="lead"><?php echo $aa;?> Songs</h1>
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
                            
            $().ready(function(){
                <?php foreach($nameee as $artist){ ?>
                $("#music<?php echo $artist->getId(); ?>").click(function(){
                    var myMusic = document.getElementById("<?php echo $artist->getArquivo(); ?>");
                    audio.myMusic();
                }
                );
                <?php } ?>
                                <?php foreach($name as $artist){ ?>
                $("#album<?php echo $artist->getId(); ?>").click(function(){
                    window.location.href = "albumPage.php?id=<?php echo $artist->getId(); ?>";
                }
                );
                <?php } ?>
            });
                            $().ready(function(){
                <?php foreach($nameee as $artist){ ?>
                $("#music<?php echo $artist->getId(); ?>").click(function(){
                    var myMusic = document.getElementById("<?php echo $artist->getArquivo(); ?>");
                    audio.myMusic();
                }
                );
                <?php } ?>
                                <?php foreach($name as $artist){ ?>
                $("#album<?php echo $artist->getId(); ?>").click(function(){
                    window.location.href = "albumPage.php?id=<?php echo $artist->getId(); ?>";
                }
                );
                <?php } ?>
            });
            
                            $().ready(function(){
                <?php foreach($nameee as $artist){ ?>
                $("#music<?php echo $artist->getId(); ?>").click(function(){
                    var myMusic = document.getElementById("<?php echo $artist->getArquivo(); ?>");
                    audio.myMusic();
                }
                );
                <?php } ?>
                                <?php foreach($name as $artist){ ?>
                $("#album<?php echo $artist->getId(); ?>").click(function(){
                    window.location.href = "albumPage.php?id=<?php echo $artist->getId(); ?>";
                }
                );
                <?php } ?>
            });
            
                            $().ready(function(){
                <?php foreach($nameee as $artist){ ?>
                $("#music<?php echo $artist->getId(); ?>").click(function(){
                    var myMusic = document.getElementById("<?php echo $artist->getArquivo(); ?>");
                    audio.myMusic();
                }
                );
                <?php } ?>
                                <?php foreach($name as $artist){ ?>
                $("#album<?php echo $artist->getId(); ?>").click(function(){
                    window.location.href = "albumPage.php?id=<?php echo $artist->getId(); ?>";
                }
                );
                <?php } ?>
            });
            
                            $().ready(function(){
                <?php foreach($nameee as $artist){ ?>
                $("#music<?php echo $artist->getId(); ?>").click(function(){
                    var myMusic = document.getElementById("<?php echo $artist->getArquivo(); ?>");
                    audio.myMusic();
                }
                );
                <?php } ?>
                                <?php foreach($name as $artist){ ?>
                $("#album<?php echo $artist->getId(); ?>").click(function(){
                    window.location.href = "albumPage.php?id=<?php echo $artist->getId(); ?>";
                }
                );
                <?php } ?>
            });
            
            