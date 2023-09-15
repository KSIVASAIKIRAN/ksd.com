<div class="footer">
	<p>Designed, Developed and Hosted by Softpath Tech Solutions Pvt Ltd.<br>

KANDALA ENTERTAINMENT</p>
</div>
	
	
	
	
 <script src="{{URL::asset('public/tsfdc/js/jquer.min.js')}}" type="text/javascript"></script> 
<script src="{{URL::asset('public/tsfdc/js/bootstrap.bundle.min.js')}}	" type="text/javascript"></script>
<script src="{{URL::asset('public/tsfdc/js/aos.js')}}"></script>
<script src="{{URL::asset('public/tsfdc/js/owl.carousel.js')}}"></script>
<script src="{{URL::asset('public/tsfdc/js/gallery.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('public/tsfdc/js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('public/tsfdc/js/gridify.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('public/tsfdc/js/jquery.totemticker.min.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
        integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
        crossorigin="anonymous"></script>		
  	


<script type="text/javascript">
 	 
/////////////   Font Size increase and Font Size decrease - Code Start From here ///////////////////////
  $( document ).ready(function() {
   // var $affectedElements = $(".wrapper, #page, li, p, a, .container, #page"); // Can be extended, ex. $("div, p, span.someClass")
   
    var $affectedElements = $(".inde-font");

var counter_add=1;
var counter_sub=1;  
// Storing the original size in a data attribute so size can be reset


$affectedElements.each( function(){
  var $this = $(this);
  $this.data("orig-size", $this.css("font-size") );
});


$("#btn-increase").click(function(){

if(counter_add<3)
{
  changeFontSize(1);
counter_add=counter_add+1;
counter_sub=counter_sub-1;
}
})

$("#btn-decrease").click(function(){
if(counter_sub<3)
{
  changeFontSize(-1);
  counter_sub=counter_sub+1;
counter_add=counter_add-1;
}
})

$("#btn-orig").click(function(){
  $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , $this.data("orig-size") );
        counter_add=1;
      counter_sub=1;
   });
})

function changeFontSize(direction){
    $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , parseInt($this.css("font-size"))+direction );
    });
}
});
 
/////////////////////// Font Size increase and Font Size decrease - Code End Here ///////////////////////////

 
</script>	

<script>

$( document ).ready(function() {

	$( "#submit" ).click(function() {	
		
		
		var pwd = $('#password').val();
         $('#password1').val(btoa(pwd));	

	}); 
	
	
`use strict`;
function refreshTime() {
  const timeDisplay = document.getElementById("time");
  const dateString = new Date().toLocaleString();
  const formattedString = dateString.replace(", ", " - ");
  timeDisplay.textContent = formattedString;
}
  setInterval(refreshTime, 1000);

	
	
    $('.owl-carousel').owlCarousel({
        items:1,
        merge:true,
        loop:true,
        margin:10,
        video:true,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:2
            },
            600:{
                items:4
            }
        }
    })	
	
	
 
	
    
});
</script>


</body>
</html>