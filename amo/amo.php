<?php
if(!empty($_POST)){
    $email = (isset($_POST['email']) ? $_POST['email'] : "");
    $to      = 'gismaining@yandex.ru, glazkis@yandex.ru'; // тут указываем адрес КОМУ мы отправляем письмо
    $subject = 'Заявка c сайта 4-btc.com'; // тема письма
    $br = "<br/>";
    $val = '<b>Имя:</b> '.$_POST['name'].$br;
    $phone = '<b>Телефон:</b> '.$_POST['tel'].$br;
//$email_message = '<b>email:</b> '.$email.$br;

    $headers  = "Content-type: text/html;\r\n";
    $headers .= 'From: webmaster@4-btc.com' . "\r\n" .
        'Reply-To: webmaster@4-btc.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $message =
        $val
        .$phone; // собственно, само письмо
    if (mail($to, $subject, $message, $headers)){
        $log = "\n------------------------\n";
        $log .= date("Y.m.d G:i:s") . "\n";
        $log .= (strlen($subject) > 0 ? $subject : 'DEBUG') . "\n";
        $log .= print_r($message, 1);
        $log .= "\n------------------------\n";
        file_put_contents(getcwd() . '/hook.log', $log, FILE_APPEND);
    } else{
        $log = "\n------------------------\n";
        $log .= date("Y.m.d G:i:s") . "\n";
        $log .= (strlen($subject) > 0 ? $subject : 'DEBUG') . "\n";
        $log .= print_r($message, 1);
        $log .= "\n------------------------\n";
        file_put_contents(getcwd() . '/hook_error.log', $log, FILE_APPEND);
    }
}

require_once 'access.php';
$domain = '4-btc.com';
$name = $_POST['name'];
$phone = $_POST['tel'];
$email = '';
$comment = $_POST['comment'];
$target = 'Форма с сайта '.$domain;
$company = 'Название компании';

$custom_field_id = 454021;
$custom_field_value = 'тест';

$ip = '1.2.3.4';

$price = 0;
$pipeline_id = 4647949;
//$user_amo = 7434610;
$user_amo = 7458826;


$utm_source   = $_POST['utm_source'];
$utm_content  = $_POST['utm_content'];
$utm_medium   = $_POST['utm_medium'];
$utm_campaign = $_POST['utm_campaign'];
$utm_term     = $_POST['utm_term'];
$utm_referrer = $_POST['utm_referrer'];

$data = [
    [
        "name" => $name,
        "price" => $price,
        "responsible_user_id" => (int) $user_amo,
        "pipeline_id" => (int) $pipeline_id,
        "_embedded" => [
//            "tags" => [
//                "id" => 152195
//            ],
            "metadata" => [
                "category" => "forms",
                "form_id" => 1,
                "form_name" => "Форма на сайте",
                "form_page" => $target,
                "form_sent_at" => strtotime(date("Y-m-d H:i:s")),
                "ip" => $ip,
                "referer" => $domain
            ],
            "contacts" => [
                [
                    "first_name" => $name,
                    "custom_fields_values" => [
                        [
                            "field_code" => "EMAIL",
                            "values" => [
                                [
                                    "enum_code" => "WORK",
                                    "value" => $email
                                ]
                            ]
                        ],
                        [
                            "field_code" => "PHONE",
                            "values" => [
                                [
                                    "enum_code" => "WORK",
                                    "value" => $phone
                                ]
                            ]
                        ]
//                        ,
//                        [
//                            "field_id" => (int) $custom_field_id,
//                            "values" => [
//                                [
//                                    "value" => $custom_field_value
//                                ]
//                            ]
//                        ]
                    ]
                ]
            ],
//            "companies" => [
//                [
//                    "name" => $company
//                ]
//            ]
        ],
        "custom_fields_values" => [
            [
                "field_code" => 'UTM_SOURCE',
                "values" => [
                    [
                        "value" => $utm_source
                    ]
                ]
            ],
            [
                "field_code" => 'UTM_CONTENT',
                "values" => [
                    [
                        "value" => $utm_content
                    ]
                ]
            ],
            [
                "field_code" => 'UTM_MEDIUM',
                "values" => [
                    [
                        "value" => $utm_medium
                    ]
                ]
            ],
            [
                "field_code" => 'UTM_CAMPAIGN',
                "values" => [
                    [
                        "value" => $utm_campaign
                    ]
                ]
            ],
            [
                "field_code" => 'UTM_TERM',
                "values" => [
                    [
                        "value" => $utm_term
                    ]
                ]
            ],
            [
                "field_code" => 'UTM_REFERRER',
                "values" => [
                    [
                        "value" => $utm_referrer
                    ]
                ]
            ],
        ],
    ]
];

$method = "/api/v4/leads/complex";

$headers = [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $access_token,
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
curl_setopt($curl, CURLOPT_URL, "https://infogiscorpru.amocrm.ru".$method);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_COOKIEFILE, 'amo/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, 'amo/cookie.txt');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
$out = curl_exec($curl);
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$code = (int) $code;
$errors = [
    301 => 'Moved permanently.',
    400 => 'Wrong structure of the array of transmitted data, or invalid identifiers of custom fields.',
    401 => 'Not Authorized. There is no account information on the server. You need to make a request to another server on the transmitted IP.',
    403 => 'The account is blocked, for repeatedly exceeding the number of requests per second.',
    404 => 'Not found.',
    500 => 'Internal server error.',
    502 => 'Bad gateway.',
    503 => 'Service unavailable.'
];

if ($code < 200 || $code > 204) die( "Error $code. " . (isset($errors[$code]) ? $errors[$code] : 'Undefined error') );


$Response = json_decode($out, true);
$Response = $Response['_embedded']['items'];
$output = 'ID добавленных элементов списков:' . PHP_EOL;
foreach ($Response as $v)
    if (is_array($v))
        $output .= $v['id'] . PHP_EOL;
return $output;