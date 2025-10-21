# PAD‑Mail‑IMAP‑Backup‑Docker  
Backup your IMAP mail with Docker

## 💡 What is this?  
This project provides a Docker based setup to automatically back up IMAP mail accounts.  
It’s ideal for keeping local copies of your email as an archive for disaster-proofing, migration or personal hosting.

## 🚀 Why use it?  
- Simplifies deployment via Docker and `docker-compose.yml`.  
- Runs your IMAP-backup tasks in a container, isolating dependencies.  
- Store your mail archive on a mounted host volume for persistence.  
- Self-hosted: you retain control of your mail backup, rather than relying solely on third-party cloud copy.

## 🧰 Contents of this repo  
- `docker-compose.yml` – defines the service, volumes, scheduling etc.  
- `config/` – sample directory where backup configuration lives create isyncrc from isyncrc.example.  
- Other Docker supporting scripts / configuration as needed.

## 📦 Getting started  

### Prerequisites  
- Docker installed on your host machine.  
- An IMAP account you wish to back up (including server, username/password).  
- A host directory to persist the backup data (so container restarts don’t lose mail archive).

### Setup instructions  
1. Clone this repository:  
   ```bash
   git clone https://github.com/paulduttonpad/PAD-Mail-IMAP-Backup-Docker.git  
   cd PAD-Mail-IMAP-Backup-Docker  
   ```

2. Configure your backup settings:  
   - In the `config/` directory (or another host directory you choose), create isyncrc from isyncrc.example that lists your account(s) and server information.  
   - **Important**: Store credentials safely, avoid exposing them in public repos.
     ```bash
     echo "Your password" > config/.imap_password
     chmod 600 config/.imap_password
     ```

3. Start the service:  
   ```bash
   docker-compose up -d
   ```  

4. Monitor backup results:  
   - Check logs (`docker compose logs -f`).  
   - Verify that your `Mail` host folder is receiving files / mail archives.  

5. Browse email at http://localhost:8080
   - login with any user
   - use `password` as the password
   - Navigate to folders, select manage folders and enable the folder you want to see.

## 🕒 Scheduling & Maintenance  
- The mail sync runs every hour.  
- Periodically check disk space and validate the archive.

---

