<!DOCTYPE html>
<?php
require_once "logininin.php";
require_once "artistdb.php";
$b = new Artistdb();
$b = $b->selectOne($_GET['id']);
foreach($b as $bbbbb){
?>

            #intro .item {
        background: url('img/<?php echo $bbbbb->getCover(); ?>') top center no-repeat;
          

<?php require_once "header.php"; ?>

                            <h1 data-animate="fadeInDown">Search your Favorite Albuns and Songs by <?php echo $bbbbb->getName(); ?></h1>
                            <p  class="message" data-animate="fadeInUp">Just type the name of the album or song you want to listen to</p>


                            <div class="col-md-6 col-md-offset-3" data-animate="fadeInUp">
                                <form action="" method="get" id="frm-landingPage1" class="form">
                                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                    

                        <h2 class="title" data-animate="fadeInDown"> <?php echo $bbbbb->getName(); ?></h2>
<?php
                            require_once "albumdb.php";
                        
                            require_once "musicdb.php";
                                $c = new musicdb();
                                
                            $a = new albumdb();
                            if(isset($_GET['email']) && $_GET['email'] !== ""){
                            $name = $a->selectAlbumFromArtist($_GET['id'], $_GET['email']);
                                $nameee = $c->selectMusicFromArtist($_GET['id'], $_GET['email']);
                            }
                            else{
                                $name = $a->selectAlbumFromArtist($_GET['id']);
                                $nameee = $c->selectMusicFromArtist($_GET['id']);
                            } ?>
                              <div class="row services">
                            <h1 class="lead">Albuns by <?php echo $bbbbb->getName(); ?></h1>
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
                            <h1 class="lead">Songs by <?php echo $bbbbb->getName(); ?> </h1>
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
                            ?>
                $("#album<?php echo $artist->getId(); ?>").click(function(){
                    window.location.href = "albumPage.php?id=<?php echo $artist->getId(); ?>";
                }
                );
                <?php } ?>
            });
        
    <?php } ?>