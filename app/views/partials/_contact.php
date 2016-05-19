<div class="contact_container">
    <h2>Me contacter</h2>

    <form id="contact"> <!-- Processed with jQuery's AJAX method -->

        <div class="name">
            <label for="name">Nom</label>
            <span class="error_field name"></span>
            <input class="champs" type="text" id ="name" name="name" placeholder="Nom"></input>
        </div>

        <div class="mail">
            <label for="email">Email</label >
            <span class="error_field email"></span>
            <input class="champs" type="email" id="email" name="email" placeholder="Adresse@mail.com"></input>
        </div>

        <div class="subject">
            <label for="subject">Sujet</label >
            <span class="error_field subject"></span>
            <input class="champs" type="text" id="subject" name="subject" placeholder="Sujet"></input><br>
        </div class="message">

        <div>
            <label for="message">Message</label >
            <span class="error_field message"></span>
            <textarea class="champs" id="message" name="message" placeholder="Votre message"></textarea>
        </div>

        <input class="send" type="submit" value="Envoyer !"></input>  

    </form>
</div>