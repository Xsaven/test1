## Setup

1. Clone the repository.
2. Run `composer install`.
3. Set up your `.env` file with database details.
4. Run migrations: `php artisan migrate`.
5. Run the development server: `php artisan serve`.
6. Run the queue worker: `php artisan queue:work`.

## Testing

To test the API, you can use UnitTests, Postman or CURL to send a POST request to `/api/submission` with the following JSON payload:

```json
{
    "name": "Taylor Otwell",
    "email": "taylor-otwell@gmail.com",
    "message": "Hello, I am the creator of Laravel"
}
```

### Unit Tests

To run the unit tests, run `php artisan test`.

### Postman
You can import the Postman collection from the following link: [Postman Collection](https://api.postman.com/collections/4831548-3c2cd187-8d46-4b17-ab08-0bc9785a815e?access_key=PMAT-01J7C0AD00FMTTW2G2F60NK8J8)
