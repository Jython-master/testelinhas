        
                                <?php
                                    require_once "genredb.php";
                                $genrelist = new genredb();
                                $genrelist = $genrelist->select();
                                foreach($genrelist as $a){ ?>
                                    <li><a class="ling" id="genre<?php echo $a->getId()?>"><?php echo $a->getName(); ?></a></li>
                              <?php  }
                                ?>
                               
                <!--/.nav-collapse -->
               
                                foreach($genrelist as $a){ ?>
                    $("#genre<?php echo $a->getId(); ?>").click(function(){
                        window.location.href = "genre.php?id=<?php echo $a->getId(); ?>";
                    });
                    <?php  }
                                ?>
                });
                