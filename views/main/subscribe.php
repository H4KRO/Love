<div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
      <div class="mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text">S'inscrire</h2>
        </div>
        <div class="mdl-card__supporting-text">
          <form method="post" action="?controller=UserController&action=subscribe" id="subscribeForm">
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="mail" id="mail" name="mail"/>
              <label class="mdl-textfield__label" for="mail">Addresse email</label>
            </div>

              <div id="usernameWords"></div>

            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" id="word_input" type="word"/>
              <label class="mdl-textfield__label" for="word">Un mot qui te décrit</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="password" id="password" name="password"/>
              <label class="mdl-textfield__label" for="password">Mot de passe</label>
            </div>
            <input type="hidden" name="pseudo" value="" id="pseudo"/>
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
<script>

document.getElementById("submitButton").onclick = function(){
  document.getElementById("subscribeForm").submit();
}
document.getElementById("word_input").onkeypress = function(event){
               if (event.keyCode == 13 || event.which == 13){
                   if(document.getElementById("usernameWords").childNodes.length >= 3 || this.value <= 0){
                     return;
                   }

                   var span = document.createElement("span");
                   span.setAttribute("class", "mdl-chip mdl-chip--deletable");

                   var spanText = document.createElement("span");
                   spanText.className = "mdl-chip__text";
                   spanText.innerHTML = document.getElementById("word_input").value;

                   var button = document.createElement("button");
                   button.className = "mdl-chip__action";
                   button.type = "button";
                   button.onclick = function(){
                    this.parentElement.remove();
                   }

                   var i = document.createElement("i");
                   i.className = "material-icons";
                   i.innerHTML = "cancel";

                   button.appendChild(i);
                   span.appendChild(spanText);
                   span.appendChild(button);

                   document.getElementById("usernameWords").appendChild(span);

                   document.getElementById("pseudo").value="";
                   var wordDivs = document.getElementById("usernameWords").childNodes;
                   for(var i = 0; i < wordDivs.length; i++){
                     var word = wordDivs[i].childNodes[0].innerHTML;
                     word = word.toLowerCase();
                     word = word.charAt(0).toUpperCase() + word.slice(1);
                     document.getElementById("pseudo").value+= word;
                   }
               }
           };
</script>
<style>
#usernameWords {
  display: inline-block;
}

#usernameWords span {
  margin-left: 5px;
}
</style>
