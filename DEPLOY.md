# Deploying Rumman (DigitalOcean + GitHub Actions)

Same setup as Evercrest: one Ubuntu droplet, one Linux user per site, code deploys on `git push`.
Full background and the server bootstrap live in Evercrest's `self-hosting.md` (Steps 1–5).

**Code** (`themes/rumman`) deploys from git. **Content** (pages, posts, images, enquiries)
lives on the server and is never touched by a deploy.

| Placeholder | Means |
|---|---|
| `SERVER_IP` | the droplet's IP |
| `rumman.example.com` | the domain or subdomain for this site |
| `you` | your sudo login on the droplet |

## 1. Server (once)

- **Reusing the Evercrest droplet:** the stack and the `new-site` script are already there. Skip to step 2.
- **New droplet:** Ubuntu 24.04, 2 GB RAM, add your SSH key, then follow Evercrest `self-hosting.md` Steps 2–5.

## 2. Create the site

DNS: an A record for `rumman.example.com` → `SERVER_IP` (not needed if a wildcard `*` record already exists).

```bash
sudo new-site rumman rumman.example.com
```

## 3. Move the Studio site up (once)

On your PC (PowerShell):

```powershell
cd C:\Users\ocamp\Studio\rumman
studio export rumman.sql --mode db
C:\Windows\System32\tar.exe -czf rumman-files.tgz -C wp-content themes/rumman uploads
scp rumman.sql rumman-files.tgz you@SERVER_IP:/tmp/
```

Never upload `db.php`, `database/` or `mu-plugins/`: they're Studio's SQLite setup and would break MySQL.

On the server:

```bash
sed -i 's/utf8mb4_0900_ai_ci/utf8mb4_unicode_ci/g' /tmp/rumman.sql
sudo -u rumman -H bash -c '
  cd ~/public
  tar -xzf /tmp/rumman-files.tgz -C wp-content
  wp db import /tmp/rumman.sql
  wp search-replace "http://localhost:8890" "https://rumman.example.com" --all-tables
  wp theme activate rumman
  wp rewrite flush
'
rm /tmp/rumman.sql /tmp/rumman-files.tgz
sudo -u rumman -H wp user update admin --prompt=user_pass --path=/home/rumman/public   # Studio's password is known locally
```

## 4. CI/CD (once)

1. Allow the deploy key for the `rumman` user only (key pair is `~/.ssh/rumman_actions` on the PC):
   ```powershell
   scp $env:USERPROFILE\.ssh\rumman_actions.pub you@SERVER_IP:/tmp/
   ```
   ```bash
   sudo -u rumman -H bash -c 'mkdir -p ~/.ssh && chmod 700 ~/.ssh && cat /tmp/rumman_actions.pub >> ~/.ssh/authorized_keys && chmod 600 ~/.ssh/authorized_keys'
   rm /tmp/rumman_actions.pub
   ```
2. GitHub → repo **Settings → Secrets and variables → Actions**:
   - **Secrets** tab → `DEPLOY_KEY`: full contents of `~/.ssh/rumman_actions` (the private file, not `.pub`)
   - **Secrets** tab → `SERVER_IP`: the droplet IP
3. **Actions** tab → **Deploy Rumman** → **Run workflow** to test.

✅ The run goes green, and a small change pushed to `main` shows up on the live site.
