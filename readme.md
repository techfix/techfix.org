# TechFix

## Testing Setup

- Install Docker [Guide](https://docs.docker.com/install)
- Install Git [Guide](https://git-scm.com/downloads)
- Clone this repository `git clone git@github.com:techfix/techfix.org.git'
- cd into the repo `cd techfix.org`
- Run the application `docker-compose up -d`
- Migrate the database `docker-compose exec techfix bash -c "php artisan migrate"`
- Open in your brower [http://localhost:8080](http://localhost:8080)
- Open MailHog in your browser [http://localhost:8085](http://localhost:8085)

Since this is not a live application, all emails are captured in MailHog. This includes 
activation emails that are required to activeate your account for usage in the application.

If you get an error when attempting to migrate the database, wait a minute and try again, the
application may not be in a fully provisioned status (this depends on your hardware).

