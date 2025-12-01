# 🧭 CareerCompass - Career Development Platform

A comprehensive career development platform designed to help users navigate their professional journey. Features AI-powered career assessments, personalized roadmap generation, job listings with skill matching, and role-based access control.

## ✨ Features

### For Job Seekers

- 📝 Interactive career assessment questionnaire
- 🤖 AI-powered career recommendations using Google Gemini
- 🗺️ Personalized learning roadmap generation
- 💼 Browse job listings with skill-based matching
- 🔖 Save and bookmark jobs for later
- 📄 Apply to jobs with resume upload
- 📊 Track application history

### For HR/Recruiters

- ➕ Post new job listings
- 📈 Track applicants and manage listings
- 🏷️ Add skill requirements to jobs
- ⏰ Set job expiration dates
- 👥 View candidate applications

### For Admins

- 👤 User management and role assignment
- 🔐 Platform-wide access control
- 📊 Overview of all job listings
- ⚙️ System configuration

### UI/UX

- 🎨 Clean, modern design with Tailwind CSS
- 📱 Fully responsive (mobile-first)
- 🌐 Intuitive navigation
- ⚡ Fast page loads

## 🚀 Quick Start

### Prerequisites

- PHP 7.4+
- MySQL 5.7+
- Apache/Nginx or XAMPP
- Google Gemini API key (for AI features)

### Installation

```bash
# Clone the repository
git clone https://github.com/yourusername/CareerCompass.git

# Navigate to project directory
cd CareerCompass

# Configure database in src/auth/config.php
# Update with your database credentials
```

### Local Development (XAMPP)

1. **Install XAMPP** from [apachefriends.org](https://www.apachefriends.org/)

2. **Copy project** to `htdocs` folder:

   ```
   C:\xampp\htdocs\CareerCompass
   ```

3. **Start Apache and MySQL** in XAMPP Control Panel

4. **Configure database** in `src/auth/config.php`:

   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "careercompass";
   ```

5. **Access the app** at `http://localhost/CareerCompass/`

### InfinityFree Hosting

1. Create account at [infinityfree.com](https://www.infinityfree.com)
2. Create MySQL database in Control Panel
3. Update `src/auth/config.php` with InfinityFree credentials
4. Upload files via File Manager to `htdocs` folder

## 🛠️ Tech Stack

| Category | Technology                 |
| -------- | -------------------------- |
| Frontend | HTML5, CSS3, JavaScript    |
| Styling  | Tailwind CSS, Font Awesome |
| Backend  | PHP 7.4+                   |
| Database | MySQL                      |
| AI       | Google Gemini API          |
| Hosting  | InfinityFree / XAMPP       |

## 📁 Project Structure

```
CareerCompass/
├── src/
│   ├── auth/
│   │   ├── config.php              # Database configuration
│   │   ├── login.php               # User login
│   │   ├── logout.php              # Secure logout
│   │   ├── signup.php              # User registration
│   │   └── profile.php             # User profile
│   └── main/
│       ├── Home.php                # Career assessment
│       ├── AiRoadmap.php           # AI roadmap generator
│       ├── Jobsections.php         # Job listings
│       └── configJob.php           # Job configuration
├── index.html                      # Landing page
├── index.php                       # Main entry point
└── test_logout.php                 # Testing utility
```

## 🔐 Security Features

- 🔒 Password hashing with `PASSWORD_DEFAULT`
- 🛡️ SQL injection prevention (prepared statements)
- 🍪 Secure session management with cookie cleanup
- ✅ Auto session invalidation for deleted users
- 🧹 XSS protection with output encoding

## 👤 User Roles

| Role  | Access                                       |
| ----- | -------------------------------------------- |
| User  | Browse jobs, apply, assessments, roadmaps    |
| HR    | All user features + post/manage job listings |
| Admin | Full platform access, user management        |

## 🧪 Testing

### Test Logout Functionality

1. Access `test_logout.php` in your browser
2. Log in with a valid user
3. Click logout - verify redirect to login
4. Test browser back button - should redirect to login

### Test Auto-Logout on User Deletion

1. Log in to the application
2. Delete user from database:
   ```sql
   DELETE FROM users WHERE email = 'test@example.com';
   ```
3. Refresh any page - should auto-redirect to login

## 🔧 API Configuration

For AI features, add your Google Gemini API key in:

- `src/main/Home.php`
- `src/main/AiRoadmap.php`

Get your API key from [Google AI Studio](https://aistudio.google.com/app/apikey)

## 📜 Scripts

| Command                 | Description                  |
| ----------------------- | ---------------------------- |
| `php -S localhost:8000` | Start PHP development server |

## 🐛 Troubleshooting

| Issue                               | Solution                                          |
| ----------------------------------- | ------------------------------------------------- |
| Session not clearing                | Clear browser cookies, check PHP session settings |
| User still logged in after deletion | Ensure all pages have database verification       |
| AI features not working             | Verify Gemini API key is valid                    |
| Database connection error           | Check credentials in `config.php`                 |

## 📄 License

MIT License

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

---

Built with ❤️ for Career Development

© 2025 CareerCompass. All rights reserved.
