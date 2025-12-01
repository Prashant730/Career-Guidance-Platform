# CareerCompass - Career Development Platform

## Project Overview

CareerCompass is a comprehensive career development platform designed to help users navigate their professional journey. The platform offers career assessment tools, personalized roadmap generation, job listings with skill matching, application tracking, and role-based features in one integrated solution.

## Features

### User Authentication

- Secure signup and login system
- Password hashing for security
- Session management
- Role-based access (User, HR, Admin)

### Career Assessment (`Home.php`)

- Interactive questionnaire to identify career interests and strengths
- AI-powered analysis of responses using Google Gemini
- Personalized career recommendations and skill identification
- Save and review past assessment history

### AI Roadmap Generator (`AiRoadmap.php`)

- Create customized learning and career development roadmaps using AI
- Tailored to user's goals, current skills, interests, and timeframe
- Step-by-step guidance with resource recommendations
- Save, view history, and download roadmaps for future reference

### Job Listings (`Jobsections.php`)

- Browse job listings from the database
- **Skill Matching**: Jobs are sorted based on match with user's assessed skills
- Search and filter functionality (keyword, location, job type)
- **Job Application**: Apply directly through the platform with resume upload
- **Job Bookmarking**: Save jobs for later viewing
- **Job Posting**: Users with 'HR' or 'Admin' roles can post new job listings

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript, Tailwind CSS
- **Backend**: PHP, MySQL
- **AI Integration**: Google Gemini API
- **Hosting**: InfinityFree (or any PHP/MySQL compatible hosting)

## Live Demo

🌐 **Live Site**: [Your InfinityFree URL here]

## Installation

### Option 1: Local Development (XAMPP)

1. **Install XAMPP** from [apachefriends.org](https://www.apachefriends.org/download.html)

2. **Clone the project** to `htdocs` folder:

   ```
   C:\xampp\htdocs\CareerCompass
   ```

3. **Start Apache and MySQL** in XAMPP Control Panel

4. **Create database**:

   - Open `http://localhost/phpmyadmin`
   - Create database named `careercompass`

5. **Configure database** in `src/auth/config.php`:

   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "careercompass";
   ```

6. **Access the app** at `http://localhost/CareerCompass/`

### Option 2: InfinityFree Hosting

1. **Create account** at [infinityfree.com](https://www.infinityfree.com)

2. **Create MySQL database** in Control Panel

3. **Update `src/auth/config.php`** with InfinityFree credentials:

   ```php
   $servername = "sqlXXX.infinityfree.com";
   $username = "if0_XXXXXXXX";
   $password = "your_password";
   $dbname = "if0_XXXXXXXX_careercompass";
   ```

4. **Upload files** via File Manager to `htdocs` folder

## Project Structure

```
CareerCompass/
├── src/
│   ├── auth/
│   │   ├── config.php      # Database configuration
│   │   ├── login.php       # User login
│   │   ├── logout.php      # User logout
│   │   ├── profile.php     # User profile
│   │   └── signup.php      # User registration
│   └── main/
│       ├── Home.php        # Career assessment
│       ├── AiRoadmap.php   # Roadmap generator
│       └── Jobsections.php # Job listings
├── index.html              # Landing page
└── index.php               # Main entry point
```

## API Configuration

For AI features to work, add your Google Gemini API key in:

- `src/main/Home.php`
- `src/main/AiRoadmap.php`

Get your API key from [Google AI Studio](https://aistudio.google.com/app/apikey)

## License

MIT License

---

© 2025 CareerCompass. All rights reserved.
