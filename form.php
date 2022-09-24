<form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name">
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email">
    </div>
    <div>
        <label for="telephone">Téléphone :</label>
        <input id="telephone" name="user_phone">
    </div>
    <div>
        <select name="user_subject" id="sujet">Sujet :
            <option value="contact">Contact</option>
            <option value="suggestion">Suggestion</option>
            <option value="bug">Bug</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>