##### Installation ##########

    Clone the repository.
    
    Run composer install
    
    Run cp .env.example .env
    
    set IPGEOLOCATION_API_KEY in .env
    
    Run php artisan key:generate
    
    Run php artisan serve

##### Features ##########

    hitting url("http://127.0.0.1:8000/get-location/103.174.152.18") 
    will give the location related information of the ip

##### Used ##########

    Service Provider
    3rd party API: ipgeolocation 