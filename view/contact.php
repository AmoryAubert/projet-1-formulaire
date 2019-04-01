<h2>Contact</h2>
<form action="#" class="col-md-5">
  <fieldset>
    <legend>Formulaire de contact</legend>
    <div class="required">*champs requis</div>
      <fieldset>
        <legend>Vos informations personelles</legend>
        <div class="form-group row">
            <label for="prenom" class="col-sm-3 col-form-label">Prénom*</label>
            <input id="prenom" class="col-sm-6" type="text" name="prenom" placeholder="Votre prénom" required />
        </div>
        <div class="form-group row">
            <label for="nom" class="col-sm-3 col-form-label">Nom*</label>
            <input id="nom" class="col-sm-6" type="text" name="nom" placeholder="Votre nom" required />
        </div>
        <div class="form-group row">
            <label for="genre" class="col-sm-3 col-form-label">Genre*</label>
            <input id="genre" class="col-sm-1" type="radio" name="genre" value="h" checked/>Homme
            <input id="genre" class="col-sm-1" type="radio" name="genre" value="f"/>Femme
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email*</label>
            <input id="email" class="col-sm-6" type="email" name="email" placeholder="Votre email" required />
        </div>
        <div class="form-group row">
            <label for="pays" class="col-sm-3 col-form-label">Pays*</label>
            <select id="pays" class="col-sm-6" name="pays">
              <option value="bel">Belgique</option>
              <option value="can">Canada</option>
              <option value="fra">France</option>
              <option value="lux">Luxembourg</option>
              <option value="sui">Suisse</option>
            </select>
        </div>
      </fieldset> 
      <fieldset>
        <legend>Votre message</legend>
        <div class="form-group row">
            <label for="sujet" class="col-sm-12 col-form-label">Sujet</label>
            <div class="custom-control custom-radio col-sm-6">
                <input type="checkbox" id="customRadio1" name="sujet" value="prix" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Prix</label>
            </div>
            <div class="custom-control custom-radio col-sm-6">
                <input type="checkbox" id="customRadio2" name="sujet" value="performance" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">Performance</label>
            </div>
            <div class="custom-control custom-radio col-sm-6">
                <input type="checkbox" id="customRadio3" name="sujet" value="qualite" class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">Qualité</label>
            </div>
            <div class="custom-control custom-radio col-sm-6">
                <input type="checkbox" id="customRadio4" name="sujet" value="autre" class="custom-control-input">
                <label class="custom-control-label" for="customRadio4">Autre</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="message" class="col-sm-9 col-form-label">Message*</label>
            <textarea id="message" class="col-sm-9" type="text" name="message" rows="5" placeholder="Entrez votre message ici" required></textarea>
        </div>
      </fieldset>
   </fieldset>
   <input type="submit" value="Valider">
</form> 