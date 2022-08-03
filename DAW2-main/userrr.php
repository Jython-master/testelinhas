

<?php
require_once "logininin.php";
?>

<?php require_once "header.php"; ?>

<?php
                            require_once "albumdb.php";
                             require_once "artistdb.php";
                            require_once "musicdb.php";
                                $c = new musicdb();
                                $b = new Artistdb();
                            $a = new albumdb();
                            if(isset($_GET['email']) && $_GET['email'] !== ""){
                                $namee = $b->selectArtist($_GET['email']);
                                $nameee = $c->selectMusic($_GET['email']);
                            $name = $a->selectAlbum($_GET['email']);
                            }
                            else{
                                $name = $a->selectAlbum();
                                $namee = $b->selectArtist();
                                $nameee = $c->selectMusic();
                            }
                                foreach($namee as $artist){?>
                                <div class="col-md-4" data-animate="fadeInUp">
                                <div class="icon"><img src="img/<?php echo $artist->getProfpic(); ?>" class="fa albumimg" alt="profile picture">
                                </div>
                                    <h3 class="heading"><a id="artist<?php echo $artist->getId();?>"><?php echo $artist->getName(); ?></a></h3>
                                <?php echo $artist->getDesc(); ?>
                            </div>
                               <?php }
                         
                            ?>
                            
                            <h1 class="lead">Albuns</h1>
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
                            <h1 class="lead">Songs</h1>
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
                              
            <script>
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
                <?php foreach($namee as $artist){ ?>
                $("#artist<?php echo $artist->getId(); ?>").click(function(){
                    window.location.href = "artistPage.php?id=<?php echo $artist->getId(); ?>";
                }
                );
                <?php } ?>
            });
            