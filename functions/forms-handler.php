<?php

add_action('wp_ajax_enquiry_form', 'enquiry_form');
add_action('wp_ajax_nopriv_enquiry_form', 'enquiry_form');

function enquiry_form() {

    // From 'contact' page:
    $send_to_contact = [
        'biuro@lazzonigroup.pl'
    ];

    // From 'service' page - pl:
    $send_to_service_pl = [
        'serwis@lazzonigroup.pl'
    ];

    // From 'service' page - other lang:
    $send_to_service_other = [
        'service@lazzonigroup.pl'
    ];

    // From 'contact app' - wiertarki:
    $send_to_phone_wiertarki = [
        'm.zadlo@lazzonigroup.pl'
    ];

    // From 'contact app' - glowice:
    $send_to_phone_glowice = [
        'w.ciesielski@lazzonigroup.pl'
    ];

    // From 'contact app' - czesci:
    $send_to_phone_czesci = [
        'czesci@lazzonigroup.pl'
    ];

    // From 'contact app' - serwis:
    $send_to_phone_serwis = [
        'serwis@lazzonigroup.pl'
    ];

    // ===============================

    $from = $_REQUEST['from'];

    // For every request:
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $req_message = $_REQUEST['message'];

    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = 'From: '.get_option('admin_email');

    $message = '<strong>Data i czas otrzymania zgłoszenia: </strong>'.date('d.m.Y').' '.date('H:i').'<br /><br />';

    $answer;

    // If request from CONTACT APP:
    if ($from == 'contact-app') {
        $topic = $_REQUEST['topic'];

        $subject = 'Prośba o kontakt ze strony głównej lazzonigroup.pl';
        
        if (strlen($phone) > 0) $message .= '<strong>Podany numer kontaktowy:</strong> '.$phone.'<br />';
        if (strlen($email) > 0) $message .= '<strong>Podany adres e-mail:</strong> '.$email.'<br />';

        $message .= '<strong>Treść wiadomości:</strong> '.$req_message;

        if ($topic == 'wiertarki') $mail_to = $send_to_phone_wiertarki;
        else if ($topic == 'głowice') $mail_to = $send_to_phone_glowice;
        else if ($topic == 'części') $mail_to = $send_to_phone_czesci;
        else $mail_to = $send_to_phone_serwis;

        $answer = send_mail($mail_to, $headers, $subject, $message);

    } //If request from CONTACT FORM:
    else if ($from == 'contact-form') {
        $name = $_REQUEST['name'];
        $about = $_REQUEST['about'];

        $subject = 'Prośba o kontakt z formularza kontaktowego na stronie lazzonigroup.pl';

        $message .= '<strong>Podany numer kontaktowy:</strong> '.$phone.'<br />';
        $message .= '<strong>Podany adres e-mail:</strong> '.$email.'<br />';
        $message .= '<strong>Podane imię i nazwisko:</strong> '.$name.'<br />';
        $message .= '<strong>Produkt / powód kontaktu:</strong> '.$about.'<br />';
        $message .= '<strong>Treść wiadomości:</strong> '.$req_message;

        $answer = send_mail($send_to_contact, $headers, $subject, $message);

    } // If request from SERVICE FORM:
    else if ($from == 'service-form') {
        $type = $_REQUEST['type'];
        $country = $_REQUEST['country'];
        $company = $_REQUEST['company'];
        $adress = $_REQUEST['adress'];
        $nip = $_REQUEST['nip'];
        $name = $_REQUEST['name'];
        $drill = $_REQUEST['drill'];
        $sn = $_REQUEST['sn'];
        $date = $_REQUEST['date'];
        $fv = $_REQUEST['fv'];

        switch ($country) {
            case 'pl': $country = 'Polska';
            case 'ua': $country = 'Ukraina';
            case 'de': $country = 'Niemcy';
            case 'cz': $country = 'Czechy';
            case 'sk': $country = 'Słowacja';
            case 'by': $country = 'Białoruś';
            case 'lt': $country = 'Litwa';
            case 'lv': $country = 'Łotwa';
            case 'ee': $country = 'Estonia';
        }

        $subject = 'Prośba o kontakt z formularza serwisowego na stronie lazzonigroup.pl';

        $message .= '<strong>Podany numer kontaktowy:</strong> '.$phone.'<br />';
        $message .= '<strong>Podany adres e-mail:</strong> '.$email.'<br /><br />';

        if ($type == 'guarantee') $message .= '<strong>Typ zgłoszenia:</strong> Gwarancja,<br />';
        else $message .= '<strong>Typ zgłoszenia:</strong> Naprawa pogwarancyjna,<br />';

        $message .= '<strong>Kraj zgłoszenia: </strong> '.$country.'<br /><br />';
        
        $message .= '<strong>Nazwa firmy: </strong> '.$company.'<br />'; 
        $message .= '<strong>Podany adres: </strong> '.$adress.'<br />'; 
        $message .= '<strong>NIP: </strong> '.$nip.'<br />'; 
        $message .= '<strong>Podane imię i nazwisko: </strong> '.$name.'<br />'; 
        $message .= '<strong>Podana nazwa wiertarki: </strong> '.$drill.'<br />'; 
        $message .= '<strong>Podany numer seryjny: </strong> '.$sn.'<br />'; 
        $message .= '<strong>Podana data zakupu wiertarki: </strong> '.$date.'<br />'; 
        $message .= '<strong>Podany numer faktury VAT: </strong> '.$fv.'<br /><br />'; 

        $message .= '<strong>Treść wiadomości:</strong> '.$req_message;

        if ($country == 'pl') $mail_to = $send_to_service_pl;
        else $mail_to = $send_to_service_other;

        $answer = send_mail($mail_to, $headers, $subject, $message);

    }

    echo json_encode($answer);

    die();
}

function send_mail($mails_to, $headers, $subject, $message) {
    try {
        $ok = true;

        foreach($mails_to as $mail) {
            if (!wp_mail($mail, $subject, $message, $headers)) $ok = false;
        }

        return $ok;
    } catch (Exception $e) {
        return false;
    }
}