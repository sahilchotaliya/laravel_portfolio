

<!-- typed.js -->
<script src="assets/vendor/typed.js/typed.min.js"></script>
<script type="text/javascript">
  var typed = new Typed('.typing',{
    strings: ["Pythonist", "Developer", "Fast Learner"],
    loop: true,
    typeSpeed: 80,
    backSpeed: 40
  });
</script>


<!-- jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Materialize - Compiled and minified JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js"></script>
<script>
  // Materialize - Initializers
  $(document).ready(function () {
    $(".scrollspy").scrollSpy()
    // Initialize collapse button
    $(".button-collapse").sideNav({
      menuWidth: 190, // Default is 240
      edge: "left", // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    })
  })
</script>
</body>

</html>
