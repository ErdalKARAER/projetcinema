<!DOCTYPE html>
<html lang="en">

<?php include "../include/navbar.php"; ?>
<?php include "../include/head.php"; ?>


<div class="bg-content">
  <div id="content">
    <div class="container">
      <div class="row">
        <article class="span8">
          <h3>Inscrivez-vous</h3>
          <div class="inner-1">
            <form action="../../traitement/utilisateur/traitement_inscri.php" method="post">

              <label>Nom :</label><input type="text" name="nom" placeholder="Ex : Jean"required/><br>
              <label>Prenom :</label><input type="text" name="prenom" placeholder="Ex : Pierre" required/><br>
              <label>Age :</label><input type="text" name="age" maxlength="2" placeholder="Ex : 23" required/><br>
              <label>Email :</label><input type="text" name="email" placeholder="Ex : JP@hotmail.fr" required/><br>
              <label>Téléphone :</label><input type="text" name="tel" maxlength="10" placeholder="Ex : 0652026123" required/><br>
                <br>
              <label>Mot de passe :</label><input type="password" name="pwd"required/><br>
                <label>Confirmer votre mot de passe :</label><input type="password" name="pwd2"required/><br>
                <br>

              <button type="submit" class="btn btn-outline-primary">Inscription</button>
              </form>
          </div>
        </article>
        <article class="span4">
          <h3>Ou rejoingnez-nous sur place !</h3>
          <div class="map">
            <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"> </iframe>
          </div>
          <address class="address-1">
          <strong>Grewis<br>
          8901 Marmora Road<br>
          Glasgow, D04 89GR.</strong>
          <div class="overflow"> <span>Freephone:</span>+1 800 559 6580<br>
            <span>Telephone:</span>+1 800 603 6035<br>
            <span>FAX:</span>+1 800 889 9898 <br>
            <span>E-mail:</span> <a href="#" class="mail-1">mail@demolink.org</a><br>
            <span>Skype:</span> <a href="#" class="mail-1">@skypename</a></div>
          </address>
        </article>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<footer>
  <div class="container clearfix">
    <ul class="list-social pull-right">
      <li><a class="icon-1" href="#"></a></li>
      <li><a class="icon-2" href="#"></a></li>
      <li><a class="icon-3" href="#"></a></li>
      <li><a class="icon-4" href="#"></a></li>
    </ul>
    <div class="privacy pull-left">Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a> </div>
  </div>
</footer>
<script src="js/bootstrap.js"></script>
</body>
</html>
