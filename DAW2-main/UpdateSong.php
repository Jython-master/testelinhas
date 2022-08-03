<!DOCTYPE html>
<?php
require_once "logininininin.php";
require_once "genredb.php";
require_once "musicdb.php";
$a = new musicdb();
$a = $a->selectOne($_POST['id']);
$genero = new genredb();
foreach($a as $song){
?>

                                <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                                <input type="hidden" name="album" value="<?php echo $song->getAlbum(); ?>">
                                <div class="form-group mb-3">
                                    <input id="inputEmail" type="text" placeholder="Song Title" required="" autofocus="" name="email" class="form-control rounded-pill border-0 shadow-sm px-4" value="<?php echo $song->getNome(); ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md">
                                        <option value="<?php echo $song->getGenero(); ?>"> <?php echo $genero->selectOne($song->getGenero()); ?></option>
                            <?php
                            $a = new genredb();
                            $aa = $a->select();
                            foreach($aa as $a){ ?>
                            <option value="<?php echo $a->getId(); ?>"> <?php echo $a->getName(); ?> </option>
                            <?php }
                            ?>
                        

<?php } ?>