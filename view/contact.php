<style>
h2,legend,fieldset{
  text-align: center;
}
fieldset>fieldset, .required{
  text-align: left;
}
.required{
  color: #a00;
}
form{
  margin: auto auto 15px;
  border: 3px solid #15c5bd;
  border-radius: 5px;
  background-color: #f8f8f8;
}
#firstfs, .required{
  padding-left: 30px;
}
textarea{
  display: inline-block;
  margin: 10px auto;
}
fieldset>#sujet>div{
  padding: 0 80px;
}
#secondfs label{
  text-align: center;
}

</style>
<h2>Contact</h2>
<form action="#" method="post" class="col-md-5">
  <fieldset>
    <legend>Formulaire de contact</legend>
    <div class="required">*champs requis</div>
    <fieldset id="firstfs">
      <legend>Vos informations personelles</legend>
      <input id="firstname" class="col-sm-6 blindtest" type="text" name="firstname" placeholder="Votre prénom" minlength="3" maxlength="30" pattern="[a-zA-Z\-âêîôûäëïöüàèéòù]{3,30}"/>
      <div class="form-group row">
          <label for="prenom" class="col-sm-3 col-form-label">Prénom*</label>
          <input id="prenom" class="col-sm-6" type="text" name="prenom" placeholder="Votre prénom" minlength="3" maxlength="30" pattern="[a-zA-Z\-âêîôûäëïöüàèéòù]{3,30}" required />
      </div>
      <div class="form-group row">
          <label for="nom" class="col-sm-3 col-form-label">Nom*</label>
          <input id="nom" class="col-sm-6" type="text" name="nom" placeholder="Votre nom" minlength="3" maxlength="30" pattern="[a-zA-Z\sâêîôûäëïöüàèéòù]{3,30}" required />
      </div>
      <div class="form-group row">
          <label for="genre" class="col-sm-3 col-form-label">Genre*</label>
          <input id="genre" class="col-sm-1" type="radio" name="genre" value="h" checked/>Homme
          <input id="genre" class="col-sm-1" type="radio" name="genre" value="f"/>Femme
      </div>
      <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">Email*</label>
          <input id="email" class="col-sm-6" type="email" name="email" placeholder="Votre email" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
      </div>
      <div class="form-group row">
          <label for="pays" class="col-sm-3 col-form-label">Pays*</label>
          <select id="pays" class="col-sm-6" name="pays">
            <option value="belgique">Belgique</option>
            <option value="canada">Canada</option>
            <option value="france">France</option>
            <option value="luxembourg">Luxembourg</option>
            <option value="suisse">Suisse</option>
          </select>
      </div>
    </fieldset> 
    <fieldset id="secondfs">
      <legend>Votre message</legend>
      <div class="form-group row" id="sujet">
          <label for="sujet[]" class="col-sm-12 col-form-label">Sujet</label>
          <div class="custom-control custom-radio col-sm-6">
              <input type="checkbox" id="customRadio1" name="sujet[]" value="prix" class="custom-control-input">
              <label class="custom-control-label" for="customRadio1">Prix</label>
          </div>
          <div class="custom-control custom-radio col-sm-6">
              <input type="checkbox" id="customRadio2" name="sujet[]" value="performance" class="custom-control-input">
              <label class="custom-control-label" for="customRadio2">Performance</label>
          </div>
          <div class="custom-control custom-radio col-sm-6">
              <input type="checkbox" id="customRadio3" name="sujet[]" value="qualité" class="custom-control-input">
              <label class="custom-control-label" for="customRadio3">Qualité</label>
          </div>
          <div class="custom-control custom-radio col-sm-6">
              <input type="checkbox" id="customRadio4" name="sujet[]" value="autre" class="custom-control-input">
              <label class="custom-control-label" for="customRadio4">Autre</label>
          </div>
      </div>
      <div class="form-group row">
          <label for="message" class="col-sm-12 col-form-label">Message*</label>
          <textarea id="message" class="col-sm-9" type="text" name="message" rows="5" placeholder="Entrez votre message ici" required></textarea>
      </div>
    </fieldset>
  <input type="submit" value="Valider">
  </fieldset>
</form>