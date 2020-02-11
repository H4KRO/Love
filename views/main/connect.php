<div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
      <div class="mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text">Se connecter</h2>
        </div>
        <div class="mdl-card__supporting-text">
          <form method="post" action="?controller=UserController&action=connect" id="connectForm">
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="mail" id="mail" name="mail"/>
              <label class="mdl-textfield__label" for="mail">Addresse email</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="password" id="password" name="password"/>
              <label class="mdl-textfield__label" for="password">Mot de passe</label>
            </div>
          </form>
        </div>
        <div class="mdl-card__actions mdl-card--border">
          <a id="submitButton" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
            Trouver l'amour !
          </a>
        </div>
      </div>
    <div class="mdl-layout-spacer"></div>
</div>
