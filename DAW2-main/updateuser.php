<!DOCTYPE html>
<?php
require_once "logininin.php";
?>

<!-- Navbar-->
        <?php
        require_once "userdb.php";
        $class = new userdb();
        $class = $class->selectOne($_SESSION['id']);
        foreach($class as $classs){
        ?>
                        <input id="firstName" type="text" name="firstname" placeholder="Name" class="form-control bg-white border-left-0 border-md" value="<?php echo $classs->getName(); ?>" required="true">
                    
                        </div>
                        <input type="date" id="lastName" type="text" name="lastname" placeholder="Date Of Birth" class="form-control bg-white border-left-0 border-md" value="<?php echo $classs->getBd(); ?>" required="true">
                    
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" value="<?php echo $classs->getEmail(); ?>" required="true">
                   
                        <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" value="<?php echo $classs->getPhone(); ?>" class="form-control bg-white border-md border-left-0 pl-3" required="true">
                   
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" value="<?php echo $classs->getPass(); ?>" required="true">
                        <input id="passwordConfirmation" type="password" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md" value="<?php echo $classs->getPass() ?>" required="true">
                
        <?php } ?>
    