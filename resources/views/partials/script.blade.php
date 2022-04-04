<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <!-- Transparan to solid navbar -->
    <script>
        $(window).scroll(function() {
        if ($(window).scrollTop() >= 500) {
            $('.navbar').css('background-color', 'white');
            $('.a').css('color', '#2196f3');
            $('.navbar').css('box-shadow', '0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)');
        } else {
            $('.navbar').css('background-color', 'transparent');
            $('.a').css('color', 'white');
            $('.navbar').css('box-shadow', 'none');
        }
        });
    </script>
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        }
        function myFunction1() {
        document.getElementById("myDropdown2").classList.toggle("showing");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            }
        }
        }
    </script>
    <script>
    $(document).ready(function() {
    $(window).scroll( function(){
        $('.hideme').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            var Top_of_object = $(this).offset().top ;
            var Top_of_window = $(window).scrollTop();
            if(( bottom_of_window > (Top_of_object -200)) && (Top_of_window < (bottom_of_object+250))){
                $(this).addClass('showme');
            }
            
            if( Top_of_window > (bottom_of_object-249) ||(Top_of_object+199)>bottom_of_window){
                $(this).removeClass('showme');
            }
            
            });
        });
    });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>