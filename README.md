# Hafsa - Islamic Center Website Template

A comprehensive HTML template designed for Islamic centers, mosques, and charitable organizations. This template provides a modern, responsive interface for religious and charitable activities.

## Features

- Responsive Design
- Prayer Times Display
- Donation System Integration
- Islamic Programs & Events Management
- Scholar Profiles
- Blog Section
- Newsletter Subscription
- Interactive Dashboard
- User Authentication System

## Tech Stack

- HTML5
- CSS3/SASS
- JavaScript/jQuery
- PHP (for backend functionality)
- MySQL (database)
- Bootstrap Framework
- Font Awesome Icons
- ICOFont Icons

## Key Components

1. **Frontend Pages**
   - Home Page (`index.html`)
   - About Page (`about.html`)
   - Programs Page (`programs.html`)
   - Sermons Page (`sermons.html`)
   - Blog Page (`blog.html`)
   - Contact Page (`contact.html`)
   - Scholar Profiles (`scholar.html`)
   - Login Page (`login.html`)
   - 404 Error Page (`404.html`)
   - Coming Soon Page (`coming-soon.html`)

2. **Backend Components**
   - User Dashboard (`dashboard.php`)
   - Database Configuration (`db_config.php`)
   - Authentication System

3. **Asset Structure**
   ```
   assets/
   ├── css/
   ├── js/
   ├── sass/
   ├── images/
   └── fonts/
   ```

## Installation

1. Clone the repository
2. Set up your web server (Apache/Nginx)
3. Configure the database:
   - Import the database schema
   - Update `db_config.php` with your credentials
4. Ensure proper permissions for file uploads
5. Configure your web server to point to the project directory

## Database Setup

```sql
-- Basic database structure required
CREATE DATABASE hafsa_db;
USE hafsa_db;

-- Create necessary tables (users, blogs, etc.)
-- Refer to schema documentation
```

## Usage

1. **Frontend Access**
   - Navigate to `index.html` for the main website
   - Access different sections through the navigation menu

2. **Admin Access**
   - Login through `login.html`
   - Access dashboard at `dashboard.php`
   - Manage content, users, and settings

## Customization

- Modify `assets/css/style.css` for styling changes
- Update `assets/sass/style.scss` for SASS modifications
- Customize JavaScript functionality in `assets/js/functions.js`
- Modify PHP files for backend functionality changes

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This template is licensed under the [Template License Name]. See `LICENSE` file for details.

## Credits

- Design & Development: LabArtisan
- Framework: Bootstrap
- Icons: Font Awesome, ICOFont
- Images: [Source Credits]

## Support

For support, email [support@example.com] or create an issue in the repository.

## Version

Current Version: 1.0.0
