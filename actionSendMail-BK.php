<?php
    if (isset($_POST['submit'])){

        require_once "function.php";

        //$mail_product = 'produce-ml@wagokoro.co.jp';
        $mail_product = 'chiennguyen1702@gmail.com';
        $name_product= '箸のOEM製造・製作なら 株式会社和心へ';
        $subject = 'お問い合わせフォーム - 箸のOEM製造・製作なら 株式会社和心へ';

        $name_client = !empty($_POST['your-name']) ? $_POST['your-name'] : '';
        $mail_client = !empty($_POST['your-email']) ? $_POST['your-email'] : '';
        $tel_client = !empty($_POST['your-tel']) ? $_POST['your-tel'] : '';
        $company_client = !empty($_POST['your-company']) ? $_POST['your-company'] : '';
        $message = !empty($_POST['message']) ? $_POST['message'] : '';

        $content = "<p>会社名: $company_client </p>
                        <p>ご担当者様: $name_client </p>
                        <p>電話番号: $tel_client</p>
                        <p>メール: $mail_client</p>
                        <p>その他ご要望など:</p>
                        <p>$message</p>
                        </br>
                        <p>--</p>
                        <p>このメールは 箸のOEM製造・製作なら 株式会社和心へ (https://oemchopsticks.com/) のお問い合わせフォームから送信されました</p>
                        ";

        if(!empty($mail_client) && !empty($name_client) && !empty($tel_client)){

            try {
                $isSendOk = send($mail_product, $mail_client, $subject, $content);
                if($isSendOk){
                    header("Location: thanks.php");
                    exit();
                }
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
    }