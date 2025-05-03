<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send WhatsApp Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Send WhatsApp Message</div>
                    <div class="card-body">
                        <div id="success-alert" class="alert alert-success d-none">
                            Message sent successfully!
                        </div>
                        <div id="error-alert" class="alert alert-danger d-none">
                            Failed to send message. <span id="error-message"></span>
                        </div>

                        <form id="whatsapp-form">
                            @csrf
                            <div class="mb-3">
                                <label for="to" class="form-label">Recipient's Phone Number</label>
                                <input type="text" class="form-control" id="to" name="to" placeholder="+1234567890" required>
                                <small class="text-muted">Include country code (e.g., +1 for US)</small>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#whatsapp-form').on('submit', function(e) {
                e.preventDefault();
                
                // Hide any existing alerts
                $('#success-alert, #error-alert').addClass('d-none');
                
                // Get form data
                const to = $('#to').val();
                const message = $('#message').val();
                
                // Send AJAX request
                $.ajax({
                    url: '/api/whatsapp/send',
                    type: 'POST',
                    data: {
                        to: to,
                        message: message,
                        _token: $('input[name="_token"]').val()
                    },
                    success: function(response) {
                        // Show success message
                        $('#success-alert').removeClass('d-none');
                        // Clear form
                        $('#message').val('');
                    },
                    error: function(xhr) {
                        // Show error message
                        $('#error-message').text(xhr.responseJSON?.message || 'Unknown error');
                        $('#error-alert').removeClass('d-none');
                    }
                });
            });
        });
    </script>
</body>
</html>