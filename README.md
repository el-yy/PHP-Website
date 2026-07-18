# PHP User Management System

A custom PHP and MySQL web application for managing users, admins, and members. It includes features for user registration, secure authentication, role-based dashboards, and complete CRUD (Create, Read, Update, Delete) operations on user profiles.

## Features

- **User Authentication**: Secure register, login, and logout flows.
- **Role-based Access Control**: Distinct templates and navigation panels for Admins, Members, and public guests.
- **User Management**: View, edit, and delete user profiles from the administration dashboard.
- **Dynamic Frontend**: Modern JavaScript-enhanced UI elements, custom slideshows, loading screens, and responsive styling.

## Repository Structure

- `index.php` - Homepage with dynamic news slideshow.
- `login.php` & `logout.php` - Session management and authentication.
- `register-page.php` - Public user registration form.
- `register-thanks.php` - Registration success landing page.
- `register-view-users.php` - Main table view for registered users (Admin access).
- `edit_user.php` & `delete_user.php` - Administrative management tools to update or delete member details.
- `admin_page.php` - Administrative dashboard.
- `member_page.php` & `member_page2.php` - User member dashboards.
- `mysqli_connect.php` - Database connection and configuration helper.
- `users.sql` - Database schema containing sample structures.
- `css/` - Styling and JavaScript modules:
  - `all.css` - Global style declarations.
  - `index.js`, `cars.js`, `member_page.js`, `member_page2.js`, `video-header.js` - Client-side interactive scripts.
- Layout Templates:
  - `header.php`, `footer.php`, `nav.php` - Public navigation layouts.
  - `admin_nav.php` - Admin-specific navigation layout.
  - `member_header.php`, `member_nav.php` - Member-specific layouts.

## Setup Instructions

1. **Database Configuration**:
   - Import the `users.sql` database schema into your local MySQL instance (e.g., via phpMyAdmin).
   - Verify connection settings in [mysqli_connect.php](file:///Users/jhonfiel/Downloads/OneDrive_1_12-27-2025/lavandero_CSE/mysqli_connect.php). The default database name is configured as `members_lavandero`.

2. **Web Server**:
   - Place this project directory within your PHP development environment root (e.g., `htdocs` in XAMPP, `www` in WampServer).
   - Start the Apache and MySQL services.
   - Navigate to `http://localhost/lavandero_CSE` (or equivalent local directory URL) in your browser.
