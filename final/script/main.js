 $(function(){
                 var vm = {
                         categories: ko.observableArray(),
                         products: ko.observableArray(),
                         currentCategory: ko.observable(),
                         cart : ko.observableArray(),
                         
                         categoryClicked: function() {
                                 $.getJSON("?action=products&format=json",{Categories_id: this.id } ,function(results){
                                         vm.products(results.model);
                                 })
                                 
                       },
                       addToCart : function(){
                       		vm.cart.push(this);
                       },
                       removeFromCart: function(){
                       		vm.cart.remove(this);
                       },
                       toggleCartList: function(){
                       		$("#shopping-cart-list").toggleClass("closed");
                       }
                         
                 }
                 vm.cartTotal = ko.computed(function(){
                 	var tot = 0;
                 	$.each(vm.cart(), function(i,x){
                 		tot += +x.ItemPrice;
                 		
                 	})
                 	
                 	return tot;
                 })               
                 ko.applyBindings(vm);
                 $("#shopping-cart").html($("#shopping-cart-template").html())
                 ko.applyBindings(vm, $("#shopping-cart")[0]);
                 
                	 $.get("?action=categories&format=json",null, null, 'json')
                	 	.always(function(results){
                         	vm.categories(results.model);
                 })
         });