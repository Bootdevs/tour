
    <footer>
       <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 mt-5">
            <img src="./images/binocular.png" alt="" width="60" height="60">
                <p>Explore the beautiful city of Winnipeg with us. Our tour agency offers exciting travel experiences to destinations near and far. Discover new cultures, cuisines, and adventures with our expert guides. Book your next adventure today!</p>
                <label for="" style="color:black">Newletter</label>
                <form action="">
                    <input type="text" placeholder="Your email">
                    <button class="btn btn-dark">Submit</button>
                </form>
            </div>
            <div class=" pages col-sm-12  col-md-6 col-lg-3 mt-5">
                <h4 style="color:black">PAGES</h4>
                <div class="col-sm-12 ">
                    <a href="./about.php">About</a>
                    <a href="./contact.php">Contact</a>
                </div>
            </div>
            <div class=" contact col-sm-12  col-md-6 col-lg-3 mt-5 ">
            <h4 style="color:black">Contact</h4>
            <div class="row">
                <div class="col-sm-12 mb-2">
                     <span>Winnipeg,Canada</span>
                </div>
                <div class="col-sm-12 mb-2">
                    <span>+1 (444) 444-4444</span>
                </div>
                <div class="col-sm-12 contact">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-whatsapp"></i>
                </div>
            </div>
         </div>
        </div>
       </div>

       <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    </footer>
<script>
    // Get the button
var myButton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    myButton.style.display = "block";
  } else {
    myButton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

</script>
</body>
</html>