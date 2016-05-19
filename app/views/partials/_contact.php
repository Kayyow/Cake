<div class="contact_container" id="contact">
    <h2>Me contacter</h2>

    <form action="/?page=contact-email" method="POST">

        <span class="name">
            <label for="name">Nom</label>
            <span class="error"><?= isset($errors['name']) ? $errors['name'] : null ?></span>
            <input class="champs" type="text" id ="name" name="name" placeholder="Nom"></input>
        </span>

        <span class="mail">
            <label for="email">Email</label >
            <span class="error"><?= isset($errors['email']) ? $errors['email'] : null ?></span>
            <input class="champs" type="email" id="email" name="email" placeholder="Adresse@mail.com"></input>               
        </span>

        <span class="subject">
            <label for="subject">Sujet</label >
            <span class="error"><?= isset($errors['subject']) ? $errors['subject'] : null ?></span>
            <input class="champs" type="text" id="subject" name="subject" placeholder="Sujet"></input><br>
        </span class="message">

        <span>
            <label for="message">Message</label >
            <span class="error"><?= isset($errors['message']) ? $errors['message'] : null ?></span>
            <textarea class="champs" id="message" name="message" placeholder="Votre message"></textarea>
        </span>

        <input class="send" type="submit" value="Envoyer !"></input>  

    </form>                   
</div>