# Quick Start - Deploy to Vercel

## ✅ What's Been Set Up

1. ✅ **vercel.json** - Configuration file for PHP routing
2. ✅ **Database Config** - Updated to use environment variables
3. ✅ **.vercelignore** - Files to exclude from deployment
4. ✅ **Vercel CLI** - Installed and ready

## 🚀 Next Steps to Deploy

### Step 1: Commit Your Changes

First, commit the new files to Git:

```bash
git add vercel.json .vercelignore src/auth/config.php VERCEL_DEPLOYMENT.md QUICK_START.md
git commit -m "Add Vercel deployment configuration"
git push
```

### Step 2: Login to Vercel

Run this command and follow the prompts:

```bash
vercel login
```

This will open a browser window for you to authenticate.

### Step 3: Link to Your Project

After logging in, link to your existing Vercel project:

```bash
vercel link --project prj_GIjeBXD8Qdm6jW5S9o4sBzUPnCyq
```

When prompted:
- **Set up and deploy?** → Yes
- **Which scope?** → Select your account
- **Link to existing project?** → Yes
- **What's the name of your existing project?** → It should auto-detect or you can enter it

### Step 4: Set Up Cloud Database (IMPORTANT!)

⚠️ **You MUST set up a cloud MySQL database before deploying!**

**Recommended: PlanetScale (Free tier available)**

1. Go to https://planetscale.com and sign up
2. Create a new database
3. Create a branch (e.g., `main`)
4. Get your connection credentials:
   - Host
   - Username  
   - Password
   - Database name

**Or use Railway (Free tier):**

1. Go to https://railway.app and sign up
2. Create a new project
3. Add MySQL service
4. Copy connection details from variables

### Step 5: Configure Environment Variables

After linking, set environment variables in Vercel:

**Option A: Via CLI**
```bash
vercel env add DB_HOST
vercel env add DB_USER
vercel env add DB_PASSWORD
vercel env add DB_NAME
vercel env add DB_PORT
```

For each variable, select:
- **Environment:** Production, Preview, Development (select all)
- **Value:** Enter your database credentials

**Option B: Via Dashboard**
1. Go to https://vercel.com/dashboard
2. Select your project
3. Go to **Settings** → **Environment Variables**
4. Add:
   - `DB_HOST` = your database host
   - `DB_USER` = your database username
   - `DB_PASSWORD` = your database password
   - `DB_NAME` = your database name (e.g., `careercompass`)
   - `DB_PORT` = `3306`

### Step 6: Deploy!

```bash
vercel --prod
```

This will deploy to production. Your site will be live at a URL like:
`https://your-project-name.vercel.app`

### Step 7: Enable Automatic Deployments

For automatic deployments when you push to Git:

1. Go to https://vercel.com/dashboard
2. Select your project
3. Go to **Settings** → **Git**
4. Connect your repository (GitHub/GitLab/Bitbucket)
5. Enable automatic deployments

Now, every time you `git push`, Vercel will automatically deploy! 🎉

## 📝 Important Notes

1. **Database Required**: You cannot use `localhost` MySQL on Vercel. You MUST use a cloud database.

2. **First Deployment**: After deployment, you may need to initialize database tables. The app will try to create them automatically, but you might need to run SQL scripts manually.

3. **File Uploads**: If your app handles file uploads (like resumes), you'll need cloud storage (AWS S3, Cloudinary, etc.) as Vercel's filesystem is read-only.

4. **API Keys**: Don't forget to add your Google Gemini API key as an environment variable if needed:
   ```
   GEMINI_API_KEY=your-api-key
   ```

## 🆘 Troubleshooting

- **Database connection errors?** → Check environment variables are set correctly
- **404 errors?** → Check vercel.json routing configuration
- **PHP errors?** → Check Vercel function logs in dashboard

## 📚 Full Documentation

See `VERCEL_DEPLOYMENT.md` for detailed instructions.

