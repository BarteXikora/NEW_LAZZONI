<?php get_header(); ?>

<main class="container single-container my-5">
    <div class="row text-center py-5 my-5 d-none" id="s-success">
        <div class="col-12 mt-5">
            <?php get_template_part('include/success', 'success'); ?>
        </div>
    </div>

    <form class="row form my-5 pt-5" id="service-form" data-link="<?php echo admin_url('admin-ajax.php'); ?>">
        <div class="col-12">
            <h1 class="title">Formularz kontaktowy:</h1>
        </div>
        <div class="col-12 col-md-6 px-md-5">
            <h2>Zgłoszenie:</h2>

            <label for="s-type">Typ zgłoszenia:</label>
            <div class="select-container" id="s-type" data-value="guarantee">
                <div class="select">
                    <div class="option selected" data-value="guarantee">Gwarancja</div>
                    <div class="option" data-value="repair">Naprawa pogwarancyjna</div>
                </div>
            </div>

            <label for="s-country">Kraj zgłoszenia:</label>
            <div class="select-container" id="s-country" data-value="pl">
                <div class="select">
                    <div class="option selected" data-value="pl">Polska</div>
                    <div class="option" data-value="ua">Ukraina</div>
                    <div class="option" data-value="de">Niemcy</div>
                    <div class="option" data-value="cz">Czechy</div>
                    <div class="option" data-value="sk">Słowacja</div>
                    <div class="option" data-value="by">Białoruś</div>
                    <div class="option" data-value="lt">Litwa</div>
                    <div class="option" data-value="lv">Łotwa</div>
                    <div class="option" data-value="ee">Estonia</div>
                </div>
            </div>

            <h2 class="mt-5">Dane firmy:</h2>

            <label for="s-company-name">Nazwa firmy:<span class="required">*</span></label>
            <input type="text" id="s-company-name" class="input-required">

            <label for="s-adress">Adres:<span class="required">*</span></label>
            <input type="text" id="s-adress" class="input-required">

            <label for="s-nip">NIP:</label>
            <input type="text" id="s-nip">
                
            <label for="s-name">Imię i nazwisko:</label>
            <input type="text" id="s-name">
                
            <label for="s-email">E - mail:<span class="required">*</span></label>
            <input type="email" id="s-email" class="input-required">
                
            <label for="s-phone">Numer telefonu:<span class="required">*</span></label>
            <input type="tel" id="s-phone" class="input-required">
        </div>

        <div class="col-12 col-md-6 px-md-5">
            <h2>Dane urządzenia:</h2>

            <label for="s-drill">Marka / model:<span class="required">*</span></label>
            <input type="text" id="s-drill" class="input-required">

            <label for="s-sn">Numer seryjny:<span class="required">*</span></label>
            <input type="text" id="s-sn" class="input-required">

            <label for="s-date">Data zakupu:<span class="required">*</span></label>
            <input type="date" id="s-date" class="input-required">

            <label for="s-fv">Numer faktury:</label>
            <input type="text" id="s-fv">

            <label for="s-message">Wiadomość, lub pytanie:<span class="required">*</span></label>
            <textarea id="s-message" class="input-required"></textarea>

            <div class="checkbox-container">
                <label>
                    Wyrażam zgodę na przetwarzanie podanych w formularzu moich danych osobowych 
                    przez operatora serwisu lazzonigroup.pl (Lazzoni Group spółka z ograniczoną 
                    odpowiedzialnością sp.k., Pcim 1563, 32-432 Pcim) w zakresie niezbędnym do 
                    realizacji niniejszego zgłoszenia. Jednocześnie przyjmuję do wiadomości, iż 
                    podane w formularzu dane po zakończeniu obsługi zgłoszenia, nie są nigdzie 
                    przechowywane w żadnej postaci. Podanie danych w formularzu jest dobrowolne, 
                    ale niezbędne do przetworzenia zapytania. Posiada Pani/Pan prawo dostępu do 
                    treści swoich danych i ich sprostowania, usunięcia, ograniczenia przetwarzania, 
                    prawo do przenoszenia danych, prawo do cofnięcia zgody w dowolnym momencie bez 
                    wpływu na zgodność z prawem przetwarzania.<span class="required">*</span>
                    <input type="checkbox" id="s-rodo">
                    <div class="checkmark"></div>
                </label>
            </div>
        </div>

        <div class="col-12 px-5 mt-3">
            <p><span class="required">*</span> &mdash; pole wymagane</p>
            <div class="error-box"></div>
        </div>

        <div class="col-12 text-center mt-5">
            <button type="submit" id="s-submit" class="button button-prim button-disabled">
                Wyślij formularz serwisowy!

                <div class="hint-box d-none"></div>
            </button>
        </div>
    </form>
</main>

<?php 

get_template_part('include/map', 'map');

get_footer() ;

?>