<form class="contact-form" method="POST" action="/main/send-message">
    <?php 
        if (isset($_SESSION['errors'])) { 
            debug($_SESSION['errors']);
        }
        if (isset($_SESSION['success'])) { 
            debug($_SESSION['success']);
        }
    ?>
    <div class="contact-form__input-group">
        <label for="name">Your Name</label>
        <input id="name" type="text" name="name" class="contact-form__input" />
    </div>
    <div class="contact-form__input-group">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" class="contact-form__input" />
    </div>
    <div class="contact-form__input-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" class="contact-form__textarea"></textarea>
    </div>
    <button>Send Message</button>
</form>