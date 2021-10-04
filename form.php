<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_lastname">
    <div>
      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="user_firstname">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="phone">Téléphone :</label>
        <input  type="phone"  id="phone"  name="user_phone">
    </div>
    <div>
      <label  for="sujet">Vous nous contactez pour :</label>
        <select name="sujet" id="sujet">
            <option value="">--Choisissez--</option>
            <option value="covid">Supprimer l'épisode Covid de la mémoire de la population mondiale</option>
            <option value="job">Vous trouver le job de vos rêves</option>
            <option value="idée">J'ai plus d'idée laissez-moi</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
