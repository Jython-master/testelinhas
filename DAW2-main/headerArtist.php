        <!-- *** NAVBAR ***
        _________________________________________________________ -->

        
                $().ready(function(){
                    $("#logout").click(function(){
                        window.location.href = "logoutArtist.php";
                    });
                    $("#albuns").click(function(){
                        window.location.href = "AddAlbum.php";
                    });
                    $("#settingsss").click(function(){
                        window.location.href = "settingsArtist.php";
                    });
                    $("#mainnnn").click(function(){
                        window.location.href = "artistMain.php";
                    });
                });
                