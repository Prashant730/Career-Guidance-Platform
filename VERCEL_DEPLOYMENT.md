# Vercel Deployment Guide

This guide will help you deploy your Career Guidance Platform to Vercel with automatic deployments.

## Prerequisites

1. **Vercel Account**: Sign up at [vercel.com](https://vercel.com) if you don't have one
2. **Git Repository**: Your project should be in a Git repository (GitHub, GitLab, or Bitbucket)
3. **Cloud MySQL Database**: Vercel doesn't support local MySQL. You'll need a cloud database service:
   - **PlanetScale** (Recommended - Free tier available): https://planetscale.com
   - **AWS RDS**: https://aws.amazon.com/rds
   - **Google Cloud SQL**: https://cloud.google.com/sql
   - **Railway**: https://railway.app (Free tier available)
   - **Aiven**: https://aiven.io (Free tier available)

## Step 1: Set Up Cloud MySQL Database

### Option A: Using PlanetScale (Recommended)

1. Go to [planetscale.com](https://planetscale.com) and sign up
2. Create a new database
3. Copy the connection details:
   - Host
   - Username
   - Password
   - Database name
   - Port (usually 3306)

### Option B: Using Railway

1. Go to [railway.app](https://railway.app) and sign up
2. Create a new project
3. Add a MySQL service
4. Copy the connection details from the service variables

## Step 2: Connect Your Repository to Vercel

### Method 1: Using Vercel CLI (Recommended for automatic deployments)

1. Install Vercel CLI:
   ```bash
   npm install -g vercel
   ```

2. Login to Vercel:
   ```bash
   vercel login
   ```

3. Link your project to the existing Vercel project:
   ```bash
   vercel link --project prj_GIjeBXD8Qdm6jW5S9o4sBzUPnCyq
   ```

4. Deploy:
   ```bash
   vercel --prod
   ```

### Method 2: Using Vercel Dashboard (For Git Integration)

1. Go to [vercel.com/dashboard](https://vercel.com/dashboard)
2. Click "Add New Project"
3. Import your Git repository (GitHub/GitLab/Bitbucket)
4. Select the project with ID: `prj_GIjeBXD8Qdm6jW5S9o4sBzUPnCyq`
5. Configure the project:
   - **Framework Preset**: Other
   - **Root Directory**: `./` (leave as default)
   - **Build Command**: Leave empty
   - **Output Directory**: Leave empty

## Step 3: Configure Environment Variables

In your Vercel project dashboard:

1. Go to **Settings** → **Environment Variables**
2. Add the following environment variables:

   ```
   DB_HOST=your-database-host
   DB_USER=your-database-username
   DB_PASSWORD=your-database-password
   DB_NAME=your-database-name
   DB_PORT=3306
   ```

   **Example for PlanetScale:**
   ```
   DB_HOST=aws.connect.psdb.cloud
   DB_USER=your-username
   DB_PASSWORD=your-password
   DB_NAME=careercompass
   DB_PORT=3306
   ```

3. Make sure to add these for **Production**, **Preview**, and **Development** environments

## Step 4: Initialize Database Tables

After deployment, you'll need to create the database tables. You have two options:

### Option A: Run SQL Scripts Manually

Connect to your cloud database and run the table creation SQL from your local database, or use the populate scripts.

### Option B: Use the Application

The application will automatically create tables on first use (if the database user has CREATE TABLE permissions).

## Step 5: Enable Automatic Deployments

### For Git Integration (Recommended)

1. In Vercel Dashboard → **Settings** → **Git**
2. Connect your repository (GitHub/GitLab/Bitbucket)
3. Enable automatic deployments:
   - **Production Branch**: Usually `main` or `master`
   - **Automatic deployments**: Enabled by default

Now, every time you push to your main branch, Vercel will automatically deploy your changes!

### For Manual Deployments

If you prefer manual deployments, you can use:
```bash
vercel --prod
```

## Step 6: Verify Deployment

1. Visit your Vercel deployment URL (provided after deployment)
2. Test the application:
   - Sign up a new user
   - Login
   - Test the career assessment
   - Test job listings

## Troubleshooting

### Database Connection Issues

- Verify all environment variables are set correctly in Vercel
- Check that your cloud database allows connections from Vercel's IP addresses
- For PlanetScale: Make sure you've created a branch and password
- Check Vercel function logs: **Deployments** → **Your Deployment** → **Functions** → **View Logs**

### PHP Errors

- Check Vercel function logs for detailed error messages
- Ensure all PHP files have proper syntax
- Verify file paths are correct (Vercel uses serverless functions)

### Session Issues

- Vercel's serverless functions may have session limitations
- Consider using a session store like Redis or database sessions for production

## Important Notes

1. **Database**: You MUST use a cloud MySQL database. Localhost won't work on Vercel.

2. **File Uploads**: If your application handles file uploads (like resumes), you'll need to use a cloud storage service (AWS S3, Cloudinary, etc.) as Vercel's filesystem is read-only.

3. **API Keys**: Make sure to add your Google Gemini API key as an environment variable if you haven't already:
   ```
   GEMINI_API_KEY=your-api-key-here
   ```

4. **HTTPS**: Vercel automatically provides HTTPS for all deployments.

## Next Steps

- Set up a custom domain in Vercel Dashboard → **Settings** → **Domains**
- Configure monitoring and analytics
- Set up preview deployments for pull requests

## Support

For Vercel-specific issues, check:
- [Vercel Documentation](https://vercel.com/docs)
- [Vercel PHP Runtime](https://vercel.com/docs/runtimes/php)

For project-specific issues, refer to the main README.md file.

