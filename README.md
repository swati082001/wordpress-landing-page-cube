# WordPress Site Setup Instructions

## Requirements
- [XAMPP](https://www.apachefriends.org/) (includes Apache and MySQL)

## Setup Instructions

1. **Clone or download** this repository.

2. **Copy** the contents of the `wordpress-site-files` folder into your XAMPP `htdocs` directory:
   - Example: `C:\xampp\htdocs\wordpress`

3. **Start XAMPP** and run both **Apache** and **MySQL**.

4. **Create a new database** in phpMyAdmin:
   - Go to: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Click **New**
   - Enter a name like `my_site_db`
   - Click **Create**

5. **(Optional)**: Create a MySQL user if not using `root`:
   - Go to **User accounts**
   - Click **Add user**
     - **Username**: `admin`
     - **Password**: `admin`
     - **Host**: `localhost`
   - Check **Grant all privileges on database `my_site_db`**
   - Click **Go**

6. **Import the database**:
   - Select the newly created database
   - Click **Import**
   - Choose the file `wordpress-database.sql`
   - Click **Go**

7. **Access the website**:
   - Open: [http://localhost/wordpress](http://localhost/wordpress)

8. **Log into the WordPress Dashboard**:
   - Go to: [http://localhost/wordpress/wp-admin](http://localhost/wordpress/wp-admin)

---

## Credentials

**Database (MySQL):**
- **Username:** `admin`
- **Password:** `admin`

**WordPress Admin:**
- **Username:** `admin`
- **Password:** `admin`

---

## Notes

- Make sure `mod_rewrite` is enabled in Apache if you're using permalinks:
  - In `httpd.conf`, uncomment: `LoadModule rewrite_module modules/mod_rewrite.so`
  - Set `AllowOverride All` for your site directory in the `<Directory>` block.
