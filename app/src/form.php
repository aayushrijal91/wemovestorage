<?php
include __DIR__ . '/../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    try {
        if ($recaptcha->score < 0.5) {
            throw new Exception('Something went wrong! Please try again.');
        }

        $to = $admin_email;
        $email = $to;

        $subject = "Message from " . $site;

        $name = strip_tags($_POST['name']);
        $phone = strip_tags($_POST['phone']);
        $email = strip_tags($_POST['email']);
        $storageSize = strip_tags($_POST['storageSize']);
        $enquiry = strip_tags($_POST['enquiry']);

        $message = '<!DOCTYPE html>
                <html>
                    <head>
                        <style>
                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }
                            
                            td, th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }
                            
                            tr:nth-child(even) {
                                background-color: #dddddd;
                            }
                        </style>
                    </head>
                <body><table><tbody>' .
            '<tr>' .
            '<td>Name</td>' .
            '<td><b>' . $name . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Phone</td>' .
            '<td><b>' . $phone . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Email Address</td>' .
            '<td><b>' . $email . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Storage Size</td>' .
            '<td><b>' . $storageSize . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Enquiry</td>' .
            '<td><b>' . $enquiry . '</b></td>' .
            '</tr>' .
            '</tbody></table></body></html>';

        $api_token = '20aaf2a71a0bb24f63bbef953042fca1c9d4a9e7';

        $company_domain = 'wemove';

        $url = 'https://' . $company_domain . '.pipedrive.com/v1/persons?api_token=' . $api_token;

        $data = array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'notes' => $enquiry
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($output, true);
        $id = $result['data']['id'];

        $url = 'https://' . $company_domain . '.pipedrive.com/v1/deals?api_token=' . $api_token;

        $fields['title'] = $name;
        $fields['43038cefa8cfb09012f966b9430b328a6633ae53'] = $storageSize;
        $fields['person_id'] = $id;

        $ch1 = curl_init();
        curl_setopt($ch1, CURLOPT_URL, $url);
        curl_setopt($ch1, CURLOPT_POST, true);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $output1 = curl_exec($ch1);
        curl_close($ch1);

        // email

        $headers = "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=utf-8\r\n" .
            "From: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            "Bcc: " . $bcc_email . "\r\n" .
            "Reply-To: " . $site . " <" . $email . ">" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            header('location:./../thankyou');
        } else {
            throw new Exception('Failed, please submit form again or call us directly.');
        }
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}
