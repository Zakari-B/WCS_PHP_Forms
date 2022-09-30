<form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name" placeholder="John Doe" required>
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email" placeholder="Johndoe1436@gmail.com" required>
    </div>
    <div>
        <label for="telephone">Téléphone :</label>
        <input type="tel" id="telephone" name="user_phone" pattern="[0-9]{10}" placeholder="0238145749" required>
    </div>
    <div>
        <select name="user_subject" id="sujet" required>Sujet :
            <option value="contact">Contact</option>
            <option value="suggestion">Suggestion</option>
            <option value="bug">Bug</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message" placeholder="Hello, I'm contacting you about ..." required></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>