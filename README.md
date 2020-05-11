########################### How to use ################################################################

- Clone the repository
- MySQL create database name: webshop
- Copy .env.example to .env and update your MySQL database username and password
- Open CMD
- Run composer install
- Run php artisan migrate --seed (it has some seeded data for your testing)
- Navigate to URL (Assuming this application is on web server like WAMP or XAMPP)


########################### Please note indicated (Complete) what has been completed.#####################


## Products
- Will have at least the following fields: name, description and price (Complete)
- Collection of products for customers to order. (Complete)
- Use seeders/factories for populating the product database table. (Complete)
- CRUD optional (if you choose to implement, only accesible by admin users) (Complete)

## Customers
- Customer registration (at least; email, password, adres information) (Complete)
- Email notification to confirm registration to the customer (Pending)
- Customer login (Complete)
- Optional: account confirmation through link in email (Pending)

## Ordering
- Customer can add products to a shopping cart. (Complete)
- Shopping cart overview, showing the sum total of product prices. (Complete)
- Customer can place order using 'order' button on shopping cart page (Complete)
  - Customer gets confirmation email
  - Admins get seperate notification by email
- Don't worry about payment or shipping, clicking the order button places the order

## Admin
- Admin users will be added through Laravel console commands
- Order overview page for admin users

## Bonus features
- Automated testing
- Registation of available product stock (show availability on product pages)
- Other admin features (customer overview, product CRUD, etc.)
- Use of translation files for frontend

