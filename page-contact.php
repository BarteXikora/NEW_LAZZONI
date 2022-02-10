<?php get_header(); ?>

<main class="container single-container my-5">
    <div class="row my-5 pt-5">
        <div class="col-12">
            <h1 class="title">Skontaktuj się z nami:</h1>
        </div>

        <div class="form col-12 col-md-6 px-md-5 my-5 text-center d-none" id="c-success">
            <?php get_template_part('include/success', 'success'); ?>
        </div>

        <form class="form col-12 col-md-6 px-md-5 mb-5" id="contact-form">
            <h2>Formularz kontaktowy:</h2>

            <label for="c-name">Imię i nazwisko:</label>
            <input type="text" id="c-name">
                
            <label for="c-email">E - mail:<span class="required">*</span></label>
            <input type="email" id="c-email" class="input-required">
                
            <label for="c-phone">Numer telefonu:<span class="required">*</span></label>
            <input type="tel" id="c-phone" class="input-required">

            <label for="c-message">Wiadomość, lub pytanie:<span class="required">*</span></label>
            <textarea id="c-message" class="input-required"></textarea>

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

                    <input type="checkbox" id="c-rodo">
                    <div class="checkmark"></div>
                </label>
            </div>

            <p class="mt-3"><span class="required">*</span> &mdash; pole wymagane</p>
            <div class="error-box"></div>

            <div class="text-center mt-5">
                <button type="submit" id="c-submit" class="button button-prim button-disabled">
                    Wyślij!
                </button>
            </div>
        </form>

        <div class="col-12 col-md-6 px-md-5 contact-container">
            <h2>Dane kontaktowe:</h2>

            <h3 class="mt-4">Siedziba spółki:</h3>
            <p>Pcim 1563,</p>
            <p>32-432 Pcim</p>

            <h3 class="mt-4">Adres magazynu:</h3>
            <p>Pcim 1563,</p>
            <p>32-432 Pcim</p>

            <h3 class="mt-4">Godziny otwarcia:</h3>
            <p><b>Pn &mdash; Pt:</b>  8:00-16:00</p>
            <p><b>Sb &mdash; Nd:</b> zamknięte</p>

            <p class="mt-5">
                ADMINISTRATOREM PAŃSTWA DANYCH JEST LAZZONI GROUP SPÓŁKA Z OGRANICZONĄ 
                ODPOWIEDZIALNOŚCIĄ SPÓŁKA KOMANDYTOWA. 32-432 Pcim 1563, KRS 0000857704, 
                NIP 6812082586. SĄD REJONOWY DLA KRAKOWA ŚRÓDMIEŚCIA W KRAKOWIE, XII WYDZIAŁ 
                GOSPODARCZY KRAJOWEGO REJESTRU SĄDOWEGO WPIS POD NUMEREM KRS 0000857704
            </p>

            <p class="mt-4"><b>NIP:</b> 6812082586</p> 
            <p><b>KRS:</b> 0000857704</p>
        </div>

    </div>
</main>

<?php 

get_template_part('include/map', 'map');

get_footer() ;

?>