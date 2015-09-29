# How to Set Up .htpasswd

- Create your .htaccess file pointing to your desired .htpasswd
- `htpasswd -c /[directory]/.htpasswd [username] `
- ` vi /etc/apache2/apache2.conf `
- find `AllowOverride` for var/www/ directory. If it set to `None`, change it to `AuthConfig`
- `a2enmod rewrite`
- `/etc/init.d/apache2 restart`
- More info at: http://weavervsworld.com/docs/other/passprotect.html
