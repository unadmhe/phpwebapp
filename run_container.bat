set port=8081

set "curr_dir=%cd%"

start "" cmd.exe /C docker run -d -p %port%:80 --rm --name my_php8-apache -v %curr_dir%\app:/var/www/html php8/mysqli

timeout 5

"C:\Program Files\Google\Chrome\Application\Chrome.exe" http://localhost:%port%