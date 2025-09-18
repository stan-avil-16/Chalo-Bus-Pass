# Chalo — MCA Minor Project (Semester 1)

A simple PHP + MySQL web project inspired by the Chalo bus travel experience. It showcases pages for Chalo Card, Mobile Pass, Mobile Ticket, Gallery, and a basic payment flow.

## Features
- Landing page with sections for Chalo Card and Mobile Pass
- Static gallery and city listings
- Basic authentication and payment handlers (PHP includes)
- Modular header and footer includes

## Tech Stack
- HTML, CSS, JavaScript
- PHP (procedural, includes)
- MySQL (via `mysqli`)

## Local Setup
1. Requirements
   - PHP 8+ and MySQL (XAMPP/WAMP/Laragon recommended)
   - Git (optional but recommended)

2. Clone the repository
   ```bash
   git clone <your-repo-url>.git
   cd Chalo
   ```

3. Create the database
   - Import `chalo.sql` into MySQL to create the `chalo` database and tables.
   - Default DB settings are in `dbfiles/dbh.inc.php`:
     - host: `localhost`
     - user: `root`
     - password: empty
     - database: `chalo`
   - Adjust these in `dbfiles/dbh.inc.php` if your local credentials differ.

4. Serve the app
   - Place the project folder under your server root (e.g., `htdocs` for XAMPP).
   - Start Apache and MySQL.
   - Visit `http://localhost/Chalo/index.php`.

## Project Structure (key files)
```
README.md
index.php
include/
  header.php
  footer.php
dbfiles/
  dbh.inc.php
  functions.inc.php
  login.inc.php
  logout.inc.php
  payment.inc.php
  signup.inc.php
css/
JS/
Images/
Home_Add/
chalo.sql
```

## Environment/Config
- Database credentials are hard-coded in `dbfiles/dbh.inc.php` for simplicity.
- For production, consider moving secrets to environment variables and using prepared statements throughout.

## Common Tasks
- Import DB again: re-run `chalo.sql` in your MySQL client.
- Change DB name/user: update `dbfiles/dbh.inc.php`.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
Educational use only. Add a license if you plan to distribute.
