app/console cache:clear --env=dev
app/console cache:clear --env=prod
chmod 777 -R app/cache
app/console assetic:dump
