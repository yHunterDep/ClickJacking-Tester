<title>ClickJackerTester</title>
<center>

<marquee><h1>ClickJacking Tester By HunterDep</h1></marquee>
<form action="" method="POST">
        <input type="text" placeholder="Alvo" name="alvo">
        <input type="submit" value="Atacar">
</form>

<?php
if(isset($_POST["alvo"])):
        echo "<iframe width=800 height=500 src=".$_POST["alvo"]."></iframe>";
endif;
?>
