# Web II project

Web II project or E-Shop is a small web application project that allows users to browse and purchase products online. It
features a user-friendly interface and an admin panel for managing the content and features of the website.

## Features

- User registration and authentication
- User profile management
- Dynamic content management via the admin panel
- Featured products section on the home page
- Product search functionality by category or name
- Product details page with image, description, price, and discount
- Ability to add products to the cart
- Ability to manage the cart and show total price and count
- Ability to mark products as favorites
- Most sales and trending items sections
- Product categories section with all products in each category

## Screenshots

![Home page](./README_images/Screenshot%202023-04-07%20164315.png)
![Recent Product](./README_images/Screenshot%202023-04-07%20164412.png)
![Product Details](./README_images/Screenshot%202023-04-07%20171035.png)
![Cart](./README_images/Screenshot%202023-04-07%20164602.png)
![Login page](./README_images/Screenshot%202023-04-07%20170644.png)
![Admin Panel stat](./README_images/Screenshot%202023-04-07%20164825.png)
![Admin CRUD operation](./README_images/Screenshot%202023-04-07%20164839.png)

## Technologies Used

- PHP 7.4.3
- MySQL 8.0.23
- AdminLTE 3.1.0
- HTML/CSS/JavaScript
- Bootstrap 4.5.3
- jQuery 3.5.1
- talwindcss 2.0.2
- scss 1.26.10

## Installation

To install and run the application locally, follow these steps:

1. Clone the repository: git clone https://github.com/rachadaccoumeh/webIIProject
2. Import the database dump file into your MySQL server: mysql -u [username] -p [database_name] < database/e-shop.sql
3. Update the database connection settings in config/db.php file.
4. Configure your web server to serve the public directory as the root directory of the website.
5. Launch the website in your web browser.

## Usage

To use the application, follow these steps:

1. Register for an account or log in if you already have one.
2. Browse the home page to view the featured products, most sales items, and trending products.
3. Click on a category to view all the products in that category.
4. Click on a product to view its details, add it to the cart, or mark it as a favorite.
5. Click on the cart icon to manage your cart and view the total price and count.
6. Use the search bar to search for a specific product by name or category.

## Admin Panel

To access the admin panel, log in to your account with administrator privileges and navigate to ```/admin.php```
directory. From the admin panel, you can:

- Manage products, categories, and orders
- View statistics and reports
- Add, edit, or remove users

## Contributing

If you would like to contribute to this project, please follow these guidelines:

- Fork the repository
- Create a new branch: `git checkout -b my-new-feature`
- Make your changes and commit them: `git commit -am 'Add some feature'`
- Push to the branch: `git push origin my-new-feature`
- Submit a pull request