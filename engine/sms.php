<?php
$json_url = "https://api.ebulksms.com/sendsms.json";
$username = '';
$apikey = '';

if (isset($_POST['button'])) {
    $username = $_POST['username'];
    $apikey = $_POST['apikey'];
    $sendername = substr($_POST['sender_name'], 0, 11);
    $recipients = $_POST['telephone'];
    $message = $_POST['message'];
    $flash = 0;
    $message = substr($_POST['message'], 0, 160);//Limit this message to one page.
    $Ebulksms = new Ebulksms();

#Use the next line for HTTP POST with JSON
    $result = $Ebulksms->useJSON($json_url, $username, $apikey, $flash, $sendername, $message, $recipients);
#Uncomment the next line and comment the one above if you want to use HTTP POST with XML
    //$result = $Ebulksms->useXML($xml_url, $username, $apikey, $flash, $sendername, $message, $recipients);
#Uncomment the next line and comment the ones above if you want to use simple HTTP GET
    //$result = $Ebulksms->useHTTPGet($http_get_url, $username, $apikey, $flash, $sendername, $message, $recipients);
}

class Ebulksms {

    public function useJSON($url, $username, $apikey, $flash, $sendername, $messagetext, $recipients) {
        $gsm = array();
        $country_code = '234';
        $arr_recipient = explode(',', $recipients);
        foreach ($arr_recipient as $recipient) {
            $mobilenumber = trim($recipient);
            if (substr($mobilenumber, 0, 1) == '0') {
                $mobilenumber = $country_code . substr($mobilenumber, 1);
            } elseif (substr($mobilenumber, 0, 1) == '+') {
                $mobilenumber = substr($mobilenumber, 1);
            }
            $generated_id = uniqid('int_', false);
            $generated_id = substr($generated_id, 0, 30);
            $gsm['gsm'][] = array('msidn' => $mobilenumber, 'msgid' => $generated_id);
        }
        $message = array(
            'sender' => $sendername,
            'messagetext' => $messagetext,
            'flash' => "{$flash}",
        );

        $request = array('SMS' => array(
                'auth' => array(
                    'username' => $username,
                    'apikey' => $apikey
                ),
                'message' => $message,
                'recipients' => $gsm
        ));
        $json_data = json_encode($request);
        if ($json_data) {
            $response = $this->doPostRequest($url, $json_data, array('Content-Type: application/json'));
            $result = json_decode($response);
            return $result->response->status;
        } else {
            return false;
        }
    }

    

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>EbulkSMS Send SMS API Sample</title>
    </head>

    <body>
        <h2 style="text-align: center">Ebulk SMS Integration Sample Code</h2>
        <div style="border: 1px solid #333; padding: 5px 10px; width: 40%; margin: 0 auto">
            <form id="form1" name="form1" method="post" action="">

                <?php
                if (!empty($_POST)) {
                    if (stristr($result, 'SUCCESS')) {
                        ?>
                        <p style="border: 1px dotted #333; background: #33ff33; padding: 5px;">Message sent</p>
                        <?php
                    } else {
                        ?>
                        <p style="border: 1px dotted #333; background: #FFDACC; padding: 5px;">Message not sent - <?php echo $result; ?></p>
                        <?php
                    }
                }
                ?>

                <p>
                    <label>Username:
                        <input name="username" type="text" id="username"/>
                    </label>
                </p>
                <p>
                    <label>API Key:
                        <input name="apikey" type="password" id="passwd" />
                    </label>
                </p>
                <p>
                    <label>Sender name:
                        <input name="sender_name" type="text" id="name" value="Integration" />
                    </label>
                </p>
                <p>
                    <label>Recipients
                        <textarea name="telephone" id="telephone" cols="45" rows="2"></textarea>
                    </label>
                </p>
                <p>
                    <label>Message
                        <textarea name="message" id="message" cols="45" rows="5"></textarea>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="submit" name="button" id="button" value="Submit" />
                    </label>