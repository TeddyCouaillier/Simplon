<div class="modal fade " id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img src="img/scm_logo_md.png" class="mx-auto modal_logo">
      </div>
      <div class="modal-body col-10 offset-1">

        <form>
          <div class="form-group">
            <input type="text" class="form-control mx-auto input_form" id="contact_username" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control mx-auto input_form" id="contact_password" placeholder="********">
          </div>
          <div class="form-check text-center">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Se souvenir de moi
            </label>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-block btn-danger mx-auto">Connexion</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade " id="add_content" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-center">
      <div class="modal-header">
        <img src="./img/scm_logo_md.png" class="mx-auto modal_logo">
      </div>
      <div class="modal-body col-10 offset-1">
        <form action="validate.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control mx-auto input_form" maxlength="10" name="p_name" id="contact_username"
              placeholder="Exemple : Promo 1.0" required>
          </div>
          <div class="form-group">
            <button type="submit" name="add_promo" class="btn btn-block btn-danger mx-auto">AJOUTER PROMO</button>
          </div>
        </form>
      </div>
      <hr class="mx-5">
      <div class="modal-body col-10 offset-1">
        <form action="validate.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control mx-auto input_form" id="contact_username" name="s_lastname" placeholder="Nom" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control mx-auto input_form" id="contact_username" name="s_name" placeholder="Prénom" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1"></label>
            <select class="form-control" name="s_promo" placeholder="Promo n° ..." required>
              <?php
                    if (isset($promos))
                    {
                      $promo_list = json_decode($promos);

                      for ($i = 1; $i < sizeof($promo_list); $i++) {
                        echo "<option value=".$promo_list[$i]->id.">".$promo_list[$i]->label."</option>";
                      }
                    }
                  ?>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" name="add_user" class="btn btn-block btn-danger mx-auto">AJOUTER SIMPLONIEN</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>