<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>

    <div>
      <label  for="lastname">Prenom:</label>
      <input  type="text"  id="lastname"  name="toto">
    </div>
    <div>

      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="phone">Tel :</label>
        <input  type="tel"  id="phone"  name="user_phone">
    </div>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    
    <label for="animal">Choisir votre animal:</label>
<select id="animal" name="animal">
  <option value="chien">chien</option>
  <option value="chat">chat</option>
  <option value="lapin">lapin</option>
  <option value="hamster">hamster</option>
</select>






    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>