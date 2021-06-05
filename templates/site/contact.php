<?php
ob_start();
?>
<form id="contact" action="https://formsubmit.co/contact@aymelineyang.fr" method="POST">
    <fieldset>
        <legend>Demande de devis</legend>
        <?= $form->input('Prénom', 'text', 'firstName') ?>
        <?= $form->input('Nom', 'text', 'lastName') ?>
        <?= $form->input('Email', 'email', 'email') ?>
        <?= $form->input('Téléphone', 'text', 'phone') ?>
        <?= $form->textArea('Message', 'message') ?>
        <?= $form->submit() ?>
    </fieldset>
</form>
<?php
$content = ob_get_clean();
require '../templates/base.php';
?>