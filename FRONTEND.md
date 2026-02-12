# Web Baba Frontend – Deploy

The **frontend** is your PHP website (pages + chatbot widget). It runs on your **web host** (e.g. Hostinger, cPanel). The **backend** (Flask chatbot API) runs on Railway.

---

## Frontend files to upload

Upload these to your web root (e.g. `public_html` or `www`):

| Path | Purpose |
|------|--------|
| **index.php** | Main homepage (India) |
| **ae.php** | UAE page |
| **privacy-policy.php** | Privacy policy |
| **terms-conditions.php** | Terms & conditions |
| **.htaccess** | Apache rules (if needed) |
| **images/** | All images (logos, icons, hero-bg.jpg, etc.) |
| **static/chatbot.js** | Optional – chatbot script (index.php has it inline) |
| **templates/chatbot.html** | Optional – demo page |
| **integration-script.html** | Reference only – copy from here to embed chatbot elsewhere |

You do **not** need to upload: `app.py`, `config.py`, `requirements.txt`, `Procfile`, `railway.json`, `agents/`, or any backend-only files.

---

## Deploy steps (like last time)

1. **Zip the frontend** (or use FTP/file manager):
   - Include: `index.php`, `ae.php`, `privacy-policy.php`, `terms-conditions.php`, `.htaccess`, `images/`, and optionally `static/`, `templates/`.
2. **Upload** to your host:
   - **Hostinger:** File Manager → `public_html` → Upload and overwrite.
   - **cPanel:** File Manager → `public_html` → Upload.
   - **FTP:** Connect and upload to the web root.
3. **Chatbot API URL:**  
   The site already points to:  
   `https://web-production-b2647.up.railway.app`  
   If your Railway URL changed, update it in:
   - **index.php** – search for `WEBBABA_CHATBOT_API` or `web-production-b2647`.
   - **integration-script.html** – search for `apiUrl` / `web-production-b2647`.

---

## Quick checklist

- [ ] All PHP pages and `images/` uploaded
- [ ] `.htaccess` uploaded (if you use it)
- [ ] Chatbot loads on the site (orange widget bottom-right)
- [ ] Test: send a message and submit lead form; check Google Sheet

---

## One-line summary

**Frontend** = PHP files + images (and optional static/templates) on your web host. **Backend** = Flask on Railway. Upload the frontend to Hostinger/cPanel; keep the chatbot API URL in index.php pointing to your Railway URL.
