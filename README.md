# Matrix Multiplication 
is a simple api that returns a ciphered product of two arrays

## Installation
clone the app into your local projects directory

```bash
git clone https://github.com/nelsonomoi/matrix_multiplication.git

```

## Usage

*  run composer update to update the clonned project
*  create .env file and add connection to the database
*  run php artisan migrate 
this will create a test user with email as tester@gmail.com and password as abcd1234
*  send a post request to /api/mult having a token which you can get once you log in using the endpoint /api/login with provided email and password.
*  /api/mult is a post request and accept only two arrays as a and b 


