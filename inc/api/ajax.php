<?php
require_once MP_THEME_DIRECTORY . "/inc/api/formdata.php";
class AjaxHandler
{
    public function __construct()
    {
        add_action('wp_ajax_contact_form', array($this, 'contact_form'));
        add_action('wp_ajax_nopriv_contact_form', array($this, 'contact_form'));
    }

    public function contact_form() {
//        check_ajax_referer('contact_nonce', 'cnssecurity');

        // Retrieve the form data
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $comments = sanitize_textarea_field($_POST['comments']);

        $db = new ContactFormDataDB();
        $inserted = $db->insert_contact_data($name, $email, $subject, $comments);


        // Send a response back to the JavaScript
        if($inserted) {
            echo json_encode(array(
                'success' => true,
            ));
        } else {
            echo json_encode(array(
                'success' => false,
            ));
        }
        wp_die(); // Terminate script execution
    }
}
new AjaxHandler();