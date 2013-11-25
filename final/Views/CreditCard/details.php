<div class="container">
        <dl class="dl-horizontal">
         <dt>User</dt>
         <dd><?=$model['Fall2013_Users']?></dd>
         <dt>CardNumber</dt>
         <dd>XXXX-XXXX-XXXX-<?=substr($model['CreditCardNumber'],-4);?></dd>
         <dt>Card holder's Name</dt>
         <dd><?=$model['CreditCardHolderName']?></dd>
         <dt>Expiration Date</dt>
         <dd><?=$model['CreditExpirationDate']?></dd>
         <dt>Method</dt>
         <dd><?=$model['Method']?></dd>
        </dl>
</div>