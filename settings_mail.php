<?php
require_once "inc_all_admin.php";
 ?>

    <div class="card card-dark">
        <div class="card-header py-3">
            <h3 class="card-title"><i class="fas fa-fw fa-envelope mr-2"></i>SMTP Mail Settings <small>(For Sending Email)</small></h3>
        </div>
        <div class="card-body">
            <form action="post.php" method="post" autocomplete="off">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">

                <div class="form-group">
                    <label>SMTP Host</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-server"></i></span>
                        </div>
                        <input type="text" class="form-control" name="config_smtp_host" placeholder="Mail Server Address" value="<?php echo nullable_htmlentities($config_smtp_host); ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>SMTP Port</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-plug"></i></span>
                        </div>
                        <input type="number" min="0" class="form-control" name="config_smtp_port" placeholder="Mail Server Port Number" value="<?php echo intval($config_smtp_port); ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Encryption</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-lock"></i></span>
                        </div>
                        <select class="form-control" name="config_smtp_encryption">
                            <option value=''>None</option>
                            <option <?php if ($config_smtp_encryption == 'tls') { echo "selected"; } ?> value="tls">TLS</option>
                            <option <?php if ($config_smtp_encryption == 'ssl') { echo "selected"; } ?> value="ssl">SSL</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>SMTP Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="config_smtp_username" placeholder="Username (Leave blank if no auth is required)" value="<?php echo nullable_htmlentities($config_smtp_username); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label>SMTP Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" data-toggle="password" name="config_smtp_password" placeholder="Password (Leave blank if no auth is required)" value="<?php echo nullable_htmlentities($config_smtp_password); ?>" autocomplete="new-password">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-fw fa-eye"></i></span>
                        </div>
                    </div>
                </div>

                <hr>

                <button type="submit" name="edit_mail_smtp_settings" class="btn btn-primary text-bold"><i class="fas fa-check mr-2"></i>Save</button>

            </form>
        </div>
    </div>

    <div class="card card-dark">
        <div class="card-header py-3">
            <h3 class="card-title"><i class="fas fa-fw fa-envelope mr-2"></i>IMAP Mail Settings <small>(For Monitoring Ticket Inbox)</small></h3>
        </div>
        <div class="card-body">
            <form action="post.php" method="post" autocomplete="off">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">

                <div class="form-group">
                    <label>IMAP Host</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-server"></i></span>
                        </div>
                        <input type="text" class="form-control" name="config_imap_host" placeholder="Incoming Mail Server Address (for email to ticket parsing)" value="<?php echo nullable_htmlentities($config_imap_host); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label>IMAP Port</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-plug"></i></span>
                        </div>
                        <input type="number" min="0" class="form-control" name="config_imap_port" placeholder="Incoming Mail Server Port Number (993)" value="<?php echo intval($config_imap_port); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label>IMAP Encryption</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-lock"></i></span>
                        </div>
                        <select class="form-control" name="config_imap_encryption">
                            <option value=''>None</option>
                            <option <?php if ($config_imap_encryption == 'tls') { echo "selected"; } ?> value="tls">TLS</option>
                            <option <?php if ($config_imap_encryption == 'ssl') { echo "selected"; } ?> value="ssl">SSL</option>
                        </select>
                    </div>
                </div>

                <div class='form-group'>
                    <label>IMAP Username</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa fa-fw fa-user'></i></span>
                        </div>
                        <input type='text' class='form-control' name='config_imap_username' placeholder='Username' value="<?php
                        echo nullable_htmlentities($config_imap_username); ?>" required>
                    </div>
                </div>

                <div class='form-group'>
                    <label>IMAP Password</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa fa-fw fa-key'></i></span>
                        </div>
                        <input type='password' class='form-control' data-toggle='password' name='config_imap_password' placeholder='Password' value="<?php
                        echo nullable_htmlentities($config_imap_password); ?>" autocomplete='new-password' required>
                        <div class='input-group-append'>
                            <span class='input-group-text'><i class='fa fa-fw fa-eye'></i></span>
                        </div>
                    </div>
                </div>

                <hr>

                <button type="submit" name="edit_mail_imap_settings" class="btn btn-primary text-bold"><i class="fas fa-check mr-2"></i>Save</button>

            </form>
        </div>
    </div>

    <div class="card card-dark">
        <div class="card-header py-3">
            <h3 class="card-title"><i class="fas fa-fw fa-paper-plane mr-2"></i>Mail From Configuration</h3>
        </div>
        <div class="card-body">
            <form action="post.php" method="post" autocomplete="off">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">

                <p>Each of the "From Email" Addresses need to be able to send email on behalf of the SMTP user configured above
                <h5>System Default</h5>
                <p class="text-secondary">(used for system tasks such as sending share links)</p>
                <div class="form-group">
                    <label>From Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" name="config_mail_from_email" placeholder="Email Address (ex noreply@yourcompany.com)" value="<?php echo nullable_htmlentities($config_mail_from_email); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label>From Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-tag"></i></span>
                        </div>
                        <input type="text" class="form-control" name="config_mail_from_name" placeholder="Name (ex YourCompany)" value="<?php echo nullable_htmlentities($config_mail_from_name); ?>">
                    </div>
                </div>

                <h5>Invoices</h5>
                <p class="text-secondary">(used for when invoice emails are sent)</p>

                <div class="form-group">
                    <label>From Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" name="config_invoice_from_email" placeholder="Email (ex billing@yourcompany.com)" value="<?php echo nullable_htmlentities($config_invoice_from_email); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label>From Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-tag"></i></span>
                        </div>
                        <input type="text" class="form-control" name="config_invoice_from_name" placeholder="Name (ex CompanyName Billing)" value="<?php echo nullable_htmlentities($config_invoice_from_name); ?>">
                    </div>
                </div>

                <h5>Quotes</h5>
                <p class="text-secondary">(used for when quote emails are sent)</p>

                <div class="form-group">
                    <label>From Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" name="config_quote_from_email" placeholder="Email (ex sales@yourcompany.com)" value="<?php echo nullable_htmlentities($config_quote_from_email); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label>From Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-tag"></i></span>
                        </div>
                        <input type="text" class="form-control" name="config_quote_from_name" placeholder="Name (ex YourCompany Sales)" value="<?php echo nullable_htmlentities($config_quote_from_name); ?>">
                    </div>
                </div>

                <h5>Tickets</h5>
                <p class="text-secondary">(used for when tickets are created and emailed to a client)</p>

                <div class="form-group">
                    <label>From Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" name="config_ticket_from_email" placeholder="Email (ex support@yourcompany.com)" value="<?php echo nullable_htmlentities($config_ticket_from_email); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label>From Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-fw fa-tag"></i></span>
                        </div>
                        <input type="text" class="form-control" name="config_ticket_from_name" placeholder="Name (ex YourCompany Support)" value="<?php echo nullable_htmlentities($config_ticket_from_name); ?>">
                    </div>
                </div>

                <hr>

                <button type="submit" name="edit_mail_from_settings" class="btn btn-primary text-bold"><i class="fas fa-check mr-2"></i>Save</button>

            </form>
        </div>
    </div>

    <?php if (!empty($config_smtp_host) && !empty($config_smtp_port) && !empty($config_mail_from_email) && !empty($config_mail_from_name)) { ?>

    <div class="card card-dark">
        <div class="card-header py-3">
            <h3 class="card-title"><i class="fas fa-fw fa-paper-plane mr-2"></i>Test Email Sending</h3>
        </div>
        <div class="card-body">
            <form action="post.php" method="post" autocomplete="off">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">

                <div class="input-group">
                    <select class="form-control select2" name="test_email" required>
                        <option value="">- Select an Email Address to send from -</option>
                        <?php
                        if ($config_mail_from_email) {
                        ?>
                        <option value="1"><?php echo nullable_htmlentities($config_mail_from_name); ?> (<?php echo nullable_htmlentities($config_mail_from_email); ?>)</option>
                        <?php } ?>

                        <?php
                        if ($config_invoice_from_email) {
                        ?>
                        <option value="2"><?php echo nullable_htmlentities($config_invoice_from_name); ?> (<?php echo nullable_htmlentities($config_invoice_from_email); ?>)</option>
                        <?php } ?>

                        <?php
                        if ($config_quote_from_email) {
                        ?>
                        <option value="3"><?php echo nullable_htmlentities($config_quote_from_name); ?> (<?php echo nullable_htmlentities($config_quote_from_email); ?>)</option>
                        <?php } ?>

                        <?php
                        if ($config_ticket_from_email) {
                        ?>
                        <option value="4"><?php echo nullable_htmlentities($config_ticket_from_name); ?> (<?php echo nullable_htmlentities($config_ticket_from_email); ?>)</option>
                        <?php } ?>

                        
                    </select>
                    <input type="email" class="form-control " name="email_to" placeholder="Email address to send to">
                    <div class="input-group-append">
                        <button type="submit" name="test_email_smtp" class="btn btn-success"><i class="fas fa-fw fa-paper-plane mr-2"></i>Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php } ?>

    <?php if (!empty($config_imap_username) && !empty($config_imap_password) && !empty($config_imap_host) && !empty($config_imap_port)) { ?>

    <div class="card card-dark">
        <div class="card-header py-3">
            <h3 class="card-title"><i class="fas fa-fw fa-plug mr-2"></i>Test IMAP Connection</h3>
        </div>
        <div class="card-body">
            <form action="post.php" method="post" autocomplete="off">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">

                <div class="input-group-append">
                    <button type="submit" name="test_email_imap" class="btn btn-success"><i class="fas fa-fw fa-inbox mr-2"></i>Test</button>
                </div>
            </form>
        </div>
    </div>

    <?php } ?>
	<?php { // Email Templates
	?>
    <div class="card card-dark">
        <div class="card-header py-3">
            <h3 class="card-title"><i class="fas fa-fw fa-envelope mr-2"></i>Email Template Editor</small></h3>
        </div>
        <div class="card-body">
			<form action="post.php" method="post" autocomplete="off">
				<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">
				<div class="form-group">
					<label>Template Selection</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-fw fa-envelope"></i></span>
						</div>
						<select class="form-control" name="template_selection" id="template_selection" onchange="updateTextareaVisibility()">
							<option value=''>None</option>
							<option value="config_et_client_ticket_new">Client - Ticket - New</option>
							<option value="config_et_client_ticket_update">Client - Ticket - Update</option>
							<option value="config_et_client_ticket_autoclose">Client - Ticket - Auto-Close</option>
							<option value="config_et_client_ticket_updatedpendingclosure">Client - Ticket - Updated Pending Closure</option>
							<option value="config_et_client_ticket_closed">Client - Ticket - Closed</option>
							<option value="config_et_client_app_newaccount">Client - App - New Account</option>
							<option value="config_et_client_app_passwordreset">Client - App - Password Reset</option>
							<option value="config_et_client_app_passwordresetcomplete">Client - App - Password Reset Complete</option>
							<option value="config_et_client_calendar_rescheduled">Client - Calendar - Rescheduled</option>
							<option value="config_et_client_calendar_scheduled">Client - Calendar - Scheduled</option>
							<option value="config_et_client_invoice_new">Client - Invoice - New</option>
							<option value="config_et_client_invoice_newrecurring">Client - Invoice - New Recurring</option>
							<option value="config_et_client_invoice_paid">Client - Invoice - Paid</option>
							<option value="config_et_client_invoice_paymentfull">Client - Invoice - Payment Full</option>
							<option value="config_et_client_invoice_paymentmultiple">Client - Invoice - Payment Multiple</option>
							<option value="config_et_client_invoice_paymentpartial">Client - Invoice - Payment Partial</option>
							<option value="config_et_client_invoice_paymentreminder">Client - Invoice - Payment Reminder</option>
							<option value="config_et_client_invoice_paymentstripe">Client - Invoice - Payment Stripe</option>
							<option value="config_et_client_quote_new">Client - Quote - New</option>
							<option value="config_et_client_securelink">Client - Secure Link</option>
							<option value="config_et_watcher_notify">Watcher - Notify</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label>Template Subject and Body</label>

					<?php
					$templates = array(
						'config_et_client_ticket_new' => 'Client - Ticket - New',
						'config_et_client_ticket_update' => 'Client - Ticket - Update',
						'config_et_client_ticket_autoclose' => 'Client - Ticket - Auto-Close',
						'config_et_client_ticket_updatedpendingclosure' => 'Client - Ticket - Updated Pending Closure',
						'config_et_client_ticket_closed' => 'Client - Ticket - Closed',
						'config_et_client_app_newaccount' => 'Client - App - New Account',
						'config_et_client_app_passwordreset' => 'Client - App - Password Reset',
						'config_et_client_app_passwordresetcomplete' => 'Client - App - Password Reset Complete',
						'config_et_client_calendar_rescheduled' => 'Client - Calendar - Rescheduled',
						'config_et_client_calendar_scheduled' => 'Client - Calendar - Scheduled',
						'config_et_client_invoice_new' => 'Client - Invoice - New',
						'config_et_client_invoice_newrecurring' => 'Client - Invoice - New Recurring',
						'config_et_client_invoice_paid' => 'Client - Invoice - Paid',
						'config_et_client_invoice_paymentfull' => 'Client - Invoice - Payment Full',
						'config_et_client_invoice_paymentmultiple' => 'Client - Invoice - Payment Multiple',
						'config_et_client_invoice_paymentpartial' => 'Client - Invoice - Payment Partial',
						'config_et_client_invoice_paymentreminder' => 'Client - Invoice - Payment Reminder',
						'config_et_client_invoice_paymentstripe' => 'Client - Invoice - Payment Stripe',
						'config_et_client_quote_new' => 'Client - Quote - New',
						'config_et_client_securelink' => 'Client - Secure Link',
						'config_et_watcher_notify' => 'Watcher - Notify'
					);

					foreach ($templates as $key => $label) {
						$subj = ${$key . '_subj'}; // Assuming you have variables like $config_et_client_ticket_new_subj, etc.
						$body = ${$key}; // Assuming you have variables like $config_et_client_ticket_new, etc.
						?>

						<input type="text" class="form-control template-subject" name="<?php echo $key . '_subj'; ?>" id="<?php echo $key . '_subj'; ?>" placeholder="Subject" value="<?php echo $subj; ?>">
						<textarea class="form-control template-textarea" rows="20" name="<?php echo $key; ?>" id="<?php echo $key; ?>"><?php echo $body; ?></textarea>

					<?php } ?>

				</div>

				<hr>

				<button type="submit" name="edit_mail_email_template" class="btn btn-primary text-bold"><i class="fas fa-check mr-2"></i>Save</button>
			</form>

			<script>
			document.addEventListener("DOMContentLoaded", function() {
				// Initially hide all textareas, subject inputs, and initialize TinyMCE for them
				let textareas = document.querySelectorAll('.template-textarea');
				let subjects = document.querySelectorAll('.template-subject');
				let editors = {};

				textareas.forEach(textarea => {
					textarea.style.display = 'none';
					tinymce.init({
						selector: '#' + textarea.id,
						menubar: false,
						plugins: 'lists link code table fullscreen',
						toolbar: 'blocks fontfamily fontsize | bold italic forecolor | link unlink | bullist numlist | alignleft aligncenter alignright alignjustify | outdent indent | table | code fullscreen',
						setup: function (editor) {
							editors[textarea.id] = editor;
							editor.on('init', function () {
								editor.hide();
							});
						}
					});
				});

				subjects.forEach(subject => {
					subject.style.display = 'none';
				});

				// Function to update textarea and subject visibility based on dropdown selection
				function updateTextareaVisibility() {
					let selectedValue = document.getElementById('template_selection').value;

					// Hide all textareas, TinyMCE editors, and subject inputs
					textareas.forEach(textarea => {
						textarea.style.display = 'none';
						if (editors[textarea.id]) {
							editors[textarea.id].hide();
						}
					});

					subjects.forEach(subject => {
						subject.style.display = 'none';
					});

					// Show the selected textarea, its TinyMCE editor, and the corresponding subject input
					if (selectedValue && editors[selectedValue]) {
						document.getElementById(selectedValue).style.display = 'block';
						editors[selectedValue].show();
						document.getElementById(selectedValue + '_subj').style.display = 'block';
					}
				}

				// Attach the function to the dropdown change event
				document.getElementById('template_selection').addEventListener('change', updateTextareaVisibility);
			});
			</script>


        </div>
    </div>
	<?php } ?>

<?php require_once "footer.php";

