# CodeIgniter 4 Simple POS Foundation

This package contains the complete custom files for the four-page CodeIgniter
activity. It includes Home, About, Customer Accounts, and User Accounts pages.
Customer and user records come from static PHP arrays, so no database is needed.

## 1. Create the CodeIgniter project

Open a terminal in the folder where you want to create your project, then run:

```bash
composer create-project codeigniter4/appstarter simple-pos
cd simple-pos
```

If you already created a CodeIgniter project, skip this step.

## 2. Copy these files into your project

Copy the `app` and `public` folders from this package into the root folder of
your CodeIgniter project. Allow your computer to replace `app/Config/Routes.php`.
The other supplied files are new files.

Do not replace the complete `app/Controllers` or `app/Views` directories. Copy
the supplied files into their matching directories so that CodeIgniter's
existing framework files remain available.

## 3. Configure the environment

In your CodeIgniter project folder, make a copy of the file named `env` and name
the copy `.env`. Open `.env`, then find and change these settings:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:2006/'
```

Remove the `#` at the beginning of either setting if it is present.

## 4. Start the development server

Run this command from the root folder of your CodeIgniter project:

```bash
php spark serve --port 2006
```

Keep the terminal open while viewing the website.

## 5. Test all required pages

Open these addresses in your browser:

- Home: <http://localhost:2006/>
- About: <http://localhost:2006/about>
- Customer Accounts: <http://localhost:2006/customers>
- User Accounts: <http://localhost:2006/users>

## Request flow

For example, visiting `/customers` matches the customers route. That route runs
the `index()` method of the `Customers` controller. The controller creates the
static customer array and passes it to the customer view. The view loops over
the array and generates the HTML table returned to the browser.

## Important project structure

```text
app/
├── Config/
│   └── Routes.php
├── Controllers/
│   ├── Customers.php
│   ├── Pages.php
│   └── Users.php
└── Views/
    ├── customers/
    │   └── index.php
    ├── pages/
    │   ├── about.php
    │   └── home.php
    ├── templates/
    │   ├── footer.php
    │   └── header.php
    └── users/
        └── index.php
public/
└── css/
    └── style.css
```

## Troubleshooting

- If `php spark serve` fails, confirm that PHP and Composer are installed.
- If port 2006 is already occupied, close the other server using that port.
- If a page says it cannot find a route, confirm that `app/Config/Routes.php`
  was replaced with the supplied file.
- If CSS does not load, confirm that `style.css` is inside `public/css` and that
  `app.baseURL` contains the correct port and trailing slash.
- File and folder names should use the exact capitalization shown above.

