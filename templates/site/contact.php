<?php
ob_start();
?>
<form id="contact" action="https://formsubmit.co/contact@aymelineyang.fr" method="POST">
    <fieldset>
        <legend>Demande de devis</legend>
        <p>
            <label for="firstName">Prénom*</label>
            <input type="text" name="firstName" id="firstName" required>
        </p>
        <p>
            <label for="lastName">Nom*</label>
            <input type="text" name="lastName" id="lastName" required>
        </p>
        <p>
            <label for="email">Email*</label>
            <input type="email" name="email" id="email" required>
        </p>
        <p>
            <label for="phone">Téléphone*</label>
            <input type="text" name="phone" id="phone" required>
        </p>
        <p>
            <label for="message">Message*</label>
            <textarea name="message" id="message" cols="30" rows="10" required></textarea>
        </p>
        <input type="submit" value="Envoyer">
    </fieldset>
</form>
<?php
$content = ob_get_clean();
require '../templates/base.php';
?>