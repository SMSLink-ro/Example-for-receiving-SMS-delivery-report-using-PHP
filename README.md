# Example for receiving SMS delivery report using PHP & SMS Gateway (HTTP), SMS Gateway (SOAP), SMS Gateway (JSON) or SMS Gateway (BULK)

This is an example for receiving SMS delivery report using [SMSLink.ro](https://www.smslink.ro) API, called [SMS Gateway](https://www.smslink.ro/sms-gateway.html). This example applies to all SMS Gateway APIs, such as SMS Gateway (HTTP), SMS Gateway (SOAP), SMS Gateway (JSON) or SMS Gateway (BULK)

SMSLink.ro allows you to send SMS to all mobile networks in Romania and also to more than 168 countries and more than 1000 mobile operators worldwide. 

## Requirements & Usage

1. Create an account on [SMSLink.ro](https://www.smslink.ro/inregistrare/)
2. Create a SMS Gateway connection at [SMSLink.ro / SMS Gateway / Configuration & Settings](https://www.smslink.ro/sms/gateway/setup.php). Each SMS Gateway connection is a pair of Connection ID and Password. 
3. Choose your desired SMS Gateway API for sending SMS, such as SMS Gateway (HTTP), SMS Gateway (SOAP), SMS Gateway (JSON) or SMS Gateway (BULK).
3. Configure a public URL endpoint where SMSLink.ro will send each delivery report in a HTTP(S) GET request.

## Basic Parameters for the Delivery Report

- *message_id* the unique message ID provided by SMS Gateway when sending the SMS
- *status* 1 for Delivered SMS or 0 for Undelivered/Expired SMS
- *timestamp* the UNIX timestamp of the delivery report

## Optional Parameters for the Delivery Report

- *network_id* the ID of the network in which the SMS was delivered, see possible values for this parameter [here](https://www.smslink.ro/sms-gateway-documentatie-sms-gateway.html)
- *network_type* the type of the network in which the SMS was delivered, see possible values for this parameter [here](https://www.smslink.ro/sms-gateway-documentatie-sms-gateway.html)
- *delivery_report* the delivery report as received from the mobile network operator
      
In order to receive these additional parameters, you should activate this feature as described in the documentation, at the Delivery Report chapter, subchapter 2, located [here](https://www.smslink.ro/sms-gateway-raportul-de-livrare-al-sms-ului-transmis-prin-sms-gateway.html).

## Documentation

The [complete documentation](https://www.smslink.ro/sms-gateway-documentatie-sms-gateway.html) of the SMSLink - SMS Gateway API can be found [here](https://www.smslink.ro/sms-gateway-documentatie-sms-gateway.html), describing all available APIs (HTTP GET / POST, SOAP / WSDL, JSON and more).

## Additional modules and integrations

SMSLink also provides modules for major eCommerce platforms (on-premise & on-demand), integrations using Microsoft Power Automate, Zapier or Integromat and many other useful features. Read more about all available features [here](https://www.smslink.ro/sms-gateway.html). 

## Support

For technical support inquiries contact us at contact@smslink.ro or by using any other available method described [here](https://www.smslink.ro/contact.php).
