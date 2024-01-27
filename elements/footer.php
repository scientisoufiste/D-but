</main>

<footer>
<hr>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form action="/newsletter.php" method="post" class="form-inline">
      <div class="form-group">
          <input type="email" name="email" placeholder="Entrez votre email" require class=" form-control">
      </div>
      <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
  </div>
  <div class="col-md-4">
    <h5>Navigation</h5>
    <ul class="list-unstyled text-small">
      <?= nav_menu (); ?>
    </ul>
  </div>
</div>
</footer>
    <script src="js/bootstrap.bundle.min.js"></script>

      
</body>
</html>
