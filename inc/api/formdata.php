<?php

class ContactFormDataDB {
    private $table_name;

    public function __construct() {
        global $wpdb;
        $this->table_name = $wpdb->prefix . 'formdata'; // Use the correct table prefix
    }

    public function insert_contact_data($name, $email, $subject, $comments) {
        global $wpdb;

        $data = array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'comments' => $comments,
        );

        $format = array(
            '%s',
            '%s',
            '%s',
            '%s',
        );

        $inserted = $wpdb->insert($this->table_name, $data, $format);

        return $inserted;
    }
}

