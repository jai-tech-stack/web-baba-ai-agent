# Deploy Web Baba Chatbot (Railway)

Deploy the Flask chatbot backend the same way as last time.

---

## 1. Commit and push your code

```bash
cd c:\Users\Admin\Desktop\web-baba
git add .
git commit -m "Keep only required: chatbot + lead save, remove agents"
git push origin main
```

---

## 2. Deploy on Railway

**If Railway is already connected to this repo (like last time):**

- Pushing to `main` will **auto-deploy**.
- Open your project: https://railway.app/dashboard
- Select the **web-baba** (or chatbot) project → **Deployments** to see the new build and logs.

**If you deploy with Railway CLI:**

```bash
# Install CLI once: npm i -g @railway/cli
railway login
railway link   # link to existing project if needed
railway up
```

---

## 3. Environment variables (Railway)

In Railway → your service → **Variables**, ensure:

| Variable | Required |
|----------|----------|
| `OPENAI_API_KEY` | Yes – from https://platform.openai.com/api-keys |
| `GOOGLE_SHEET_ID` | Yes – ID from your Google Sheet URL |
| `GOOGLE_SHEET_CREDS` | Yes – full JSON string of service account credentials |
| `PORT` | Optional – Railway sets this automatically |

---

## 4. After deploy

- Your API URL will be like: `https://web-production-b2647.up.railway.app` (or the one Railway shows).
- Test: **GET** `https://YOUR-URL/health` → should return `{"status":"healthy"}`.
- The site (index.php) already uses the chatbot API URL; if you changed the project name on Railway, update the `apiUrl` in **index.php** and **integration-script.html** to the new URL.

---

## Quick checklist

- [ ] Code committed and pushed to `main`
- [ ] Railway has `OPENAI_API_KEY`, `GOOGLE_SHEET_ID`, `GOOGLE_SHEET_CREDS`
- [ ] Deployment succeeded (green in Railway dashboard)
- [ ] `/health` returns healthy
- [ ] Chatbot on site works and leads save to Google Sheets
