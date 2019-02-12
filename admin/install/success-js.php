		<!-- this javascript file for progress bar success -->
		<script>
		    var elem = document.getElementById('myBar'); 
		    var width = 20;
		    var id = setInterval(frame, 25);
		    function frame() {
		        if (width >= 100) {
		            clearInterval(id);
		        } else if(width >= 99) {
		            width++;
		            elem.style.width = width + '%'; 
		            elem.innerHTML = '<span class="fa fa-check color-green-feb"><strong> Congratulation!</strong> Database is now connected. ' + width * 1 + '%' + '</span>';
		                var element = document.getElementById('myBar');
    					element.classList.remove('active');
    					element.classList.remove('failled_bar');
		        } else{
		        	width++;
		            elem.style.width = width + '%'; 
		            elem.innerHTML = '<span>Connecting...' + width * 1 + '%' + '</span>';
		            var element = document.getElementById('myBar');
		            element.classList.add('failled_bar');
		        }
		    }
		</script>