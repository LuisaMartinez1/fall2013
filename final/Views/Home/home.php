<style type="text/css">
	#item-list .well img {
                width: 200px;
                height: 200px;
                margin: 5px;
                float: left;
                
                border-style:solid;
    			border-color: #989898 ;
				border-width:5px;
				border-radius:25px;             
    }
 	#shopping-cart-list {
                position: fixed;
                right:  0px;
                top:    20%;
                bottom: 30%;
                height: 60%;
                width:  200px;
                background: #FFFFFF;
                border-radius: 5px 0px 0px 5px;
                border: 1px solid #000;
                padding: 5px;
                transition: right .5s;
                -webkit-transition: right .5s;
     } 
	.closed#shopping-cart-list {
                right: -180px;
     } 
     #shopping-cart-list .scrolling {
                overflow-y: scroll;
                height: 92.5%;
                border-bottom: 1px solid black;
     }  
 	#shopping-cart-list img {
                float: left;
                width: 30px;
                height: 30px;
     }    
     #price{
     	font-size:18px; 
     	color: #A80000 
     }
     #name{
     	font-family:"Franklin Gothic Medium", "Franklin Gothic", Arial, sans-serif;
     	font-size:15px; 
     	color:#000066;
     }
        
</style>

<div class="container">
   <div id ="category-list">
      <ul class="nav nav-pills" data-bind="foreach: categories">
          <li data-bind="css: {active:$data == $root.currentCategory() }">
              <a href="#" data-bind="text: CategoryName, click: $root.categoryClicked">
                 Cat1
              </a>
          </li>
      </ul>
  </div>
  <br>
  <br>      
  <div  class = "row" id ="item-list" data-bind="foreach: products">
  	<div class="col-sm-3" >
       <div class="well clearfix">
       	 <img alt="item image" data-bind="attr: {src: imagesrc}" />
         <h5 data-bind="text: ItemName" id="name"></h5> 
          <p data-bind="text: description"></p>
          <span id ="price">$</span><span data-bind="text: ItemPrice" id="price"></span>
          <buttton class="btn btn-success pull-right" data-bind="click: $root.addToCart">
         	 <span class="glyphicon glyphicon-shopping-cart"></span>
             Add To Cart
          </button>
       </div>
    </div>
  </div>



<div id="shopping-cart-list" class="closed" >
	 <div class="scrolling"  data-bind="foreach: cart" >
	 	<div class="well well-sm clearfix">
	 		<img alt="item image" data-bind="attr: {src: imagesrc}" />
              <h6 data-bind="text: ItemName"></h6>
              $<span data-bind="text: ItemPrice"></span>
               <button class="btn btn-warning btn-sm pull-right" data-bind="click: $root.removeFromCart">
                   <span class="glyphicon glyphicon-shopping-del"></span>
                    Remove
               </button>
        </div>
     </div>
     <div>
         <span id="price"> Total: $ <span data-bind="text: cartTotal"></span></span>
         <button type="button" class="btn btn-success pull-right"  href = "?action=verify&i&format=dialog" data-toggle="modal" data-target="#myModal">CheckOut</button>       
     </div>	
</div>
<div id ="myModal" class="modal fade"  data-backdrop = "static"></div>
</div>


<script type="text/html" id="shopping-cart-template">
   <span class="glyphicon glyphicon-shopping-cart"></span>
        <a href="#" class ="navbar-link" data-bind="click: toggleCartList">Cart</a>
         <span class="badge" data-bind="text: cart().length"></span>
</script>
        
        
 <? function Scripts(){ ?>
        <? global $model; ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
      
        <script type="text/javascript">
       		<?include_once '../../script/main.js';?>
         </script>
 <? } ?>