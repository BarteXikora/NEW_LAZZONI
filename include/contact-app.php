<section class="contact-app-container mb-md-4 mr-md-5 pt-4 d-none">
    <div class="contact-app-form-container">
        <h2 class="mb-4 mt-md-4">Skontaktuj się z nami:</h2>

        <form class="form" id="contact-app-form" data-link="<?php echo admin_url('admin-ajax.php'); ?>">
            <div class="contact-app-set-columns">
                <div class="d-block">
                    <label for="app-phone" class="d-none d-md-inline">Numer telefonu:</label>
                    <input type="tel" id="app-phone" class="form-input" placeholder="Numer telefonu">
            
                    <label for="app-mail" class="d-none d-md-inline">Adres e&mdash;mail:</label>
                    <input type="mail" id="app-mail" class="form-input" placeholder="Adres e&mdash;mail">
                </div>
        
                <div class="d-block">
                    <label for="app-message" class="d-none d-md-inline">Wiadomość:</label>
                    <textarea id="app-message" class="form-input" placeholder="Wiadomość"></textarea>
                </div>
            </div>
    
            <span>Wybierz dział:</span>
            <div class="mt-2">
                <span class="contact-app-topic-button selected">wiertarki</span>
                <span class="contact-app-topic-button">głowice</span>
                <span class="contact-app-topic-button">części</span>
                <span class="contact-app-topic-button">serwis</span>
            </div>
    
            <div class="text-center  mt-4 mt-mb-5 mb-4">
                <button type="submit" id="app-submit" 
                    class="button button-prim button-smaller button-disabled">
                        Wyślij wiadomość!

                        <div class="hint-box d-none"></div>
                </button>
            </div>

            <div class="error-box py-4 d-none"></div>
        </form>
    </div>
        
    <div class="contact-app-sent-container text-center py-5 d-none">
        <?php get_template_part('include/success', 'success'); ?>
    </div>
</section>