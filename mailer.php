<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';

/**
 * Sanitize a single form input string.
 */
function mrv_clean_input(string $value): string
{
    return trim(strip_tags($value));
}

/**
 * Normalize an Indian phone number to 10 digits by stripping formatting and +91/0 prefix.
 */
function mrv_normalize_phone(string $raw): string
{
    $digits = preg_replace('/\D+/', '', $raw) ?? '';
    if (strlen($digits) === 12 && str_starts_with($digits, '91')) {
        $digits = substr($digits, 2);
    } elseif (strlen($digits) === 11 && str_starts_with($digits, '0')) {
        $digits = substr($digits, 1);
    }
    return $digits;
}

/**
 * Validate a 10-digit Indian mobile number.
 */
function mrv_is_valid_phone(string $raw): bool
{
    return (bool) preg_match('/^[6-9]\d{9}$/', mrv_normalize_phone($raw));
}

/**
 * Send an HTML enquiry email via PHPMailer SMTP.
 *
 * @param string               $subject      Email subject line
 * @param string               $heading      Heading shown inside the email body
 * @param array<string,string> $fields       Key => value pairs rendered in the summary table
 * @param string               $replyToEmail Optional visitor email for Reply-To
 * @param string               $replyToName  Optional visitor name for Reply-To
 */
function mrv_send_mail(
    string $subject,
    string $heading,
    array $fields,
    string $replyToEmail = '',
    string $replyToName = ''
): bool {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'hostinghbs@gmail.com';
        $mail->Password   = 'vsktdwlhbwmamoko';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom('hostinghbs@gmail.com', 'MRV International');
        $mail->addAddress('info@mrvinternational.in', 'MRV International');

        if ($replyToEmail !== '' && filter_var($replyToEmail, FILTER_VALIDATE_EMAIL)) {
            $mail->addReplyTo($replyToEmail, $replyToName !== '' ? $replyToName : $replyToEmail);
        }

        $rows = '';
        $plainLines = [$heading, str_repeat('-', strlen($heading))];
        foreach ($fields as $label => $value) {
            $safeLabel = htmlspecialchars($label, ENT_QUOTES, 'UTF-8');
            $safeValue = nl2br(htmlspecialchars($value !== '' ? $value : 'Not provided', ENT_QUOTES, 'UTF-8'));
            $rows .= "<tr><td style=\"padding:10px 14px;border:1px solid #dbe7f3;background:#f8fbff;font-weight:600;width:160px;\">{$safeLabel}</td>"
                . "<td style=\"padding:10px 14px;border:1px solid #dbe7f3;\">{$safeValue}</td></tr>";
            $plainLines[] = "{$label}: " . ($value !== '' ? $value : 'Not provided');
        }

        $safeHeading = htmlspecialchars($heading, ENT_QUOTES, 'UTF-8');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "<div style=\"font-family:Arial,sans-serif;color:#1c1c1c;max-width:600px;\">"
            . "<h2 style=\"color:#e3242b;margin:0 0 14px;\">{$safeHeading}</h2>"
            . "<table style=\"border-collapse:collapse;width:100%;font-size:14px;\">{$rows}</table>"
            . "</div>";
        $mail->AltBody = implode("\n", $plainLines);

        return $mail->send();
    } catch (Exception $e) {
        error_log('MRV Mailer Error: ' . $mail->ErrorInfo);
        return false;
    }
}
