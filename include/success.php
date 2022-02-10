<img src="<?php echo get_template_directory_uri(); ?>/img/success.png" alt="Wysłano wiadomość!" width="200" class="mb-5">
<h2>Wysłano wiadomość!</h2>
<p>Wkrótce się z Tobą skontaktujemy!</p>

<?php if (!is_home()) { ?>
    <a href="<?php echo home_url(); ?>" class="button button-prim mt-5">
        Wróć na stronę główną!
    </a>
<?php }
