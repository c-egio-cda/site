<div class="container">
    <div class="form-wrapper">
        <form action="./actions/action-login.php" method="post" class="custom-form">
            <div class="form-group">
                <label for="email" class="form-label">Email: </label>
                <input type="email" name="email" id="email" class="form-input" placeholder="email@email.com" required pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/">
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password: </label>
                <input type="password" name="password" id="password" class="form-input" placeholder="Votre mot de passe..." required>
            </div>

            <div class="form-group button">
                <input type="submit" class="form-submit" value="Submit">
            </div>
        </form>
    </div>
</div>