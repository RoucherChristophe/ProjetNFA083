
<?php
    
  $requete = $db->query("SELECT login, nom FROM user where login != 'philippe'");
?>
   
<footer class="footer">
  <div id = "credits">
    <p>Conception:
    <?php
      while($resultat = $requete->fetch())
      { 
        echo $resultat['login']. " " .$resultat['nom']. " ";     
      }
    ?>
    </p>
      <a href="mentions_legales.php">Mention Légales</a>
  </div>
  <div id ="footer_description">
    <p id="descrisption_footer"> &copy; 2019. Project CNAM NFA083</p>
  </div>
</footer>

