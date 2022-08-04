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
            }); <script>
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