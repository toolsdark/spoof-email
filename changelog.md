# Changelog

### Changes made in index.html (16/02/2024)
🛠️ **Technical Changes:**
- Updated TailwindCSS link to version 2.2.19 for improved styling and compatibility.
- Maintained existing functionality and layout while modernizing HTML structure.

🔒 **Security Enhancements:**
- Ensured secure handling of form data and file uploads to prevent potential vulnerabilities.

⚙️ **Other Updates:**
- Verified all HTML elements for compliance with HTML5 standards.
- Ensured proper naming conventions and accessibility attributes for enhanced usability.

📝 **Note:**
No changes were made to the core functionality of the Email Spoofer tool. The updates focused on improving code quality, security, and modernizing the HTML structure.

### Changes made in email_spoofer.php (16/02/2024)

🛠️ **Technical Changes:**
- Implemented the operator ternary (`??`) to assign default values to POST parameters, ensuring functionality when parameters are absent.
- Added validation to ensure all required fields (recipient, subject, message, sender name, sender email) are present before sending the email.
- Utilized the `mail()` function to send emails, setting the sender properly.
- Enhanced code structure to improve clarity and readability.

🔒 **Security:**
- Ensured no hardcoded credentials or sensitive data are exposed.
- Implemented input validation to mitigate potential security risks.
- Addressed email content injection vulnerabilities by sanitizing and validating user input to prevent HTML or plaintext content injection attacks.

📝 **Note:**
Ensure all required fields are provided before attempting to send the email.

### Changes made in **mailer.php**


🆕 **New Features**
- No new features have been added in this version.

🛠️ **Changes**
- Refactored the code to improve readability and maintainability.
- Updated the license message to provide instructions on how to obtain the license key via Telegram.

🐞 **Bug Fixes**
- No bugs have been fixed in this version.

🔒 **Security Fixes**
- No security fixes have been applied in this version.

🔄 **Updates**
- No updates have been applied in this version.

🔖 **Miscellaneous**
- Added input validation and sanitization to ensure data security.
- Added error and message handling to improve code robustness.
- Added `send_email` function using PHPMailer for more reliable email sending.
- Utilized Composer for the installation of PHPMailer.

