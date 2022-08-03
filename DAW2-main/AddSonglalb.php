<!DOCTYPE html>
<?php
require_once "logininininin.php";
require_once "genredb.php";
?>

                            <?php
                            $a = new genredb();
                            $aa = $a->select();
                            foreach($aa as $a){ ?>
                            <option value="<?php echo $a->getId(); ?>"> <?php echo $a->getName(); ?> </option>
                            <?php }
                            ?>
                        