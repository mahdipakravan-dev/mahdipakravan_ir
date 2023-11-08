jQuery(document).ready(function($) {
    $('#myForm').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Get form data
        var formData = {
            'action': 'contact_form',
            'security': ajaxHandler.ajaxurl,
            'name': $('#name').val(),
            'email': $('#email').val(),
            'subject': $('#subject').val(),
            'comments': $('#comments').val()
        };

        // Disable the submit button and change its text to 'Loading...'
        $('#submit_contact').prop('disabled', true).text('Loading...');

        // Send AJAX request
        $.post("https://mahdipakravan.ir/wp-admin/admin-ajax.php", formData, function(response) {
            var data = JSON.parse(response);
            if (data.success) {
                // Display success message
                $('#simple-msg').html(
                    `
                    <div class="bg-slate-900 rounded-md border border-dashed border-slate-200 p-4 font-xs">با موفقیت ثبت شد</div>`
                );
            } else {
                $('#simple-msg').html(
                    `
                    <div class="bg-slate-900 rounded-md border border-dashed border-slate-200 p-4 font-xs">مشکلی پیش آمد مجددا تلاش نمایید</div>`
                );
            }

            // Enable the submit button and change its text back to 'Submit'
            $('#submit_contact').prop('disabled', false).text('Submit');
        });
    });
});
