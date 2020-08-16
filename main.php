<?php

/*

  Receiving SMS delivery report using PHP

*/

if ((isset($_GET["message_id"])) and (isset($_GET["status"])) and (isset($_GET["timestamp"])))
{
  /*

    Message ID from SMSLink, that is provided when the message is sent, and is unique for each message sent.
    For storing Message ID in the database, we recomment using unsigned BIGINT.

  */
  $message_id     = $_GET["message_id"];  

  /*

    Message Status can have the following values:
      1 for Delivered SMS
      0 for Undelivered SMS

  */
  $status         = $_GET["status"];

  /*

    Timestamp is the Date & Time of the Delivery Report event, in UNIX Timestamp format.

  */
  $timestamp      = $_GET["timestamp"]; 

  /*

    Optional additional parameters are also available, such as    

      network_id      - the ID of the network in which the SMS was delivered
      network_type    - the type of the network in which the SMS was delivered
      delivery_report - the delivery report as received from the mobile network operator
      
    In order to receive thise additional parameters, you should activate this feature as descrived in the documentation, at the Delivery Report chapter, subchapter 2, located here: https://www.smslink.ro/content.php?content_id=126

  */

  /*

    Saving Delivery Report in a local text file as an example

  */

  $handler = fopen("delivery-reports-".date("d-m-Y", $timestamp)."txt", "a+");

  fwrite($handler, 
            "Delivery Report for Message ID: ".$message_id.": ".
            "Delivery Status: ".(($status == 1) ? "Delivered" : "Undelivered").", ".
            "Date / Time: ".date("d-m-Y H:i", $timestamp).
            "\r\n"
    );

  fclose($handler);

}
    
?> 