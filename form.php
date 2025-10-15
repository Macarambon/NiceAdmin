<section class="section">
  <div class="row">

    <!-- Left Side: About Myself Form -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">About Myself</h5>

          <!-- About Myself Form -->
          <form action="" method="POST">
            <div class="row mb-3">
              <label for="inputName" class="col-sm-3 col-form-label">Full Name</label>
              <div class="col-sm-9">
                <input type="text" name="fullname" class="form-control" id="inputName" placeholder="Enter your full name"
                  value="<?= isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : '' ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter your email"
                  value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputAge" class="col-sm-3 col-form-label">Age</label>
              <div class="col-sm-9">
                <input type="number" name="age" class="form-control" id="inputAge" placeholder="Enter your age"
                  value="<?= isset($_POST['age']) ? htmlspecialchars($_POST['age']) : '' ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputColor" class="col-sm-3 col-form-label">Favorite Color</label>
              <div class="col-sm-9">
                <input type="color" name="color" class="form-control form-control-color" id="inputColor"
                  value="<?= isset($_POST['color']) ? htmlspecialchars($_POST['color']) : '#4154f1' ?>">
              </div>
            </div>

            <div class="row mb-3">
              <legend class="col-form-label col-sm-3 pt-0">Hobbies</legend>
              <div class="col-sm-9">
                <?php $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : []; ?>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="hobbies[]" value="Reading" id="hobby1"
                    <?= in_array('Reading', $hobbies) ? 'checked' : '' ?>>
                  <label class="form-check-label" for="hobby1">Reading</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="hobbies[]" value="Traveling" id="hobby2"
                    <?= in_array('Traveling', $hobbies) ? 'checked' : '' ?>>
                  <label class="form-check-label" for="hobby2">Traveling</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="hobbies[]" value="Sports" id="hobby3"
                    <?= in_array('Sports', $hobbies) ? 'checked' : '' ?>>
                  <label class="form-check-label" for="hobby3">Sports</label>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Gender</label>
              <div class="col-sm-9">
                <select class="form-select" name="gender">
                  <option <?= (!isset($_POST['gender']) || $_POST['gender'] === 'Select gender') ? 'selected' : '' ?>>Select gender</option>
                  <option value="Male" <?= (isset($_POST['gender']) && $_POST['gender'] === 'Male') ? 'selected' : '' ?>>Male</option>
                  <option value="Female" <?= (isset($_POST['gender']) && $_POST['gender'] === 'Female') ? 'selected' : '' ?>>Female</option>
                  <option value="Prefer not to say" <?= (isset($_POST['gender']) && $_POST['gender'] === 'Prefer not to say') ? 'selected' : '' ?>>Prefer not to say</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputBio" class="col-sm-3 col-form-label">Bio</label>
              <div class="col-sm-9">
                <textarea class="form-control" name="bio" id="inputBio" rows="3" placeholder="Write something about yourself..."><?= isset($_POST['bio']) ? htmlspecialchars($_POST['bio']) : '' ?></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Submit</label>
              <div class="col-sm-9">
                <button type="submit" class="btn btn-primary">Save Info</button>
              </div>
            </div>
          </form><!-- End About Myself Form -->

        </div>
      </div>
    </div>

    <!-- Right Side: Display Information -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">My Information</h5>

          <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <p><strong>Full Name:</strong> <?= htmlspecialchars($_POST['fullname']); ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($_POST['email']); ?></p>
            <p><strong>Age:</strong> <?= htmlspecialchars($_POST['age']); ?></p>
            <p><strong>Favorite Color:</strong>
              <span style="color:<?= htmlspecialchars($_POST['color']); ?>;">
                <?= htmlspecialchars($_POST['color']); ?>
              </span>
            </p>
            <p><strong>Hobbies:</strong>
              <?= !empty($_POST['hobbies']) ? implode(', ', $_POST['hobbies']) : 'None'; ?>
            </p>
            <p><strong>Gender:</strong> <?= htmlspecialchars($_POST['gender']); ?></p>
            <p><strong>Bio:</strong></p>
            <p class="text-secondary"><?= nl2br(htmlspecialchars($_POST['bio'])); ?></p>

          <?php else: ?>
            <p><strong>Full Name:</strong> <span class="text-secondary">______________________</span></p>
            <p><strong>Email:</strong> <span class="text-secondary">______________________</span></p>
            <p><strong>Age:</strong> <span class="text-secondary">______________________</span></p>
            <p><strong>Favorite Color:</strong> <span class="text-secondary">______________________</span></p>
            <p><strong>Hobbies:</strong> <span class="text-secondary">______________________</span></p>
            <p><strong>Gender:</strong> <span class="text-secondary">______________________</span></p>
            <p><strong>Bio:</strong></p>
            <p class="text-secondary">___________________________________________________</p>
          <?php endif; ?>
        </div>
      </div>
    </div>

  </div>
</section>
