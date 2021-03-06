# FlightHub

This application is used to build and navigate flights for a single passenger.

I created the system using the latest version of the Laravel Framework. I used migrations to create the tables and all tables have a seeder to populate the database
On this project, I used MySQL database and for testing the application I used Insomnia, however you can use whichever is your choice (e.g. Postman).
 
## Installation

To start locally running this project, please run the commands bellow:

Note: Prepare the file .env before running the command below, in order to run the migration correctly.

- composer update
- php artisan key: generate
- php artisan migrate --seed

## Usage

This webservice is hosted at
[FlightHub - Hellen Pastana](http://flighthub.hellenpastana.com/api/v1)

## To check the available flights
http://flighthub.hellenpastana.com/api/v1/trip/{departure_location}/{arrival_location}/{departure_date}

The parameters formats are:
```json
departure_location: YUL
arrival_location: YYZ
departure_date: 2021-07-02
```

To filter the results add the following parameters to the previous url:

```json
?airline=AC
?order_by=price,asc - type the collumn name and the ordering option
?one_way=true - if you want to set one way trips
```

## To store a trip with the selected flights in the previous api
http://flighthub.hellenpastana.com/api/v1/trip/

The json format to store data in this api is:
```json
{	
    "departure_location": "YWG",
    "departure_date": "2021-09-25",
    "arrival_location": "YVR",
    "number": [991, 751],
    "round_trip": true
}
```

## To show a trip
http://flighthub.hellenpastana.com/api/v1/trip/1

## To delete a trip
http://flighthub.hellenpastana.com/api/v1/trip/1/delete

## To get a list of flights
http://flighthub.hellenpastana.com/api/v1/flight

## To store a flight
http://flighthub.hellenpastana.com/api/v1/flight

The json format to store data in this api is:
```json
{
    "airline": "WS",
    "number": 110,
    "departure_airport": "YUL",
    "departure_time": "08:40",
    "arrival_airport": "YVR",
    "arrival_time": "10:40",
    "price": 320.55
}
```

## To show a flight
http://flighthub.hellenpastana.com/api/v1/flight/1

## To update a flight
http://flighthub.hellenpastana.com/api/v1/flight/1

The json format to update data in this api is:

```json
{
    "airline": "WS",
    "number": 110,
    "departure_airport": "YUL",
    "departure_time": "08:40",
    "arrival_airport": "YVR",
    "arrival_time": "10:50",
    "price": 320.88
}
```

## To delete a flight
http://flighthub.hellenpastana.com/api/v1/flight/1/delete

## To get a list of airline companies
http://flighthub.hellenpastana.com/api/v1/airline

## To store an airline
http://flighthub.hellenpastana.com/api/v1/airline

The json format to store data in this api is:

```json
{
    "code": "LT",
    "name": "Latam "
}
```

## To show an airline company
http://flighthub.hellenpastana.com/api/v1/airline/1

## To update an airline company
http://flighthub.hellenpastana.com/api/v1/airline/1

The json format to update data in this api is:

```json
{	
    "code": "LT",
    "name": "Latam Airlines"
}
```

## To delete an airline company
http://flighthub.hellenpastana.com/api/v1/airline/1/delete


## To get a list of airports
http://flighthub.hellenpastana.com/api/v1/airport

## To store an airport
http://flighthub.hellenpastana.com/api/v1/airport

The json format to store data in this api is:

```json
{
    "code": "GRU",
    "name": "Guarulhos AirPort",
    "city_code": "GRU",
    "city": "Guarulhos",
    "country_code": "BR" ,
    "region_code": "SP",
    "timezone": "America/Brasilia",
    "latitude": 45.45771400,
    "longitude": -73.74990800
}
```

## To update an airport
http://flighthub.hellenpastana.com/api/v1/airport/1

The json format to update data in this api is:

```json
{
    "code": "GRU",
    "name": "Guarulhos International AirPort",
    "city_code": "GRU",
    "city": "Guarulhos",
    "country_code": "BR" ,
    "region_code": "SP",
    "timezone": "America/Brasilia",
    "latitude": 45.45771400,
    "longitude": -73.74990800
}
```

## To show an airport
http://flighthub.hellenpastana.com/api/v1/airport/1

## To delete an airport
http://flighthub.hellenpastana.com/api/v1/airport/1/delete

Moreover, a json file with the endpoints from Insomnia are available in a separate file in public/endpoints.

