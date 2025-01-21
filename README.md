## Configuration
## php.ini
upload_max_filesize = 50M
post_max_size = 50M
memory_limit = 256M
max_execution_time = 300
max_input_time = 300

## Nginx config
client_max_body_size 50M;

https://gitlab.62teknologi.com/62teknologi/mandiri-capital-web-apps.git
git push git@gitlab.62teknologi.com:62teknologi/mandiri-capital-web-apps.git

cd existing_repo
git remote add origin https://gitlab.62teknologi.com/62teknologi/mandiri-capital-web-apps.git
git branch -M staging
git push -uf origin staging
