<div class="container">
    <div class="form-wrapper">
        <form action="./action_page.php" method="get" class="custom-form">
            <div class="form-group">
                <label for="name" class="form-label">Nom: </label>
                <input type="text" name="name" id="name" class="form-input" placeholder="Votre Nom..." required>
            </div>

            <div class="form-group">
                <label for="first-name" class="form-label">Prénom: </label>
                <input type="text" name="first-name" id="first-name" class="form-input" placeholder="Votre Prénom..." required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email:  </label>
                <input type="email" name="email" id="email" class="form-input" placeholder="email@email.com" required pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/">
            </div>

            <div class="form-group">
                <label for="age" class="form-label">Age: </label>
                <input type="number" id="age" name="age" class="form-input" min="10" max="120" placeholder="10 - 120" required>
            </div>

            <div class="form-group">
                <label for="country" class="form-label">Votre Pays: </label>
                <select name="country" id="country" class="form-input">
                    <option value="1">France</option>
                    <option value="2">Belgique</option>
                    <option value="3">Autre</option>
                </select>
            </div>

            <div class="form-group button">
                <input type="submit" class="form-submit" value="Submit">
            </div>
        </form>
    </div>
</div>
