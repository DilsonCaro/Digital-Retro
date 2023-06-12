<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  </head>
    <script src="https://www.paypal.com/sdk/js?client-id=AdZV8c-ul9_9BWN3K2L2s2XeqYMGp7X6wVABZ9FwL_AehR3yr5pL0KKFPV0nseh9k8mc0YwUX0kW1oVm"> // Replace YOUR_CLIENT_ID with your sandbox client ID
    </script>

  <body>

    <div id="paypal-button-container"></div>

    <script>
        paypal.Buttons({
            style:{
                color:'blue',
                shape:'pill',
                label:'pay'
            },
            createOrder:function(data, actions){
                return actions.order.create({
                    purchase_units: [{
                        amount:{
                            value:100
                        }
                    }]
                });
            },
            onApprove: function(data, actions){
                actions.order.capture().then(function (detalles) {
                    console.log(detalles);
                    
                });
            },
            onCancel: function(data){
                alert("pago cancelado");
                console.log(data);
            }
        }).render('#paypal-button-container');

    </script>
  </body>
</html>