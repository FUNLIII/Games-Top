<footer>
        <!-- Recenzia -->
        <div>
        <p id="feedback">Napíšte recenziu</p>
        <form method="post" action="thanks.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Meno</label>
                <input required type="text" class="form-control border border-1 border-dark">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input required type="email" class="form-control border border-1 border-dark" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label ">Poznámka</label>
                <textarea required class="form-control border border-1 border-dark" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            <div class="mb-3">
                <input required class="form-check-input border border-1 border-dark" type="checkbox" id="autoSizingCheck2">
                <label required class="form-check-label" for="autoSizingCheck2">Súhlas so spracovaním osobných údajov</label>
                </div>
            <div class="mb-3">
                <button class="btn btn-dark" role="button" type="submit">Odoslať</button>
                </div>
            </div>
        </form>
        
        <!-- Informácií -->
        <div id="inform">
            <p class="absolutee">Informácií</p>
            <img src="Img/Logo.png" alt="Banner" width="30%" height="30%">
        </div>
        <p class="email">Email:  <a id="email" href="mailto:example@gmail.com">oleh.zub@student.ukf.sk</a></p>
        <p class="telefon">Telefon:  <a id="tel" href="tel:+74951111111">+421 950 712 920</a></p>
        <p class="telefon">&copy; Topgames.com</p>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
