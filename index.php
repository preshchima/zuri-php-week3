<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Register page</title>
  </head>
  <body>
    <main class="signup-form">
      <form action="./user_data.php" method="POST">
        <h2>Register</h2>
        <p class="hint-text">
          Create your account. It's free and only takes a minute.
        </p>
        <div class="form-group">
          <input
            type="text"
            class="form-control"
            name="name"
            placeholder="Your name"
            required
          />
        </div>

        <div class="form-group">
          <input
            type="email"
            class="form-control"
            name="email"
            placeholder="example@mail.com"
            required
          />
        </div>
        <div class="form-group">
          <input
            type="text"
            class="form-control"
            name="country"
            placeholder="Country name"
            required
          />
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col">
              <label class="form-label" for="gender">Gender</label>

              <select name="gender" id="gender" required>
                <option value="">--Select gender--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>

            <div class="col">
              <label for="dob" class="form-label">Date of Birth</label>

              <input
                type="date"
                name="dob"
                value="2022-10-16"
                class="form-control"
                required
              />
            </div>
          </div>
        </div>

        <div class="form-group form-btn">
          <button type="submit" class="btn">Register Now</button>
        </div>
      </form>
      <p class="hint-text">
        Already have and account? <a href="./loginPage/login.html">Sign in</a>.
      </p>
    </main>
  </body>
</html>
