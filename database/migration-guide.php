

    Help for make:migrtion is as
    make:migration [options] [--] <name>
    In options
    --create[=CREATE]  The table to be created



    So concrete example of migration is as...

    php artisan make:migration creater  --create aiktable

    php artisan make:migration  --create aiktable creater

    What above is doing, it create migration file and set table name to aiktable.
