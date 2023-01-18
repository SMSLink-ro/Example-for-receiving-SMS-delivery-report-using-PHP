<?php

/*

  Receiving SMS Delivery Report using PHP

  This example illustrates receiving a Delivery Report for a SMS sent to a mobile subscriber using SMSLink SMS Gateway API,
  SMS Gateway (HTTP), SMS Gateway (SOAP), SMS Gateway (JSON) or SMS Gateway (BULK)
  
  This script should be availabile to a public URL using HTTP/HTTPS protocol and must accept HTTP(S) requests from SMSLink. 

  Delivery Reports parameters are sent by default as HTTPS(S) GET parameters, but you may choose between HTTPS(S) GET and 
  HTTPS(S) POST parameters, by changing the corresponding setting in your SMSLink account.

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
      connection_id   - the Connection ID which was used to send the SMS
      message_count   - the count of SMS segments for the SMS (values can be 1 for a SMS up to 160 characters or a 
                        larger value for concatenated SMS, longer that 160 characters)
      
    In order to receive these additional parameters, you should activate this feature as described in the documentation, 
    at the Delivery Report chapter, subchapter 2, located here: https://www.smslink.ro/content.php?content_id=126

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