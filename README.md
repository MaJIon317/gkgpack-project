# sudo systemctl daemon-reexec
# sudo systemctl daemon-reload
# sudo systemctl enable --now reverb
# sudo systemctl disable --now reverb
# sudo systemctl status reverb

# php artisan reverb:start --debug


sudo adduser gkguser    I2bgm7L5vVG9 
sudo usermod -aG sudo gkguser
 sudo chown -R gkguser:www-data /var/www/gkgpack.su/public_html

sudo usermod -aG www-data gkguser

sudo chown -R gkguser:gkguser /var/www/gkgpack.su/public_html/storage
sudo chown -R gkguser:gkguser /var/www/gkgpack.su/public_html/bootstrap/cache

sudo chmod -R 775 /var/www/gkgpack.su/public_html/storage
sudo chmod -R 775 /var/www/gkgpack.su/public_html/bootstrap/cache


su - gkguser

CREATE DATABASE gkguserdb;
CREATE USER 'gkguserdbuser'@'localhost' IDENTIFIED BY 'aMoiaB8wuCZN';
GRANT ALL PRIVILEGES ON gkguserdb.* TO 'gkguserdbuser'@'localhost';
FLUSH PRIVILEGES;
EXIT;
CREATE USER 'pmauser'@'localhost' IDENTIFIED BY 'aMoiaB8wuCZN';


sudo mkdir -p /var/www/gkgpack.su/public_html
sudo chown -R gkguser:gkguser /var/www/gkgpack.su

sudo nano /etc/nginx/sites-available/gkgpack.su



[Unit]
Description=Laravel Reverb Server
After=network.target

[Service]
User=www-data
Group=www-data
Restart=always
ExecStart=/usr/bin/php /var/www/gkgpack.su/public_html/artisan reverb:start
WorkingDirectory=/var/www/gkgpack.su/public_html
StandardOutput=append:/var/log/reverb.log
StandardError=append:/var/log/reverb-error.log

[Install]
WantedBy=multi-user.target













server {
    listen 80;
    server_name gkgpack.su www.gkgpack.su;

    root /var/www/gkgpack.su/public_html;
    index index.php index.html index.htm;

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;  # Уточните версию PHP
    }

    location ~ /\.ht {
        deny all;
    }
}



# 
sudo ln -s /etc/nginx/sites-available/gkgpack.su /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl reload nginx

sudo certbot --nginx -d gkgpack.su -d www.gkgpack.su