<?php
    function submit_contact_form() {
        if (!wp_verify_nonce($_POST['nonce'], 'contact_form_nonce')) {
            wp_send_json_error('Nonce is incorrect', 401);
            die();
        }

        $formData = [];
        wp_parse_str($_POST['data'], $formData);
        
        //$secretKey = '6Le4h74jAAAAAO-WhzvrnCSKe-6HYG7uTyTKhX1e';
        //$response = $formData['recaptchaToken'];
        //$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $response;
        //$verify = json_decode(file_get_contents($url));

        //if ($verify->success) {
            $fullname = $formData['fullname'];
            $sender_email = $formData['email'];
            $phone = $formData['phone'];

            $goal = $formData['goal'];
            $goalTime = $formData['goalTime'];
            $healthState = $formData['healthState'];
            $motivation = $formData['motivation'];
            $notes = $formData['notes'];
    
            $isValid_fullname = !empty($fullname);
            $isValid_sender_email = is_email($sender_email);
            $isValid_phone = preg_match('/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/', $phone);

            $isValid_goal = !empty($goal);
            $isValid_goalTime = !empty($goalTime);
            $isValid_healthState = !empty($healthState);
            $isValid_motivation = !empty($motivation);
            //$isValid_notes = !empty($notes);
    
            if ($isValid_fullname &&
                $isValid_sender_email &&
                $isValid_phone &&
                $isValid_goal &&
                $isValid_goalTime &&
                $isValid_healthState &&
                $isValid_motivation
            ) {
                // Admin email
                $admin_email = get_option('admin_email');
        
        
                // Email headers
                $headers[] = 'Content-Type: text/html; charset=UTF-8';
                $headers[] = 'From:' . $admin_email;
                $headers[] = 'Reply-to' . $formData['email'];
        
                // Send the email to
                $send_to = $admin_email;
        
                // Subject
                $subject = "CLNRGY: Formulaire de contact";
        
                // Message
                $message = '
                    <div style="font-family: Arial">
                        <div style="margin: 0 0 30px 0">Message de <strong>'. esc_html(filter_var($fullname, FILTER_SANITIZE_STRING)) .'</strong>,</div>
                        <div style="margin: 0 0 30px 0">
                        <div>
                            <p style="font-weight: bold">Quel est votre objectif ultime ?</p>
                            <p>'. esc_html(filter_var($goal, FILTER_SANITIZE_STRING)) .'</p>
                        </div>
                    
                        <div>
                            <p style="font-weight: bold">
                            Dans quel état de santé êtes-vous en ce moment ?
                            </p>
                            <p>'. esc_html(filter_var($healthState, FILTER_SANITIZE_STRING)) .'</p>
                        </div>
                    
                        <div>
                            <p style="font-weight: bold">
                            En combien de temps souhaitez-vous atteindre votre objectif ?
                            </p>
                            <p>'. esc_html(filter_var($goalTime, FILTER_SANITIZE_STRING)) .'</p>
                        </div>
                    
                        <div>
                            <p style="font-weight: bold">
                            Êtes-vous réellement motivé à fournir les efforts nécessaires pour
                            atteindre vos objectifs ?
                            </p>
                            <p>'. esc_html(filter_var($motivation, FILTER_SANITIZE_STRING)) .'</p>
                        </div>
                    
                        <div>
                            <p style="font-weight: bold">
                            Avez-vous des informations supplémentaires à ajouter à votre dossier ?
                            </p>
                            <p>'. esc_html(filter_var($notes, FILTER_SANITIZE_STRING)) .'</p>
                        </div>
                        </div>
                        <div>
                        <div style="margin: 0 0 10px 0; font-weight: bold">
                            Information de contact:
                        </div>
                        <div>Nom: '. esc_html(filter_var($fullname, FILTER_SANITIZE_STRING)) .'</div>
                        <div>Adresse courriel: '. esc_html(filter_var($sender_email, FILTER_SANITIZE_STRING)) .'</div>
                        <div>Numéro de téléphone: '. esc_html(filter_var($phone, FILTER_SANITIZE_STRING)) .'</div>
                        </div>
                    </div>
                ';
        
                try {
                    if (wp_mail($send_to, $subject, $message, $headers)) {
                        wp_send_json_success('Email success');
                    } else {
                        wp_send_json_error('Email error');
                    }
                } catch(Exception $e) {
                    wp_send_json_error($e->getMessage());
                }
            } else {
                wp_send_json_error('Email error');
            }
        //} else {
        //    wp_send_json_error($verify);
        //}
    }

    add_action('wp_ajax_contact_form', 'submit_contact_form');
    add_action('wp_ajax_nopriv_contact_form', 'submit_contact_form');
?>