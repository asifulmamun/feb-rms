		<!-- this javascript file for progress bar failled -->
		<script>
		    var elem = document.getElementById('failledbar'); 
		    var width = 20;
		    var id = setInterval(frame, 25);
		    function frame() {
		        if (width >= 99) {
		            clearInterval(id);
		        } else if(width >= 98) {
		            width++;
		            elem.style.width = width + '%'; 
		            elem.innerHTML = '<span class="fa fa-times"><strong> Failled!</strong> Database is not connected. ' + width * 1 + '%' + '</span>';
		                var element = document.getElementById('failledbar');
    					element.classList.remove('active');
    					element.classList.remove('failled_bar');
    					element.classList.add('failled_bar_after');
		        } else{
		        	width++;
		            elem.style.width = width + '%'; 
		            elem.innerHTML = '<span>Connecting...' + width * 1 + '%' + '</span>';
		        }
		    }
		</script>