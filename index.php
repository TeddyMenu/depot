<?php
    include('head.php');
    ?>
        <ul><!--Pour les listes-->
            <li><a href="services.pdf">Services</a></li>
            <li><a href="tarif.php">Tarifs</a></li>
            <li><a href="mailto:votreadresse@mail.fr" class="btn btn-primary">Contact</a></li>
          </ul>

          <form action="" method="POST" class="form-example">
          <div class="form-example">
          <label for="name">Entrez votre prénom : </label>
          <input type="text" name="name" id="name" required>
          </form>
          <?php
            echo 'Bonjour ' . htmlspecialchars($_POST["name"]) . ' !';
            ?>
          <p><i>Vous souhaitez migrer vers les solutions Cloud ?</i></br>3iSystem est là pour booster l'industrialisation de vos process.</p>
          
          <h2>Cloud</h2>
          
          <p>Sécurisez le partrimoine numérique de votre entreprise en stockant vos données sur nos infrastructures</br>sécurisées et offrez-vous un accès sécurisé en tout lieu.</p>
          
          <h2>Cybersécurité/sauvegarde</h2>
          
          <p>Laissez notre équipe d'experts en solutions de cyber sécurité gérer vos services de sécurité.</p>
          
          <h2>Maintenance/Hotline</h2>
          
          <p>Depuis plus de 15 ans, des experts répondent à vos questions pour résoudre vos problèmes.</p>

    </body>
 </html>