First you need to build and launch a container
```
docker-compose up -d --build
```
Then enter to php-container
```
docker-compose exec php sh
```
Run migrations 
```
php artisan migrate
```
After that create test orders
```
php artisan db:seed
```

check in browser http://localhost:8080/

Then you should to send from Postman post request at this url:
http://localhost:8080/api/orders/

example of the body:
```
{
   "pay_form":{
      "token":"xxx",
      "design_name":"des1"
   },
   "error":{
      "code":"6.01",
      "messages":[
         "Unknown decline code"
      ],
      "recommended_message_for_user":"Unknown decline code"
   },
   "order":{
      "order_id":"6bedebc7-fb91-4972-930c-ad1244a4fe49",
      "status":"declined",
      "amount":2345,
      "refunded_amount":0,
      "currency":"USD",
      "marketing_amount":2345,
      "marketing_currency":"USD",
      "processing_amount":2345,
      "processing_currency":"USD",
      "descriptor":"FAKE_PSP",
      "fraudulent":false,
      "total_fee_amount":0,
      "fee_currency":"USD"
   },
   "transaction":{
      "id":"10c6f87b-3479-44a3-8ac8-520bf02c8418",
      "operation":"pay",
      "status":"fail"
   }
}
```

You need to change order->order_id and order->status for correct testing.
order_id should be from table from page http://localhost:8080/

Status can be success, declined or fail